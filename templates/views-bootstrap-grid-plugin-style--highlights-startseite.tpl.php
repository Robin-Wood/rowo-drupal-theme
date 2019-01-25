<?php foreach ($items as $row): ?>
  <div class="row equal-height-children">
    <?php $col_count = 0; ?>
    <?php foreach ($row['content'] as $column): ?>
      <div class="col-xs-12 col-sm-6">

        <?php
          if($col_count % 2 == 0) {
            $class_name = 'teaser-highlight--is-grey';
          } else {
            $class_name = '';
          }
        ?>
        <article class="teaser-highlight <?php echo $class_name; ?>">
          <?php print $column['content'] ?>
        </article>
      </div>
    <?php $col_count++; ?>
    <?php endforeach ?>
  </div>
<?php endforeach ?>
