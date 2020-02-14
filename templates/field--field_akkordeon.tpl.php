<?php
  ctools_add_js('collapsible-div');
ctools_add_css('collapsible-div');

    foreach($items as $akkordeon):
      $title = $akkordeon['field_titel']['#items'][0]['safe_value'];
      $text = $akkordeon['field_text']['#items'][0]['safe_value'];
?>

<section class="ctools-collapsible-container ctools-collapsed clearfix">
  <div class="ctools-collapsible-handle">
    <?php if($title): ?>
      <h2><?php print $title; ?></h2>
    <?php endif; ?>
  </div>

  <div class="ctools-collapsible-content article__text">
    <div class="row">
      <div class="col-xs-12 col-sm-8 col-sm-offset-2">
        <?php print $text ?>
      </div>
    </div>
  </div>
</section>
  <?php
    endforeach;
  ?>
