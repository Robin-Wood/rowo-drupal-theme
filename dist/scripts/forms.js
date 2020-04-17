jQuery(document).ready(function($) {
  var $collapsibleContainerWithFormError = $('.form-item.has-error').closest('.ctools-collapsible-container.ctools-collapsed');
  $collapsibleContainerWithFormError.find('.ctools-collapsible-handle').click();
  $('html, body').animate({
      scrollTop:$collapsibleContainerWithFormError.offset().top
    },'slow');
});
