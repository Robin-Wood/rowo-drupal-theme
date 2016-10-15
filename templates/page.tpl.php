<?php print render($page['body_top']) ?>

<header class="header">
  <nav class="navigation-meta hidden-xs">
      <?php
      $menu = menu_tree('menu-top-menu');
      $menuhtml = drupal_render($menu);
      print_r($menuhtml);
      ?>
  </nav>

  <nav class="navigation-main">
    <button class="navigation-main__toggle visible-xs-inline-block">
      <svg class="icon navigation-main__toggle-icon"
           role="img">
        <use xlink:href="/sites/all/themes/tweme/dist/images/sprite.svg#bars">
      </svg>

      <span class="visually-hidden">Toggle</span>
      Menu
    </button>

    <div class="navigation-main__logo-container">
      <a href="<?php print $front_page ?>"
         title="<?php print t('Home') ?>"
         class="">

         <svg class="icon navigation-main__logo"
              role="img">
           <use xlink:href="/sites/all/themes/tweme/dist/images/sprite.svg#robin-wood-logo">
         </svg>

        <?php if (!empty($site_name)): ?>
          <span class="visually-hidden">
            <?php print $site_name ?>
          </span>
        <?php endif ?>
      </a>
    </div>

    <div class="navigation-main__navigation-container hidden-xs">
      <?php print render($primary_nav) ?>
      <?php //print render($secondary_nav) ?>
      <?php //print render($page['navigation']) ?>
    </div>

    <div class="navigation-main__social-media-container hidden-xs">
      <a href="https://twitter.com/"
         class="social-media">
        <svg class="icon social-media__icon social-media__icon--twitter"
            role="img">
         <use xlink:href="/sites/all/themes/tweme/dist/images/sprite.svg#twitter">
        </svg>
        <span class="visually-hidden">Follow us on twitter</span>
      </a>

      <a href="https://facebook.com/"
         class="social-media">
        <svg class="icon social-media__icon social-media__icon--facebook"
            role="img">
         <use xlink:href="/sites/all/themes/tweme/dist/images/sprite.svg#facebook">
        </svg>
        <span class="visually-hidden">Follow us on facebook</span>
      </a>
    </div>
  </nav>
</header>

<main class="app__main">
  <?php print render($page['content']) ?>
</main>

<footer class="footer">
  <?php print render($page['footer']) ?>
  <div class="footer__logo-bar">
    <svg class="icon footer__logo"
         role="img">
      <use xlink:href="/sites/all/themes/tweme/dist/images/sprite.svg#robin-wood-logo">
    </svg>
  </div>

  <div class="footer__block">
    <address class="footer__address">
      <strong class="footer__address-title">
        Gewaltfreie Aktionsgemeinschaft für Natur und Umwelt
      </strong>

      <span class="footer__address-block">
        Bremer Straße 3
      </span>

      <span class="footer__address-block">
        21073 Hamburg (Harburg)
      </span>
    </address>
  </div>

  <div class="footer__block">
    <a href="/"
       class="button button--window">Kontakt</a>
    <a href="/"
       class="button button--window">Spende</a>
    <a href="/"
       class="button button--window">Mitmachen</a>
  </div>

  <div class="footer__block">
    <a href="https://twitter.com/"
       class="social-media">
      <svg class="icon social-media__icon social-media__icon--twitter"
          role="img">
       <use xlink:href="/sites/all/themes/tweme/dist/images/sprite.svg#twitter">
      </svg>
      <span class="visually-hidden">Follow us on twitter</span>
    </a>

    <a href="https://facebook.com/"
       class="social-media">
      <svg class="icon social-media__icon social-media__icon--facebook"
          role="img">
       <use xlink:href="/sites/all/themes/tweme/dist/images/sprite.svg#facebook">
      </svg>
      <span class="visually-hidden">Follow us on facebook</span>
    </a>

    <a href="https://youtube.com/"
       class="social-media">
      <svg class="icon social-media__icon social-media__icon--youtube"
          role="img">
       <use xlink:href="/sites/all/themes/tweme/dist/images/sprite.svg#youtube">
      </svg>
      <span class="visually-hidden">Follow us on youtube</span>
    </a>
  </div>

</footer>

<?php print render($page['body_bottom']) ?>
