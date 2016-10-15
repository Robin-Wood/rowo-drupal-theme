<!doctype html>
<html lang="<?php print $language->language ?>" class="no-js">
  <head>
    <title><?php print $head_title ?></title>
    <meta http-equiv="X-UA-Compatible"
          content="IE=edge, chrome=1" />
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet"
          href="/sites/all/themes/tweme/dist/styles/main.css" />
    <?php print $head ?>
    <?php //print $styles ?>
  </head>

  <body <?php print $attributes ?>>
    <div class="app">
      <div class="app__container">
        <?php //print $page_top ?>
        <?php print $page ?>
        <?php //print $page_bottom ?>
      </div>
    </div>

    <?php //print $scripts ?>
  </body>
</html>
