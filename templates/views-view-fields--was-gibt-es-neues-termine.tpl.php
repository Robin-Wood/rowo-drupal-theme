<article class="teaser-date">
  <a href="<?php print $fields["path"]->content; ?>"
     class="outer-link">
    <div class="teaser-date__date-container">
      <div class="date-sheet">
        <span class="date-sheet__day-number">
          <?php print $fields["field_datum_2"]->content; ?>
        </span>

        <span class="date-sheet__month">
          <?php print $fields["field_datum_3"]->content; ?>
        </span>

        <span class="date-sheet__year">
          <?php print $fields["field_datum_4"]->content; ?>
        </span>
      </div>
    </div>

    <div class="teaser-date__content-container">
      <h2 class="teaser-date__title">
        <span class="outer-link__title">
          <?php print $fields["title"]->content; ?>
        </span>
      </h2>

      <p class="teaser-date__text">
        <span class="teaser-date__category">
          <?php print $fields["field_datum_5"]->content; ?>
          Uhr
        </span>

        <?php print $fields["field_kurzer_text"]->content; ?>
      </p>
    </div>
  </a>
</article>
