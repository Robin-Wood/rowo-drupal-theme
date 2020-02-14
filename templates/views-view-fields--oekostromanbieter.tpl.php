<article class="anbieter">
  <a href="<?php print $fields['path']->content; ?>"
     class="outer-link">
    <header class="anbieter__header">
      <h3 class="anbieter__title">
        <?php print $fields["title"]->content;?>
      </h3>
    </header>
    <div class="anbieter__teaser">
      <div class="anbieter__chart chartcontainer" id="chart<?php print $fields['nid']->content;?>"></div>
      <div data-piechart="chart<?php print $fields['nid']->content;?>" class="anbieter__legende">
        <?php print $fields["field_strommix"]->content;?>
        <h3 class="anbieter__foerdertitle">Förderbetrag für die Energiewende</h3>
        <p><?php print $fields["field_foerderbetrag"]->content;?></p>
      </div>
    </div>
  </a>  
</article>

