<div class="full-content-area">
  <div class="content-slider">
    <div class="row">
      <div class="col-xs-12 col-sm-8 col-sm-offset-2 js-teaser-slider">
        <div class="content-slider__canvas">
          <?php foreach ($items as $row): ?>
            <?php foreach ($row['content'] as $column): ?>
              <?php print $column['content'] ?>
            <?php endforeach ?>
          <?php endforeach ?>
        </div>
      </div>
    </div>
  </div>
</div>
