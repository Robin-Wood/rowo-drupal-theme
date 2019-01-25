<a href="<?php print $fields["field_slider_link"]->content; ?>"
   class="outer-link">

  <?php
    $modifier = 'who-we-are';
    $more = 'is-white';

    switch($fields['field_slider_kategorie']->content) {
      case 'Was gibt es Neues':
        $modifier = 'whats-new';
        $more = 'is-green';
        break;

      case 'Was wir tun':
        $modifier = 'what-we-do';
        $more = 'is-green';
        break;

      case 'Wir machen Druck':
        $modifier = 'we-make-pressure';
        $more = 'is-green';
        break;
    }
  ?>

  <article class="teaser-slider__item equal-height-children">
    <div class="teaser-slider__item-image-container">
      <?php print $fields["field_bild"]->content; ?>
    </div>

    <div class="teaser-slider__item-content-container teaser-slider__item-content-container--<?php print($modifier); ?>">
      <h2 class="teaser-slider__item-title">

        <?php if($fields['field_slider_kategorie']->content): ?>
          <span class="teaser-slider__item-category">
            <?php print $fields['field_slider_kategorie']->content; ?>
          </span>
        <?php endif; ?>

        <span class="visually-hidden">:</span>
        <?php print $fields["title"]->content; ?>
      </h2>

      <p class="teaser-slider__item-text">
        <?php print $fields['field_kurzer_text']->content; ?>
        <svg class="icon more more--<?php print($more) ?>"
             role="img">
          <use xlink:href="/sites/all/themes/tweme/dist/images/sprite.svg#more">
        </svg>
      </p>
    </div>
  </article>
</a>
