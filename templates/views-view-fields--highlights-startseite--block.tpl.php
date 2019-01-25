<?php
$has_link = !empty($fields["field_link-url"]->content) && !empty($fields["field_link-title"]->content);
?>

<div class="teaser-highlight__image-container">
  <?php if ($has_link) : ?>
    <a href="<?php print $fields["field_link-url"]->content; ?>"
       rel="nofollow">
  <?php endif; ?>

     <?php print $fields["field_bild"]->content;?>

  <?php if ($has_link) : ?>
   </a>
  <?php endif; ?>
</div>

<h2 class="teaser-highlight__title">
  <?php print $fields["title"]->content; ?>
</h2>

<p class="teaser-highlight__text">
  <?php print $fields["field_teaser_text"]->content; ?>
  <svg class="icon more"
       role="img">
    <use xlink:href="/sites/all/themes/tweme/dist/images/sprite.svg#more">
  </svg>
</p>

<?php if (!empty($row->field_field_link)): ?>
  <a href="<?php print $fields["field_link"]->content; ?>"
     class="button button--window button--is-centered">
    <?php print $fields["field_button_text"]->content; ?>
  </a>
<?php endif; ?>
