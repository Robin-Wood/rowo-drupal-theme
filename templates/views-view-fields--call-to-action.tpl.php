<article class="cta">
  <a class="outer-link" href="https://www.robinwood.de">
    <div class="teaser-slider__item equal-height-children">
      <div class="teaser-slider__item-image-container">
        <?php print $fields["field_bild"]->content; ?>
      </div>
      <div class="teaser-slider__item-content-container teaser-slider__item-content-container--<?php print($modifier); ?>">
        <h2 class="teaser-slider__item-title">
          <?php print $fields["title"]->content; ?>
        </h2>
        <p class="teaser-slider__item-text">
          <?php print $fields['field_kurzer_text']->content; ?>
        </p>
        <a href="https://www.robinwood.de" class="button button--window button--is-centered">
          <?php print $fields["field_button_text"]->content; ?>
        </a>
      </div>
    </div>
  </a>
</article>
