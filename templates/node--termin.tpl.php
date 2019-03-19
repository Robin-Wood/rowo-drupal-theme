<article class="article">
  <?php if (!empty($content['field_bild_termin'])): ?>
    <figure class="article__teaser-image-container">
      <?php print render($content['field_bild_termin']); ?>
    </figure>
  <?php endif; ?>

  <div class="row">
    <div class="col-xs-12 col-sm-8 col-sm-offset-2">

      <h1 class="article__subheadline">
        <?php print render($title);?>
      </h1>

      <div class="article__meta">
        <?php if (!empty($content['field_untertitel'])): ?>
          <span class="article__meta-location article__meta-location--not-uppercase">
            <?php print render($content['field_untertitel']); ?>
          </span>
        <?php endif; ?>

        <?php if (!empty($content['field_datum'])): ?>
          <span class="article__meta-date">
            <?php print render($content['field_datum']); ?> Uhr
          </span>
        <?php endif; ?>

        <?php if (!empty($content['field_ort'])): ?>
          <div class="article__meta-category article__meta-category--top-spacing article__meta-category--not-uppercase">
            <?php print render($content['field_ort']); ?>
          </div>
        <?php endif; ?>
      </div>

      <div class="article__text">
        <?php print render($content['field_kurzer_text']); ?>
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
  <a href="/was-gibt-es-neues/termine"
     class="back__title">◂ Zu allen Terminen</a>
</div>
