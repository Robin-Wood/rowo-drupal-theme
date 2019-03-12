<article class="cta">
  <a class="outer-link" href="https://www.robinwood.de">
    <div class="cta_container">
      <?php if (!empty($fields["field_bild"]->content)): ?>
        <div class="cta_image-container">
          <?php print $fields["field_bild"]->content; ?>
        </div>
      <?php endif; ?>
      <div class="cta_text-container <?php if (!empty($fields["field_bild"]->content)): ?>cta_large<?php endif; ?>">
        <h2>
          <?php print $fields["title"]->content; ?>
        </h2>
        <?php if (!empty($fields["field_bild"]->content)): ?>
          <p>
            <?php print $fields["field_kurzer_text"]->content; ?>
          </p>
        <?php endif; ?>
        <button class="button button--window button--is-centered">
          <?php print $fields["field_button_text"]->content; ?>
        </button>
      </div>
    </div>
  </a>
</article>
