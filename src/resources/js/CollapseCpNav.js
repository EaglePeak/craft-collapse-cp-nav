/**
 * permanent admin hamburger menu plugin for Craft CMS
 *
 * permanent admin hamburger menu JS
 *
 * @author    Claudia Aguilar
 * @copyright Copyright (c) 2018 Claudia Aguilar
 * @link      https://www.eaglepeakweb.com/team/claudia-aguilar
 * @package   PermanentAdminHamburgerMenu
 * @since     1.0.0
 */
jQuery(document).ready(function(){
  // jQuery("#global-container").addClass("permanent-hamburger");
  jQuery("#global-container.permanent-hamburger #global-sidebar").show();
  // jQuery("#crumbs").addClass("permanent-hamburger");
  
  // adding keyboard command to toggle the sidebar on T
  jQuery(window).on('keydown', function(){
	  if( jQuery('input:focus').length === 0 ){
		  if(event.code === 'KeyT'){
    	  $('body').toggleClass('showing-nav');
		  }
    }
  });
});
