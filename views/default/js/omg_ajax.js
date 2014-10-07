define(function(require) {
	var $ = require('jquery');
	var elgg = require('elgg');

	var init = function() {
		var formSelectors = [
			'.elgg-form-comment-save',
			'.elgg-form-discussion-reply-save'
		];
		
		// add omg ajax to only certain forms
		$('body').on('submit', formSelectors.join(', '), function(e) {
			$(this).addClass('omg-ajax').data('selector', '.elgg-main.elgg-body');
			omgAjaxCallback.call(this, e);
		});

//		$('body').on('submit', 'form.omg-ajax', omgAjaxCallback);
//		$('body').on('click', 'a.omg-ajax', omgAjaxCallback);

		$('body').off('click', 'elgg-requires-confirmation.omg-ajax', elgg.ui.requiresConfirmation);
		$('.elgg-requires-confirmation').die('click', elgg.ui.requiresConfirmation);
	};

	var omgAjaxCallback = function(e) {
		e.preventDefault();
		var $this = $(this);

		if ($this.hasClass('elgg-requires-confirmation')) {
			var confirmText = $(this).attr('rel') || elgg.echo('question:areyousure');
			if (!confirm(confirmText)) {
				return false;
			}
		}

		var selector = $this.data('selector'),
		targetSelector = $this.data('targetSelector'),
		targetReplace = $this.data('targetReplace') === undefined ? true : $this.data('targetReplace'),
		sourceSelector = $this.data('sourceSelector'),
		sourceUrl = $this.data('sourceUrl') || 'forward',
		isForm = $this.is('form');

		if (selector) {
			targetSelector = sourceSelector = selector;
		}

		$this.omgAjaxSubmit({
			sourceUrl: sourceUrl,
			sourceSelector: sourceSelector,
			targetSelector: targetSelector,
			targetReplace: targetReplace,

			resetForm: false,
			beforeSubmit: function(data, form) {
				if (isForm) {
					// find input/button type=submit and disable them.
					var button = $(form).find('button[type=submit]');
					button.data('submit-text', button.html())
						.attr('disabled', 'disabled')
						.html('Saving...');

					var input = $(form).find('input[type=submit]');
					input.data('submit-text', input.attr('value'))
						.attr('disabled', 'disabled')
						.attr('value', 'Saving...');
				}
			},
			error: function(a, b, c) {
				// restore form submit
				if (isForm) {
					var button = $this.find('button[type=submit]');
					button.removeAttr('disabled')
						.html(button.data('submit-text'));

					var input = $this.find('input[type=submit]');
					input.removeAttr('disabled')
						.attr('value', input.data('submit-text'));
				}
			},
			success: function(result, statusText, xhr, $form) {
				var json, success, fn, replace, url;
				// restore form submit
				if (isForm) {
					var button = $form.find('button[type=submit]');
					button.removeAttr('disabled')
						.html(button.data('submit-text'));

					var input = $form.find('input[type=submit]');
					input.removeAttr('disabled')
						.attr('value', input.data('submit-text'));
				}

				// succcess just means if the server didn't error.
				// we can not have a server error, but still have an ajax error,
				// so don't reset the form.
				if (statusText === 'json_failed') {
					return;
				}

				if (isForm) {
					$form.resetForm();
				}
			}
		});
	};


	// extend jQuery
	(function($) {
	// so we can call recursively
	var omgAjaxSubmitHelper = function() {
		$.fn.omgAjaxSubmit.apply(this, arguments);
	};

	$.fn.extend({
		omgAjaxSubmit: function(options) {
			var defaults = {
				beforeSerialize: null,
				beforeSubmit: null,
				error: null,
				success: null
			};

			if (!this.is('form')) {
				// let ajaxform deal with forms.
				defaults.type = 'GET';
				defaults.url = this.attr('href');
			}

			options = $.extend(defaults, options || {});

			var data = {
				'X-Requested-With': 'XMLHttpRequest',
				'omg_ajax[source_url]': options.sourceUrl,
				'omg_ajax[source_selector]': options.sourceSelector,
				'omg_ajax[target_selector]': options.targetSelector,
				'omg_ajax[target_replace]': options.targetReplace
			};

			if (typeof options.data === 'object') {
				options.data = $.extend(options.data, data);
			} else {
				options.data = data;
			}

			// add our own error handling
			var old = options.error;

			options.error = function() {
				elgg.register_error("Unknown error. Please try again or reload the page.");
				if ($.isFunction(old)) {
					return old.apply(this, arguments);
				}
				return true;
			};

			old = options.success;

			// add our own success handling
			options.success = function(result, statusText, xhr) {
				var $target = $(options.targetSelector),
						json,
						success,
						fn,
						replace;

				// is this html or json?
				try {
					json = $.parseJSON(result);
					success = json.status >= 0;
					result = json.output;

					// show any messages
					if (json.system_messages) {
						elgg.register_error(json.system_messages.error);
						elgg.system_message(json.system_messages.success);
					}
				} catch (e) {
					success = true;
				}

				if (!success) {
					statusText = 'json_failed';
				}

				// don't continue if not target to update
				if (!$target.length) {
					if ($.isFunction(old)) {
						return old.apply(this, arguments);
					}

					return true;
				}

				if (options.sourceUrl === 'response') {
					$target.each(function() {
						var $this = $(this);

						// can't do this earlier because these are objects and will
						// get moved around to each instance. Need to create new ones
						if (options.sourceSelector) {
							replace = $(options.sourceSelector, result);
						} else {
							replace = result;
						}

						if (options.targetReplace) {
							fn = $this.replaceWith;
						} else {
							fn = $this.html;
						}

						fn.call($this, replace);
					});

					if ($.isFunction(old)) {
						return old.apply(this, arguments);
					}

					return true;
				}

				// have to make another call, so add loader
				$('<div id="omg-ajax-update-loader" class="elgg-ajax-loader">').prependTo($target);

				var url;
				switch(options.sourceUrl) {
					case 'forward':
						if (json && json.forward_url) {
							url = json.forward_url;
						} else {
							console.log("Invalid forward");
						}
						break;

					case 'self':
						url = window.location.toString();
						break;

					default:
						url = options.sourceUrl;
				}

				// we have to make another request, so call ourselves
				// specifying the url manually and "response" as the sourceUrl
				url = elgg.normalize_url(url);
				omgAjaxSubmitHelper.call($target, {
					url: url,
					sourceUrl: 'response',
					sourceSelector: options.sourceSelector,
					targetReplace: options.targetReplace,
					targetSelector: options.targetSelector
				});

				if ($.isFunction(old)) {
					return old.apply(this, arguments);
				}
				return true;
			};

			if (this.is('form')) {
				this.ajaxSubmit(options);
			} else {
				// normalize the ajaxForms callback
				if (options.beforeSubmit) {
					options.beforeSend = options.beforeSubmit;
				}
				$.ajax(options);
			}
			return this;
		}
	});

	})($);

	elgg.register_hook_handler('init', 'system', init);

	return {};
});