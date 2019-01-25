<figure class="figure">
    <?php print $fields["field_einzelfoto"]->content; ?>

    <?php if(!empty($fields["field_bildbeschreibung"]->content) || !empty($fields["field_bildnachweis"]->content)) : ?>
      <figcaption class="figure__caption">
        <?php if(!empty($fields["field_bildbeschreibung"]->content)) : ?>
          <?php print $fields["field_bildbeschreibung"]->content; ?>
        <?php endif; ?>

        <?php if(!empty($fields["field_bildnachweis"]->content)) : ?>
          <?php print $fields["field_bildnachweis"]->content; ?>
        <?php endif; ?>
      </figcaption>
    <?php endif; ?>
</figure>
