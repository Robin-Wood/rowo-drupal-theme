<article class="article article--page">
  <div class="row">
    <div class="col-xs-12 col-sm-8 col-sm-offset-2">

      <h1 class="article__subheadline">
        <?php print $title; ?>
      </h1>
      
      <?php if (!empty($content['field_teaser_text'])): ?>
        <?php print render($content['field_teaser_text']); ?>
      <?php endif; ?>
      

      <div class="article__text">
        <?php print render($content['field_text_einfache_seite']); ?>
      </div>

  
  <?php $block_text = block_get_blocks_by_region('text'); ?>
  <?php if (!empty($block_text)): ?>
    <?php print render($block_text); ?>
  <?php endif; ?>
  
  <?php if (!empty($content['field_akkordeon'])): ?>
    <?php print render($content['field_akkordeon']); ?>
  <?php endif; ?>
  
</article>

<?php
  if (!empty($content['field_call_to_action'])):
    print render($content['field_call_to_action']);
  else :
    $block_cta = block_get_blocks_by_region('cta');
    if (!empty($block_cta)):
      print render($block_cta);
    endif;
  endif;
?>

<?php if (!empty($content['field_fachreferentin_view'])): ?>
  <?php print render($content['field_fachreferentin_view']); ?>
<?php endif; ?>
