<div class="full-content-area full-content-area--with-top">
  <?php foreach ($items as $row): ?>
    <div class="row">
      <?php foreach ($row['content'] as $column): ?>
        <div class="col-xs-12 col-sm-6">
          <?php print $column['content'] ?>
        </div>
      <?php endforeach ?>
    </div>
  <?php endforeach ?>
</div>
