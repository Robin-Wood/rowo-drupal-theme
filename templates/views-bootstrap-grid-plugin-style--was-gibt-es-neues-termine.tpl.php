<div class="row">
  <?php foreach ($items as $row): ?>
      <?php foreach ($row['content'] as $column): ?>
        <div class="col-xs-12 col-sm-8 col-sm-offset-2">
          <?php print $column['content'] ?>
        </div>
      <?php endforeach ?>
  <?php endforeach ?>
</div>
