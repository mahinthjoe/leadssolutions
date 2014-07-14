$(function () {
	//select menus and make them drop down on hover
	$('ul.nav li.dropdown').hover(function() {
		$('.dropdown-menu', this).fadeIn();
		}, function(){ // and fade when mouse disappears
		$('.dropdown-menu', this).fadeOut('fast');
		} );//hover

	} );//jQuery is loaded


//highlighting the current nav

$("#home a:contains('Home')").parent.addClass('active');
$("#products a:contains('Products')").parent.addClass('active');
$("#support a:contains('support')").parent.addClass('active');
$("#services a:contains('services')").parent.addClass('active');
$("#career a:contains('career')").parent.addClass('active');
$("#contact a:contains('Contact')").parent.addClass('active');	