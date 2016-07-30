/*
calculatorFunctions.js Created to store custom Javascript functions for personal Wordpress site.
Advanced Web Development. Project: JQuery Demo
Bradley Erickson. Email: ericksob1@csp.edu
Created: 7/21/16
Revision: Brad Erickson added jQuery function for flooring calculator
*/
//DOM loaded
jQuery(document).ready(function() {
 jQuery('#scriptDisabled').css("display","block");
//Event function
	jQuery("#calculate").click(function(){
      var len = jQuery('#lent').val();
      var wid = jQuery('#widt').val();
      var price = jQuery('#pric').val();
      if(!len || !wid || !price) {
      //HTML selector
          jQuery('#area').html("");
          jQuery('#cost').html("Please make sure to enter in a value for each field!");
          //Change the CSS on a page
                           jQuery('.isValid').css("color", "red");
      } else {
      //HTML selector
               var area = jQuery('#area').html("Area: " + len * wid);
               var cost = jQuery('#cost').html("Total Cost: " + len * wid * price)
               .css("color","green"); 
               //Change the CSS on a page
               jQuery('#instructions').css("color","green");
               //Use this keyword
               jQuery(this).css("color","green");
      }
    });

});