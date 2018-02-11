/*
	ZeroFour by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
*/

(function($) {

	skel
		.breakpoints({
			desktop: '(min-width: 737px)',
			tablet: '(min-width: 737px) and (max-width: 1200px)',
			mobile: '(max-width: 736px)'
		})
		.viewport({
			breakpoints: {
				tablet: {
					width: 1080
				}
			}
		});

	var color1 = "#ccffff";

	$(function() {
		$("#sms_form").hide();
		$("#sms_form_disabled").hide();
		//$("#email_form").hide();
		$("#email_choice").css({'background-color': color1});

		$("#email_choice").click(function(){
			$("#sms_choice").css({'background-color': '#fff'});
			$(this).css({'background-color': color1});
			$("#sms_form").hide();
			$("#sms_form_disabled").hide();
			$("#email_form").show();
		});

		$("#sms_choice").click(function(){
			$("#email_choice").css({'background-color': '#fff'});
			$(this).css({'background-color': color1});
			$("#email_form").hide();
			$("#sms_form_disabled").show();
		});
		// Email notification time color change

		$("#Sat9Email_box").css({'background-color': color1});

		$("#Fri_9_email").click(function(){
			$(".notification_time_email").css({'background-color': '#fff'});
			$("#Fri9Email_box").css({'background-color': color1});
		});

		$("#Fri_16_email").click(function(){
			$(".notification_time_email").css({'background-color': '#fff'});
			$("#Fri16Email_box").css({'background-color': color1});
		});

		$("#Sat_9_email").click(function(){
			$(".notification_time_email").css({'background-color': '#fff'});
			$("#Sat9Email_box").css({'background-color': color1});
		});

		$("#Sat_16_email").click(function(){
			$(".notification_time_email").css({'background-color': '#fff'});
			$("#Sat16Email_box").css({'background-color': color1});
		});
		// Sms notification time color change
		$("#Fri_9_sms").click(function(){
			$(".notification_time_sms").css({'background-color': '#fff'});
			$("#Fri9Sms_box").css({'background-color': color1});
		});

		$("#Fri_16_sms").click(function(){
			$(".notification_time_sms").css({'background-color': '#fff'});
			$("#Fri16Sms_box").css({'background-color': color1});
		});

		$("#Sat_9_sms").click(function(){
			$(".notification_time_sms").css({'background-color': '#fff'});
			$("#Sat9Sms_box").css({'background-color': color1});
		});

		$("#Sat_16_sms").click(function(){
			$(".notification_time_sms").css({'background-color': '#fff'});
			$("#Sat16Sms_box").css({'background-color': color1});
		});
		// Payment type color change
		$("#monthly_payment").click(function(){
			$(".payment_type").css({'background-color': '#fff'});
			$("#monthlyPayment_box").css({'background-color': color1});
		});

		$("#yearly_payment").click(function(){
			$(".payment_type").css({'background-color': '#fff'});
			$("#yearlyPayment_box").css({'background-color': color1});
		});

		$("#find_shop").click(function(){
			$("#shop_list").html("Nie znaleziono otwartych sklepów w miejscowości " + $("#find_shop_city").val());

		});

		var	$window = $(window),
			$body = $('body');

		// Disable animations/transitions until the page has loaded.
			$body.addClass('is-loading');

			$window.on('load', function() {
				$body.removeClass('is-loading');
			});

		// Fix: Placeholder polyfill.
			$('form').placeholder();

		// Dropdowns.
			$('#nav > ul').dropotron({
				offsetY: -22,
				mode: 'fade',
				noOpenerFade: true,
				speed: 300,
				detach: false
			});

		// Prioritize "important" elements on mobile.
			skel.on('+mobile -mobile', function() {
				$.prioritize(
					'.important\\28 mobile\\29',
					skel.breakpoint('mobile').active
				);
			});

		// Off-Canvas Navigation.

			// Title Bar.
				$(
					'<div id="titleBar">' +
						'<a href="#navPanel" class="toggle"></a>' +
						'<span class="title">' + $('#logo').html() + '</span>' +
					'</div>'
				)
					.appendTo($body);

			// Navigation Panel.
				$(
					'<div id="navPanel">' +
						'<nav>' +
							$('#nav').navList() +
						'</nav>' +
					'</div>'
				)
					.appendTo($body)
					.panel({
						delay: 500,
						hideOnClick: true,
						hideOnSwipe: true,
						resetScroll: true,
						resetForms: true,
						side: 'left',
						target: $body,
						visibleClass: 'navPanel-visible'
					});

			// Fix: Remove navPanel transitions on WP<10 (poor/buggy performance).
				if (skel.vars.os == 'wp' && skel.vars.osVersion < 10)
					$('#titleBar, #navPanel, #page-wrapper')
						.css('transition', 'none');

	});

})(jQuery);
