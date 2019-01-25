<article class="campaign">
  <a href="<?php print $fields['path']->content; ?>"
     class="outer-link">
    <header class="campaign__header">
      <div class="campaign__image-container">
        <?php print $fields["field_teaser_bild_kampagne"]->content;?>
      </div>

      <h2 class="campaign__title">
        <?php print $fields["title"]->content;?>
      </h2>
    </header>

    <p class="campaign__teaser">
      <?php print $fields["field_teaser_text"]->content;?>
      <svg class="icon more more--is-green"
           role="img">
        <use xlink:href="/sites/all/themes/tweme/dist/images/sprite.svg#more">
      </svg>
    </p>
  </a>
</article>
