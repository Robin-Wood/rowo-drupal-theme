<div class="content-slider__item">
  <figure class="figure">
    <?php print $fields["field_foto_slider_bilder"]->content; ?>

    <?php if(!empty($fields["field_bildbeschreibung"]->content) || !empty($fields["field_bildnachweis"]->content)) : ?>
      <figcaption class="figure__caption">
        <?php if(!empty($fields["field_bildbeschreibung"]->content)) : ?>
          <?php print $fields["field_bildbeschreibung"]->content; ?>
        <?php endif; ?>

        <?php if(!empty($fields["field_bildnachweis"]->content)) : ?>
          <strong class="figure__caption-source">
            Foto ▸ <?php print $fields["field_bildnachweis"]->content; ?>
          </strong>
        <?php endif; ?>
      </figcaption>
    <?php endif; ?>

  </figure>
</div>
