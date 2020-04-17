jQuery(document).ready(function($) {
  var $collapsibleContainerWithFormError = $('.form-item.has-error').closest('.ctools-collapsible-container.ctools-collapsed');
  $collapsibleContainerWithFormError.find('.ctools-collapsible-handle').click();
  $('html, body').animate({
      scrollTop:$collapsibleContainerWithFormError.offset().top
    },'slow');
});

jQuery(document).ready(function($) {  
  var $checkoutForm = $('#commerce-checkout-form-checkout');
  $checkoutForm.addClass( "col-xs-12 col-sm-8 col-sm-offset-2");
  $checkoutForm.wrap( "<div class='row'></div>" );
});
