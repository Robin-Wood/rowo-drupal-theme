const $ = require('jquery');

class Navigation {
  constructor($el) {
    this.$el = $el;
    return this.init();
  }

  init() {
    this.$el.on('click.navigation', '.navigation-main__toggle', (event) => {
      event.preventDefault();

      $('.navigation-main__navigation-container').toggleClass('hidden-xs');
    });
  }
}

module.exports = Navigation;
