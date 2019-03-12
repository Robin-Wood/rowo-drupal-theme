<?php
  $nid = $fields["nid"]->content;
  print drupal_render(node_view(node_load($nid)));
?>
