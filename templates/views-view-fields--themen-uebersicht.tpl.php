<article class="topic">
  <a href="<?php print $fields['path']->content; ?>"
     class="outer-link">
    <div class="topic__image-container">
      <?php print $fields["field_bild"]->content;?>
    </div>

    <div class="topic__content-container">
      <h2 class="topic__title">
        <?php print $fields["title"]->content;?>
      </h2>

      <p class="topic__teaser">
        <?php print $fields["field_teaser_text"]->content;?>
        <svg class="icon more more--is-green"
             role="img">
          <use xlink:href="/sites/all/themes/tweme/dist/images/sprite.svg#more">
        </svg>
      </p>
    </div>
  </a>
</article>
