const $ = require('jquery');
const Icon = require('../icon');
const slick = require('slick-carousel');

class TeaserSlider {
  constructor($el) {
    this.$el = $el;
    this._sliderInit();
  }

  _sliderInit() {
    this.$el.children().slick({
      controls: true,
    });

    this._sliderControls();
  }

  _sliderControls() {
    const fixButton = (direction) => {
      const $button = this.$el.find('.slick-' + direction);
      const buttonText = $button.text();
      const iconMarkup = new Icon('arrow-' + direction).render();
      $button
        .empty()
        .append('<span class="visually-hidden">' + buttonText + '</span>')
        .prepend(iconMarkup);
    };

    fixButton('prev');
    fixButton('next');
  }
}

module.exports = TeaserSlider;
