<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
      <div class="container">
        <a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img src="http://universal-frontier.local/wp-content/uploads/2024/04/logo.svg" alt="Logo" />
          <h1>Universal Frontier</h1>
        </a>
        <nav class="menu">
          <ul class="links">
            <li><a href="<?php echo site_url("/explorations") ?>">Explorations</a></li>
            <li><a href="<?php echo site_url('/about-2'); ?>">About</a></li>
            <li><a href="#">Blog</a></li>
            <svg
              width="30"
              height="30"
              viewBox="0 0 30 30"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M27.6667 30L17.1667 19.5C16.3333 20.1667 15.375 20.6944 14.2917 21.0833C13.2083 21.4722 12.0556 21.6667 10.8333 21.6667C7.80556 21.6667 5.24333 20.6178 3.14667 18.52C1.05 16.4222 0.00111199 13.86 8.81834e-07 10.8333C-0.00111023 7.80667 1.04778 5.24444 3.14667 3.14667C5.24556 1.04889 7.80778 0 10.8333 0C13.8589 0 16.4217 1.04889 18.5217 3.14667C20.6217 5.24444 21.67 7.80667 21.6667 10.8333C21.6667 12.0556 21.4722 13.2083 21.0833 14.2917C20.6944 15.375 20.1667 16.3333 19.5 17.1667L30 27.6667L27.6667 30ZM10.8333 18.3333C12.9167 18.3333 14.6878 17.6044 16.1467 16.1467C17.6056 14.6889 18.3344 12.9178 18.3333 10.8333C18.3322 8.74889 17.6033 6.97833 16.1467 5.52167C14.69 4.065 12.9189 3.33556 10.8333 3.33333C8.74778 3.33111 6.97722 4.06056 5.52167 5.52167C4.06611 6.98278 3.33667 8.75333 3.33333 10.8333C3.33 12.9133 4.05945 14.6844 5.52167 16.1467C6.98389 17.6089 8.75445 18.3378 10.8333 18.3333Z"
                fill="white"
              />
            </svg>
          </ul>
        </nav>
        <button aria-haspopup="true" aria-expanded="false" class="hamburger">
          <div class="line"></div>
        </button>
      </div>
    </header>