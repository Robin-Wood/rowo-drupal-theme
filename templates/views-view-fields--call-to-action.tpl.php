<article class="cta">
  <a class="outer-link" href="https://www.robinwood.de">
    <div class="cta_container">
      <div class="cta_image-container">
        <?php print $fields["field_bild"]->content; ?>
      </div>
      <div class="cta_text-container">
        <h2>
          <?php print $fields["title"]->content; ?>
        </h2>
        <p>
          <?php print $field["field_kurzer_text"]->content; ?>
        </p>
        <button class="button button--window button--is-centered">
          <?php print $field["field_button_text"]->content; ?>
        </button>
      </div>
    </div>
  </a>
</article>
