<article class="anbieter">
  <a href="<?php print $fields['path']->content; ?>"
     class="outer-link">
    <header class="anbieter__header">
      <h3 class="anbieter__title">
        <?php print $fields["title"]->content;?>
      </h3>
    </header>
    <div class="anbieter__teaser">
      <?php print $fields["field_strommix"]->content;?>
      <h3>Förderbetrag für die Energiewende</h3>
      <p><?php print $fields["field_foerderbetrag"]->content;?></p>
      </div> <!-- Würgaround: Öffnendes div-Tag in Datei field__field-strommix.tpl.php -->
    </div>
  </a>  
</article>

