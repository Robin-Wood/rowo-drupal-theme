<article class="article">
  <?php if (!empty($content['field_bild'])): ?>
    <figure class="article__teaser-image-container">
      <?php print render($content['field_bild']); ?>
    </figure>
  <?php endif; ?>

  <div class="row">
    <div class="col-xs-12 col-sm-8 col-sm-offset-2">

      <h1 class="article__subheadline">
        <?php print render($title);?>
      </h1>

      <div class="article__meta">
        <?php if (!empty($content['field_untertitel'])): ?>
          <span class="article__meta-location">
            <?php print render($content['field_untertitel']); ?>
          </span>
        <?php endif; ?>

        <?php if (!empty($content['field_datum'])): ?>
          <span class="article__meta-date">
            <?php print render($content['field_datum']); ?>
          </span>
        <?php endif; ?>

        <?php if (!empty($content['field_thema'])): ?>
          <span class="article__meta-category">
            <?php print render($content['field_thema']); ?>
          </span>
        <?php endif; ?>

        <?php if (!empty($content['field_autoren_und_funktion'])): ?>
          <span class="article__meta-person">
            <?php print render($content['field_autoren_und_funktion']); ?>
          </span>
        <?php endif; ?>
      </div>

    </div>
  </div>

  <?php if (!empty($content['field_foto_slider_bilder'])): ?>
    <div class="content-slider">
      <div class="content-slider__canvas">
        <?php print render($content['field_slideshow_view']); ?>
      </div>
    </div>
  <?php endif; ?>

  <div class="row">
    <div class="col-xs-12 col-sm-8 col-sm-offset-2">
      <div class="article__text">
        <span class="article__category">Aktion</span>

        <?php print render($content['field_text']); ?>

        <?php if (!empty($content['field_einzelfoto'])): ?>
          <figure class="figure">
            <?php print render($content['field_einzelfoto']); ?>
          </figure>
        <?php endif; ?>

        <?php if (!empty($content['field_youtube_video'])): ?>
          <div class="video">
            <?php print render($content['field_youtube_video']); ?>
          </div>
        <?php endif; ?>
      </div>

      <?php if (!empty($content['field_links_multi'])): ?>
        <div class="article__links-container">
          <?php print render($content['field_links_multi']); ?>
        </div>
      <?php endif; ?>

      <?php if (!empty($content['field_datei_upload'])): ?>
        <footer class="article__meta-container">
          <?php print render($content['field_datei_upload']); ?>
        </footer>
      <?php endif; ?>

      <div class="share hidden-print">
        <?php $block = module_invoke('block', 'block_view', '2');?>
        <?php print render($block['content']); ?>
      </div>
    </div>
  </div>
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

<div class="back hidden-print">
  <a href="/was-gibt-es-neues/aktuelles"
     class="back__title">◂ Zu "Was gibt es Neues"</a>
</div>
