class Icon {
  constructor(symbolId) {
    this.options = {
      base: '/sites/all/themes/tweme/dist/images/',
      fileName: 'sprite.svg',
    };

    this.symbol = symbolId;
  }

  render() {
    return this._parseTemplate(this.symbol);
  }

  _buildPath() {
    if(this.options.base.slice(-1) !== '/') {
      this.options.base += '/';
    }

    return this.options.base + this.options.fileName;
  }

  _parseTemplate(symbolId) {
    const spritePath = this._buildPath();
    const template = `
      <svg class="icon" aria-hidden="true">
        <use xlink:href="${spritePath}#${symbolId}">
      </svg>
    `;

    return template;
  }
}

module.exports = Icon;
