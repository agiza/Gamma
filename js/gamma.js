// $Id: $.js,v 1.1.2.3 2010/09/11 15:23:25 himerus Exp $
// declare the $ variable for jQuery usage in the $ theme.
(function ($) {
  /**
   * @todo   Must fix the interaction between active menu items
   * @todo   Change the order of the hover out fade back to normal, and sub-menu hiding
   *         This should be set to close the menu fully (after short delay) then fade the menu color back to normal
   * @todo  Make sure the menus accomodate menus that are only 2 wide on the top level.
   */
  $(document).ready(function(){
    /**
     * Respect primary menu trails, regardless of menu structure
     */
    var currentURL = document.location.pathname;
    var activeTopLevelPageArray = currentURL.split('/');
    var activeTopLevelPage = activeTopLevelPageArray[1];
   
    // applying the class to what we find
    $('#region-menu ul li a[href^=/'+activeTopLevelPage+']')
      .addClass('active');
    // now making the nav menu do what we want with styles for the active element
    $('#region-menu ul li a.active:first')
      .addClass('current-main') // assign main active bg to active link
      .parent('li') // select the parent list item
      .addClass('active-trail'); // then assign a class to it for manipulation
   
    /* If there is no match, just activate the "home" menu item/tab */
    var isActive = $('#region-menu li.active-trail').size();
    if (isActive < 1) {
      $('#region-menu li:first').addClass('active-trail');
    }

  });
})(jQuery);