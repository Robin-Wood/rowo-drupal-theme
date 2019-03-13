<article class="article">
  <?php if (!empty($content['field_bild'])): ?>
    <figure class="article__teaser-image-container article__teaser-image-container--with-green-background">
      <?php print render($content['field_bild']); ?>
    </figure>
  <?php endif; ?>

  <?php if (!empty($content['field_slogan'])): ?>
  <div class="article__pre-teaser-container">
    <div class="row">
      <div class="col-xs-12 col-sm-8 col-sm-offset-2">
        <h2 class="article__pre-teaser-title">
          <?php print render($content['field_slogan']); ?>
        </h2>
      </div>
    </div>
  </div>
  <?php endif; ?>

  <?php if (!empty($content['field_teaser_text'])): ?>
    <div class="article__teaser-container">
      <div class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2">
          <h2 class="article__teaser-title"><?php print($title);?></h2>

          <?php print render($content['field_teaser_text']); ?>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <?php if (!empty($content['field_text'])): ?>
    <div class="row">
      <div class="col-xs-12 col-sm-8 col-sm-offset-2">
        <div class="article__text">
          <?php if (!empty($content['field_youtube_video'])): ?>
            <div class="video">
              <?php print render($content['field_youtube_video']); ?>
            </div>
          <?php endif; ?>

          <?php print render($content['field_text']); ?>

          <?php if (!empty($content['field_einzelfoto'])): ?>
            <figure class="figure">
              <?php print render($content['field_einzelfoto']); ?>
            </figure>
          <?php endif; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <?php if (!empty($content['field_foto_slider_bilder'])): ?>
    <div class="content-slider">
      <div class="content-slider__canvas">
        <?php print render($content['field_slideshow_view']); ?>
      </div>
    </div>
  <?php endif; ?>
  
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
  
  <?php if (!empty($content['field_links_multi'])): ?>
    <div class="row">
      <div class="col-xs-12 col-sm-8 col-sm-offset-2">
        <div class="article__links-container">
          <?php print render($content['field_links_multi']); ?>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <?php if (!empty($content['field_datei_upload'])): ?>
    <div class="row">
      <div class="col-xs-12 col-sm-8 col-sm-offset-2">
        <footer class="article__meta-container">
          <?php print render($content['field_datei_upload']); ?>
        </footer>
      </div>
    </div>
  <?php endif; ?>

  <div class="share hidden-print">
    <?php $block = module_invoke('block', 'block_view', '2');?>
    <?php print render($block['content']); ?>
  </div>
</article>

<?php if (!empty($content['field_fachreferentin_view'])): ?>
  <?php print render($content['field_fachreferentin_view']); ?>
<?php endif; ?>

<?php
$referer = $_SERVER['HTTP_REFERER'];
$referer_title = $_SESSION['HTTP_REFERER_TITLE'];
$has_rw_referer = preg_match("/\/themen\/(.*)/", $referer, $content_slug);
$_SESSION['HTTP_REFERER_TITLE'] = '';
?>

<?php if ($has_rw_referer && $referer_title): ?>
  <?php $title = $content_slug[1]; ?>

  <div class="back hidden-print">
    <a href="<?php print($referer) ?>"
       class="back__title">◂ Zu "<?php print($referer_title) ?>"</a>
  </div>
<?php endif; ?>
