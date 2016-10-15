<div class="about">
  <div class="row">
    <div class="col-xs-12 col-sm-6">
      <div class="about__image-container">
        <?php print $fields["field_bild"]->content; ?>
      </div>
    </div>

    <div class="col-xs-12 col-sm-6">
      <div class="about__content-container">
        <h2 class="about__title">
          <?php print $fields["title"]->content; ?>
        </h2>

        <div class="about__subtitle">
          <?php print $fields["field_untertitel"]->content; ?>
        </div>

        <div class="about__teaser">
          <?php print $fields["field_teaser_text"]->content; ?>
        </div>
      </div>
    </div>
  </div>
</div>
