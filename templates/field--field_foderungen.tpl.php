<ul class="demands-list">
  <?php
    $index = 1;
    foreach($items as $forderung):
      $title = $forderung['field_foderung_titel'][0]['#markup'];
      $text = $forderung['field_foderung_text'][0]['#markup'];
  ?>
      <li class="demand">
        <h3 class="demand__title">
          <span class="demand__number">
            <?php print $index ?>
          </span>
          <?php print $title ?>
        </h3>
        <p class="demand__text">
          <?php print $text ?>
        </p>
      </li>
  <?php
      ++$index;
    endforeach;
  ?>
</ul>
