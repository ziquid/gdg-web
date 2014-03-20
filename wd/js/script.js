// JavaScript Document

$(document).ready(function(){

	$('#username').val('Username');

    $("#username").blur(function(){
        if(!$(this).val()) $(this).val("Username");
    });
    $("#username").focus(function(){
        if($(this).val() == "Username") $(this).val("");
    });

/*	$('#password').val('Password');

    $("#password").blur(function(){
        if(!$(this).val()) $(this).val("Password");
    });
    $("#password").focus(function(){
        if($(this).val() == "Password") $(this).val("");
    });*/
	
	$('#search').val('Search');

    $("#search").blur(function(){
        if(!$(this).val()) $(this).val("Search");
    });
    $("#search").focus(function(){
        if($(this).val() == "Search") $(this).val("");
    });	

	$("#goto").change(function(){
		//alert($(this).val());
		if ($(this).val()!='' && $(this).val() !='pleaseselect') {
		  window.location.href=$(this).val();
		}
	  });

});





