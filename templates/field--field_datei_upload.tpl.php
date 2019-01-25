<ul class="extension-list">
  <?php
    foreach($items as $link):
      $title = $link['field_datei_titel']['#items'][0]['safe_value'];
      $url = $link['field_datei'][0]['#markup'];
      $text = $link['field_datei_beschreibung']['#items'][0]['safe_value'];
  ?>
      <li class="extension-list__item">
        <a href="<?php print $url ?>"
           class="extension">
          <svg class="icon extension__icon"
              role="img">
            <use xlink:href="/sites/all/themes/tweme/dist/images/sprite.svg#download">
          </svg>

          <h4 class="extension__title">
            <?php print $title ?>
          </h4>

          <?php if($text): ?>
            <p class="extension__teaser">
              <?php print $text ?>
            </p>
          <?php endif; ?>
        </a>
      </li>
  <?php
    endforeach;
  ?>
</ul>
