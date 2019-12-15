<ul class="demands-list">
  <?php
    $index = 1;
    foreach($items as $forderung):
      $title = $forderung['field_foderung_titel'][0]['#markup'];
      $text = $forderung['field_foderung_text'][0]['#markup'];
      $url = $forderung['field_link_sub']['#items'][0]['display_url'];
  ?>
      <li class="demand">
     <?php if (!empty($url)): ?>
        <a href="<?php print $url ?>" class="outer-link">
      <?php endif; ?>
        <h3 class="demand__title">
          <span class="demand__number">
            <?php print $index ?>
          </span>
          <?php print $title ?>
        </h3>
        <p class="demand__text">
          <?php print $text ?>
          <?php if (!empty($url)): ?>
            <svg class="icon more more--is-green"
                 role="img">
              <use xlink:href="/sites/all/themes/tweme/dist/images/sprite.svg#more" />
            </svg>
         <?php endif; ?>
        </p>
     <?php if (!empty($url)): ?>
      </a>
     <?php endif;?>
	</li>
<?php 
     ++$index;
    endforeach;
  ?>
</ul>
