<?php
  $isRegionalGroup = empty($fields["field_teaser_text"]->content);
?>

<div class="about__image-container">
  <?php print $fields["field_bild"]->content; ?>
</div>

<div class="about__content-container">
  <h2 class="about__title">
    <?php print $fields["title"]->content; ?>

    <?php if(!empty($fields["field_untertitel"]->content)): ?>
      <div class="about__subtitle">
        <?php print $fields["field_untertitel"]->content; ?>
      </div>
    <?php endif; ?>
  </h2>

  <?php if(!$isRegionalGroup) { ?>
    <?php if(!empty($fields["field_teaser_text"]->content)): ?>
      <p class="about__teaser">
        <?php print $fields["field_teaser_text"]->content; ?>
      </p>
    <?php endif; ?>
  <?php } else { ?>
    <div class="about__teaser about__teaser--centered">
      <?php if(!empty($fields["field_treffen_zeit_"]->content)): ?>
        <strong class="about__teaser-subheadline">Wann treffen wir uns?</strong>
        <div class="about__teaser-wysiwyg-container">
          <?php print $fields["field_treffen_zeit_"]->content; ?>
        </div>
      <?php endif; ?>

      <?php if(!empty($fields["field_treffen_ort_"]->content)): ?>
        <strong class="about__teaser-subheadline">Wo treffen wir uns?</strong>
        <div class="about__teaser-wysiwyg-container">
          <?php print $fields["field_treffen_ort_"]->content; ?>
        </div>
      <?php endif; ?>

      <?php if(!empty($fields["field_kontakt"]->content)): ?>
        <strong class="about__teaser-subheadline">Kontakt</strong>
        <div class="about__teaser-wysiwyg-container">
          <?php print $fields["field_kontakt"]->content; ?>
        </div>
      <?php endif; ?>
    </div>

    <?php if(!empty($fields["field_link_zur_gruppe"])): ?>
      <?php print $fields["field_link_zur_gruppe"]->content; ?>
    <?php endif; ?>
  <?php } ?>
</div>
