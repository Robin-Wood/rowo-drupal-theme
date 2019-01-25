<?php
  // store refererTitle
  $_SESSION['HTTP_REFERER_TITLE'] = $title;
?>

<article class="article">
  <?php if (!empty($content['field_bild'])): ?>
    <figure class="article__teaser-image-container article__teaser-image-container--with-green-background">
      <div class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2">
          <?php print render($content['field_bild']); ?>
        </div>
      </div>
    </figure>
  <?php endif; ?>

  <?php if (!empty($content['field_teaser_text'])): ?>
    <div class="article__teaser-container">
      <div class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2">
          <h1 class="article__teaser-title">
            <?php print $title; ?>
          </h1>

          <?php print render($content['field_teaser_text']); ?>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <?php if (!empty($content['field_schwerpunkt'])): ?>
    <div class="focus-list">
      <h2 class="focus-list__title">Schwerpunkte zum Thema</h2>
      <div class="focus-list__items-container">
        <?php print render($content['field_schwerpunkte_view']); ?>
      </div>
    </div>
  <?php endif; ?>

  <?php if (!empty($content['field_text'])): ?>
    <div class="row">
      <div class="col-xs-12 col-sm-8 col-sm-offset-2">
        <div class="article__text">
          <?php print render($content['field_text']); ?>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <?php if (!empty($content['field_youtube_video'])): ?>
    <div class="row">
      <div class="col-xs-12 col-sm-8 col-sm-offset-2">
        <div class="video">
          <?php print render($content['field_youtube_video']); ?>
        </figure>
      </div>
    </div>
  <?php endif; ?>

  <?php if (!empty($content['field_links_multi'])): ?>
    <div class="row">
      <div class="col-xs-12 col-sm-8 col-sm-offset-2">
        <div class="article__links-container">
          <?php print render($content['field_links_multi']); ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
</article>

<div class="share hidden-print">
  <?php $block = module_invoke('block', 'block_view', '2');?>
  <?php print render($block['content']); ?>
</div>

<?php if (!empty($content['field_fachreferentin_view'])): ?>
  <?php print render($content['field_fachreferentin_view']); ?>
<?php endif; ?>

<div class="back hidden-print">
  <a href="/worum-es-geht"
     class="back__title">◂ Zu "Worum es geht"</a>
</div>
