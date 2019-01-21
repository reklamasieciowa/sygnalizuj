	<!-- Main navigation -->
<header id="header-main">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg nav-fill navbar-dark fixed-top scrolling-navbar">
    <div class="container">
      <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
      	<strong><?php bloginfo( 'name' ); ?></strong>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
        aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>



<?php 
    wp_nav_menu( array(
      'theme_location'  => 'menu-1',
      'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
      'container'       => 'div',
      'container_class' => 'collapse navbar-collapse',
      'container_id'    => 'navbarSupportedContent-7',
      'menu_class'      => 'navbar-nav w-100',
      'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
      'walker'          => new WP_Bootstrap_Navwalker(),
    ) );
?>


    </div>
  </nav>
  <!-- Navbar -->

</header>
<!-- Main navigation -->