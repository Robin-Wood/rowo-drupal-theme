<div class="author">
  <div class="row">
    <div class="col-xs-4 col-xs-offset-1">
      <div class="author__image-container">
        <?php print $fields["field_foto_fachreferent"]->content;?>
      </div>
    </div>

    <div class="col-xs-7">
      <div class="author__content-container">
        <h3 class="author__title">
          <?php print $fields["title"]->content;?>
        </h3>
        
        <?php if (!empty($fields["field_vorname_und_name"]->content)): ?>
          <p class="author__field">
            <?php print $fields["field_vorname_und_name"]->content;?>
          </p>
        <?php endif; ?>

        <?php if (!empty($fields["field_telefon"]->content)): ?>
          <p class="author__field">
            Tel:&nbsp;<a href="tel: <?php print $fields["field_telefon"]->content; ?>">
              <?php print $fields["field_telefon"]->content;?>
            </a>
          </p>
        <?php endif; ?>
        
        <?php if (!empty($fields["field_mobil"]->content)): ?>
          <p class="author__field">
            Mobil:&nbsp;<a href="tel: <?php print $fields["field_mobil"]->content; ?>">
              <?php print $fields["field_mobil"]->content;?>
            </a>
          </p>
        <?php endif; ?>

        <?php if (!empty($fields["field_fax"]->content)): ?>
          <p class="author__field">
            Fax:&nbsp;<?php print $fields["field_fax"]->content;?>
          </p>
        <?php endif; ?>

        <?php if (!empty($fields["field_e_mail"]->content)): ?>
          <p class="author__field">
            <a href="mailto:<?php print $fields["field_e_mail"]->content;?>">
              <?php print $fields["field_e_mail"]->content;?></a>
            <?php if (!empty($fields["field_pgp_key"]->content)): ?>
              (<a href="<?php print $fields["field_pgp_key"]->content;?>">PGP-Schlüssel</a>)
            <?php endif; ?>
          </p>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
