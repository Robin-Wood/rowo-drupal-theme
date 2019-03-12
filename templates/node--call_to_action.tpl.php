<article class="cta">
  <a class="outer-link" href="https://www.robinwood.de">
    <div class="cta_container">
      <?php if (!empty($content["field_bild"])): ?>
        <div class="cta_image-container">
          <?php print render($content["field_bild"]); ?>
        </div>
      <?php endif; ?>
      <div class="cta_text-container <?php if (!empty($content["field_bild"])): ?>cta_large<?php endif; ?>">
        <div class="cta_text-inner">
          <h2>
            <?php print $title; ?>
          </h2>
          <?php if (!empty($content["field_bild"])): ?>
            <p>
              <?php print render($content["field_kurzer_text"]); ?>
            </p>
          <?php endif; ?>
          <button class="button button--window button--is-centered">
            <?php print render($content["field_button_text"]); ?>
          </button>
        </div>
      </div>
    </div>
  </a>
</article>
