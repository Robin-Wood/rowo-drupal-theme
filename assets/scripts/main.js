const $ = require('jquery');
const Navigation = require('./modules/navigation');
const TeaserSlider = require('./modules/teaser-slider');

$(function() {
  $.each($('.js-teaser-slider'), (index, element) => {
    new TeaserSlider($(element));
  });

  new Navigation($('.navigation-main'));
});
