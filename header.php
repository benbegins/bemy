<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-111608099-5"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-111608099-5');
    </script>
    
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-barba="wrapper">
<?php wp_body_open(); ?>

<div id="page" class="site" data-barba="container">

    <header class="site_header" id="header">
      <div class="site-header flex justify-between pt-6 pb-6 md:pb-0 md:pt-10 px-8 sm:px-12 lg:px-16 absolute lg:fixed z-30 w-full">
      <div class="z-30">
        <a href="
          <?php 
            if(function_exists('pll_home_url')) {
              echo pll_home_url(); 
            } else {
              echo get_site_url();
            }
          ?>" class="logo-bemy">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 100 36"
            class="duration-300"
          >
            <g id="Groupe_16" data-name="Groupe 16" transform="translate(-2136.308 1926.801)">
              <g id="Groupe_8" data-name="Groupe 8" transform="translate(2176.543 -1919.832)">
                <g id="Groupe_7" data-name="Groupe 7">
                  <path
                    id="Tracé_8"
                    data-name="Tracé 8"
                    d="M2225.769-1916a8.957,8.957,0,0,0-7.128,3.465A6.533,6.533,0,0,0,2212.5-1916a7.822,7.822,0,0,0-6.339,3.386v-2.913H2205l-6.324,19.552v1.749h7.482V-1905.8c0-2.324,1.259-3.544,3.032-3.544s2.913,1.221,2.913,3.544v11.576h7.482V-1905.8c0-2.324,1.3-3.544,3.071-3.544s2.914,1.221,2.914,3.544v11.576h7.482V-1908.2C2233.053-1913.163,2230.3-1916,2225.769-1916Z"
                    transform="translate(-2198.678 1915.998)"
                  />
                </g>
                <path
                  id="Tracé_9"
                  data-name="Tracé 9"
                  d="M2262.92-1894.358l-8.348-20.907h7.835l4.253,12.835,4.016-12.835h7.678l-10.818,28.743h-7.573Z"
                  transform="translate(-2218.515 1915.738)"
                />
              </g>
              <g id="Groupe_10" data-name="Groupe 10" transform="translate(2136.308 -1926.801)">
                <path
                  id="Tracé_10"
                  data-name="Tracé 10"
                  d="M2143.79-1900.656v2.6h-7.482V-1926.8h7.482v10.277a7.819,7.819,0,0,1,6.457-3.307c5.08,0,9.45,4.212,9.45,11.024v.079c0,6.93-4.37,11.143-9.41,11.143A8,8,0,0,1,2143.79-1900.656Zm8.544-8.033v-.079a4.5,4.5,0,0,0-4.371-4.8,4.492,4.492,0,0,0-4.331,4.8v.079c0,2.835,1.93,4.843,4.331,4.843C2150.4-1903.846,2152.334-1905.815,2152.334-1908.689Z"
                  transform="translate(-2136.308 1926.801)"
                />
                <g id="Groupe_9" data-name="Groupe 9" transform="translate(25.744 6.969)">
                  <path
                    id="Tracé_11"
                    data-name="Tracé 11"
                    d="M2183.421-1902.808h6.121l3.689-11.4a10.8,10.8,0,0,0-6.265-1.786c-6.3,0-10.75,4.922-10.75,11.143v.079c0,6.272,4.252,10.59,10.4,11.021l1.808-5.588c-.133.008-.256.039-.393.039A4.4,4.4,0,0,1,2183.421-1902.808Zm3.584-7.678c2.048,0,3.425,1.5,3.7,3.858h-7.4C2183.7-1908.95,2185.035-1910.486,2187-1910.486Z"
                    transform="translate(-2176.215 1915.998)"
                  />
                </g>
              </g>
            </g>
          </svg>
        </a>
      </div>

      <div class="menu-site flex items-center">
        <div class="translations text-xs mr-6">
          <?php 
          $translations = pll_the_languages( array( 'raw' => 1 ) );
          ?>
          <a href="<?php echo $translations['fr']['url']; ?>" class="px-2 py-1 font-normal<?php if($translations['fr']['current_lang']){echo ' bg-bemy-light text-bemy-dark font-extrabold';} ?>">FR</a>
          <a href="<?php echo $translations['en']['url']; ?>" class="px-2 py-1 font-normal<?php if($translations['en']['current_lang']){echo ' bg-bemy-light text-bemy-dark font-extrabold';} ?>">EN</a>
        </div>
        <div class="nav-burger flex flex-col items-end cursor-pointer z-30 relative">
          <div class="line line1"></div>
          <div class="line line2"></div>
          <div class="line line3"></div>
        </div>
          <div class="menu-container fixed inset-0 min-h-screen w-full bg-bemy-light text-bemy-dark z-20">
            <div class="submenu-container container flex min-h-screen flex-col justify-center">
              <ul class="menu-primary font-extrabold text-4xl leading-tight">
                <li class="menu-item">
                  <?php if (pll_current_language() == "en"): ?>
                    <a href="<?php echo get_site_url(); ?>/en/studio-en" class="menu-link link-transition">Studio</a>
                  <?php else: ?>
                    <a href="<?php echo get_site_url(); ?>/studio" class="menu-link link-transition">Le studio</a>
                  <?php endif; ?>
                </li>
                <li class="menu-item">
                  <?php if (pll_current_language() == "en"): ?>
                    <a href="<?php echo get_site_url(); ?>/en/projet" class="menu-link link-transition">Projects</a>
                  <?php else: ?>
                    <a href="<?php echo get_site_url(); ?>/projet" class="menu-link link-transition">Nos projets</a>
                  <?php endif; ?>
                </li>
                <li class="menu-item">
                  <a href="mailto:hel&#108;o&#64;b%65%6dy%2e&#115;%74&#117;di%6f" class="menu-link link-transition">Contact</a>
                </li>
              </ul>
              <ul class="menu-secondary mt-4 uppercase">
                <li class="menu-item">
                  <a href="https://www.linkedin.com/company/bemystudio/" class="menu-link link-transition" target="_blank">Linkedin.</a>
                </li>
                <li class="mt-4 menu-item">
                  <a href="https://www.instagram.com/bemy.studio/" class="menu-link link-transition" target="_blank">Instagram.</a>
                </li>
                <li class="mt-4 menu-item">
                  <a href="https://www.behance.net/bemystudio" class="menu-link link-transition" target="_blank">Behance.</a>
                </li>
              </ul>
            </div>
          </div>
      </div>
      <!-- /menu-site -->
    </div>
    <!-- /site-header -->
    </header>

    <div class="page-container">
    