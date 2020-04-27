<article class="campaign">
  <a href="<?php print $fields['path']->content; ?>"
     class="outer-link">
    <header class="campaign__header">
      <div class="campaign__image-container">
        <?php print $fields["field_bild"]->content;?>
      </div>

      <h2 class="campaign__title">
        <?php print $fields["title"]->content;?>
      </h2>
    </header>
  </a>
</article>
