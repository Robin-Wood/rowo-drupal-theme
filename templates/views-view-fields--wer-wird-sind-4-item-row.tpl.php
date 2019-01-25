<article class="teaser">
  <a href="<?php print $fields['path']->content; ?>"
     class="outer-link">
    <div class="teaser__image-container">
      <?php print $fields['field_bild']->content; ?>
    </div>

    <h2 class="teaser__title">
      <span class="outer-link__title outer-link__title--color-atlantis">
        <?php print $fields["title"]->content; ?>
      </span>

      <span class="visually-hidden">-</span>

      <span class="teaser__publication-date">
        <?php print $fields['field_datum']->content; ?>
      </span>
    </h2>

    <p class="teaser__text">
      <span class="teaser__category">
        <?php print $fields['field_kategorie']->content; ?>
      </span>

      <span class="visually-hidden">:</span>

      <?php print $fields["field_teaser_text"]->content; ?>

      <svg class="icon more more--is-green"
           role="img">
        <use xlink:href="/sites/all/themes/tweme/dist/images/sprite.svg#more">
      </svg>
    </p>
  </a>
</article>