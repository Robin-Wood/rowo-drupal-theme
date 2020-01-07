<article class="article" 
<?php if (!empty($content['field_daten'])): ?>
data-url="<?php print render ($content['field_daten']); ?>" 
<?php endif; ?>
>
   
  <?php if (!empty($title)): ?>
    <div class="article__pre-teaser-container">
      <div class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2">
          <h1 class="article__pre-teaser-title2">
            <?php print render($title); ?>
            <?php if (!empty($content['field_logo'])): ?>
              <?php print render($content['field_logo']); ?>
            <?php endif; ?>
	  </h1>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <?php if (!empty($content['field_strommix'])): ?>
    <div class="article__teaser-container">
      <div class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2">
          <div class="anbieter__teaser">
            <div class="anbieter__chart chartcontainer" id="chart<?php print $node->nid;?>"></div>
            <div data-piechart="chart<?php print $node->nid;?>" class="anbieter__legende">
              <?php print render($content['field_strommix']); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <?php if (!empty($content['field_foerderbetrag'])): ?>
    <div class="article__post-teaser-container">
      <div class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2">
          <h3 class="article__post-teaser-title">Förderbetrag für die Energiewende</h3>
          <p class="article__post-teaser-text"><?php print render($content['field_foerderbetrag']); ?></p>
        </div>
      </div>
    </div>
  <?php endif; ?>
  
  <div class="row">
    <div class="col-xs-12 col-sm-8 col-sm-offset-2">
      <div class="article__text">
        <?php if (!empty($content['field_text'])): ?>
          <?php print render($content['field_text']); ?>
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
    </div>
  </div>

  <?php if (!empty($content['field_text'])): ?>
    <div class="row">
      <div class="col-xs-12 col-sm-8 col-sm-offset-2">
        <div class="article__text">
          <?php print render($content['field_text']); ?>
       </div>
      </div>
    </div>
  <?php endif; ?>

  <div class="share hidden-print">
    <?php $block = module_invoke('block', 'block_view', '2');?>
    <?php print render($block['content']); ?>
  </div>
</article>

<?php
  $referer = $_SERVER['HTTP_REFERER'];
  $referer_title = $_SESSION['HTTP_REFERER_TITLE'];
  $has_rw_referer = preg_match("/robinwood\.de\/oekostromreport(.*)/", $referer, $content_slug);
  $_SESSION['HTTP_REFERER_TITLE'] = '';
?>

<?php if ($has_rw_referer): ?>
  <?php $title = $content_slug[1]; ?>

  <div class="back hidden-print">
    <a href="<?php print($referer) ?>"
       class="back__title">◂ Zum Ökostromreport</a>
  </div>
<?php endif; ?>
