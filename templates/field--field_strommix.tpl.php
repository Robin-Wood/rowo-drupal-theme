<?php
  $index = 1;
  foreach($items as $mix):
    $wasser = $mix['field_wasser'][0]['#markup'];
    $wind = $mix['field_wind'][0]['#markup'];
    $solar = $mix['field_solar'][0]['#markup'];
?>
    <table class="anbieter__table">
      <thead> 
        <tr>
          <td></td>
          <td><h3>Strommix</h3></td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td data-water="<?php print(str_replace(',', '.', $wasser)) ?>"><?php print($wasser) ?>%</td>
          <td class="label-water">Wasser</td>
        </tr>
        <tr>
          <td data-wind="<?php print($wind) ?>"><?php print(str_replace(',', '.', $wind)) ?>%</td>
          <td class="label-wind">Windkraft</td>
        </tr>
        <tr>
          <td data-solar="<?php print($solar) ?>"><?php print(str_replace(',', '.', $solar)) ?>%</td>
          <td class="label-solar">Solar</td>
        </tr>
      </tbody>
    </table>

<?php
    ++$index;
  endforeach;
?>
