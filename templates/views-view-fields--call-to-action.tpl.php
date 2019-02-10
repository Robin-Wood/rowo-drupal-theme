<article class="cta">
  <a class="outer-link" href="https://www.robinwood.de">
    <div class="cta_container">
      <div class="cta_image-container">
        <?php print $fields["field_bild"]->content; ?>
      </div>
      <div class="cta_text-container">
        <h2>
          <?php dpm($fields); ?>
          <?php print $fields["title"]->content; ?>
        </h2>
      </div>
    </div>
  </a>
</article>
