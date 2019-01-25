<div class="full-content-area full-content-area--with-top">
  <div class="teaser-slider js-teaser-slider">
    <div class="teaser-slider__canvas">
      <?php foreach ($items as $row): ?>
        <?php foreach ($row['content'] as $column): ?>
          <div>
            <?php print $column['content'] ?>
          </div>
        <?php endforeach ?>
      <?php endforeach ?>
    </div>
  </div>
</div>
