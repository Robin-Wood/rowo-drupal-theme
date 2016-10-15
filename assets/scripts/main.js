const $ = require('jquery');
const Navigation = require('./modules/navigation');

$(function() {
  new Navigation($('.navigation-main'));
});
