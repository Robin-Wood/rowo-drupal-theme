<div class="row">
  <?php foreach ($items as $row): ?>
      <?php foreach ($row['content'] as $column): ?>
        <div class="col-xs-12">
          <?php print $column['content'] ?>
        </div>
      <?php endforeach ?>
  <?php endforeach ?>
</div>
