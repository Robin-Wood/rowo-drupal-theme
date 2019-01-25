<?php
  $index = 1;
  foreach($items as $author):
    $name = $author['field_autorin'][0]['#markup'];
    $role = $author['field_funktion'][0]['#markup'];
?>

  <span class="article__author">
    <span class="article__author-name">
      <?php print($name); ?>
    </span>

    <?php if($role): ?>
      <span class="article__author-role">
        <?php print($role); ?>
      </span>
    <?php endif; ?>
  </span>

<?php
    ++$index;
  endforeach;
?>
