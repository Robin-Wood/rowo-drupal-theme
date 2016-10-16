<article class="teaser">
  <div class="teaser__image-container">
    <?php print $fields["field_bild"]->content;?>
  </div>

  <h2 class="teaser__title">
    <?php print $fields["title"]->value; ?>
    <span class="visually-hidden">:</span>
    <span class="teaser__publication-date">21 April 2016</span>
  </h2>

  <div class="teaser__text-container">
    <?php print $fields["field_teaser_text"]->content;?>
    <span class="more">...</span>
  </div>
</article>
