<article class="campaign">
  <header class="campaign__header">
    <div class="campaign__image">
      <?php print $fields["field_bild"]->content;?>
    </div>

    <h2 class="campaign__title">
      <?php print $fields["title"]->content;?>
    </h2>
  </header>

  <div class="campaign__teaser-container">
    <?php print $fields["field_teaser_text"]->content;?>
  </div>
</article>
