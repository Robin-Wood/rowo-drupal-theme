<ul class="extension-list">
  <?php
    foreach($items as $link):
      $title = $link['field_linktitel']['#items'][0]['safe_value'];
      $url = $link['field_link_sub']['#items'][0]['display_url'];
      $text = $link['field_kurze_beschreibung']['#items'][0]['safe_value'];
      $isExternal = true;
      $externalClass = 'extension-list__item--is-external';

      if ($link['field_link_sub']['#items'][0]['attributes']['rel'] == 'intern') {
        $isExternal = false;
      }

      if (!$isExternal) {
        $externalClass = '';
      }
  ?>
      <li class="extension-list__item <?php print($externalClass); ?>">
        <a href="<?php print $url ?>"
           class="extension">
          <svg class="icon extension__icon"
              role="img">
            <use xlink:href="/sites/all/themes/tweme/dist/images/sprite.svg#external-link">
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
