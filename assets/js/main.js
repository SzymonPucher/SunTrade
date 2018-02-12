/*
	ZeroFour by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
*/

function WHCreateCookie(name, value, days) {
	var date = new Date();
	date.setTime(date.getTime() + (days*24*60*60*1000));
	var expires = "; expires=" + date.toGMTString();
	document.cookie = name+"="+value+expires+"; path=/";
}
function WHReadCookie(name) {
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for(var i=0; i < ca.length; i++) {
		var c = ca[i];
		while (c.charAt(0) == ' ') c = c.substring(1, c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
	}
	return null;
}

window.onload = WHCheckCookies;

function WHCheckCookies() {
		if(WHReadCookie('cookies_accepted') != 'T') {
				var message_container = document.createElement('div');
				message_container.id = 'cookies-message-container';
				var html_code = '<div id="cookies-message" style="padding: 10px 0px; font-size: 14px; line-height: 22px; border-bottom: 1px solid #D3D0D0; text-align: center; position: fixed; top: 0px; background-color: #EFEFEF; width: 100%; z-index: 999;">Ta strona używa ciasteczek (cookies), dzięki którym nasz serwis może działać lepiej. <a href="http://wszystkoociasteczkach.pl" target="_blank">Dowiedz się więcej</a><a href="javascript:WHCloseCookiesWindow();" id="accept-cookies-checkbox" name="accept-cookies" style="background-color: #00AFBF; padding: 5px 10px; color: #FFF; border-radius: 4px; -moz-border-radius: 4px; -webkit-border-radius: 4px; display: inline-block; margin-left: 10px; text-decoration: none; cursor: pointer;">Rozumiem</a></div>';
				message_container.innerHTML = html_code;
				document.body.appendChild(message_container);
		}
}

function WHCloseCookiesWindow() {
		WHCreateCookie('cookies_accepted', 'T', 365);
		document.getElementById('cookies-message-container').removeChild(document.getElementById('cookies-message'));
}

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
