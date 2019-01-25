<?php foreach ($items as $row): ?>
  <div class="row equal-height-children">
    <?php $col_count = 0; ?>
    <?php foreach ($row['content'] as $column): ?>
      <div class="col-xs-12 col-sm-4">
        <?php print $column['content'] ?>
      </div>
    <?php $col_count++; ?>
    <?php endforeach ?>
  </div>
<?php endforeach ?>
