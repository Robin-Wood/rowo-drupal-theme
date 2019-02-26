<article class="article article--page">
  <?php if (!empty($content['field_bild'])): ?>
    <figure class="article__teaser-image-container">
      <?php print render($content['field_bild']); ?>
    </figure>
  <?php endif; ?>

  <div class="row">
    <div class="col-xs-12 col-sm-8 col-sm-offset-2">
      <div class="article__text">
        <h1 class="article__subheadline">
          <?php print render($title);?>
        </h1>

        <?php print render($content['field_beschreibung_der_gruppe']); ?>
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
        <?php if (!empty($content['field_treffen_zeit_'])): ?>
          <h3 class="article__block-headline">
            Wann treffen wir uns?
          </h3>
          <p><?php print render($content['field_treffen_zeit_']); ?></p>
        <?php endif; ?>

        <?php if (!empty($content['field_treffen_ort_'])): ?>
          <h3 class="article__block-headline">
            Wo treffen wir uns?
          </h3>
          <p><?php print render($content['field_treffen_ort_']); ?></p>
        <?php endif; ?>

        <?php if (!empty($content['field_kontakt'])): ?>
          <h3 class="article__block-headline">
            Kontakt
          </h3>
          <p><?php print render($content['field_kontakt']); ?></p>
        <?php endif; ?>
        
        <?php $block_text = block_get_blocks_by_region('text'); ?>
        <?php if (!empty($block_text)): ?>
          <h3 class="article__block-headline">
            <?php print render($title);?> auf Twitter
          </h3>
          <?php print render($block_text); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
  
  <div class="row">
    <div class="col-xs-12 col-sm-8 col-sm-offset-2">
      <div class="article__text">
        <h3>Termine</h3>
      </div>
    </div>
  </div>
  <?php
    $block_related = block_get_blocks_by_region('related');
    if (!empty($block_related)):
      print render($block_related);
    endif;
  ?>
  
  <div class="row">
    <div class="col-xs-12 col-sm-8 col-sm-offset-2">
      <div class="article__text">
        <div class="article__actions">
          <?php if (!empty($content['field_aktuelles_aus_der_gruppe_l'])): ?>
            <div class="article__block">
              <?php print render($content['field_aktuelles_aus_der_gruppe_l']); ?>
            </div>
          <?php endif; ?>


          
          <?php if (!empty($content['field_aktuelle_termine'])): ?>
            <div class="article__block">
              <?php print render($content['field_aktuelle_termine']); ?>
            </div>
          <?php endif; ?>
        </div>
      </div>

      <?php if (!empty($content['field_links_multi'])): ?>
        <div class="article__links-container">
          <?php print render($content['field_links_multi']); ?>
        </div>
      <?php endif; ?>

      <?php if (!empty($content['field_datei_upload'])): ?>
        <footer class="article__links-container">
          <?php print render($content['field_datei_upload']); ?>
        </footer>
      <?php endif; ?>
    </div>
  </div>
</article>

<div class="back hidden-print">
  <a href="/wer-wir-sind"
     class="back__title">◂ Zu "Wer wir sind"</a>
</div>
