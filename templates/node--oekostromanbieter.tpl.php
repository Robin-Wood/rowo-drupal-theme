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
     	  <?php print render($content['field_strommix']); ?>
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
