<div class="full-content-area">
  <div class="teaser-slider js-teaser-slider">
    <div class="teaser-slider__canvas">
      <?php $slide_count = 0; ?>
      <?php foreach ($items as $slide): ?>
        <?php foreach ($slide['content'] as $column): ?>
          <?php
            if($slide_count == 0) {
              $slide_class_name = 'about--is-index';
            } else {
              $slide_class_name = '';
            }
          ?>

          <div class="about <?php print $slide_class_name; ?>">
            <?php print $column['content'] ?>
          </div>

          <?php $slide_count++; ?>
        <?php endforeach ?>
      <?php endforeach ?>
    </div>
  </div>
</div>
