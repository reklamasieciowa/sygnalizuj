	<!-- Main navigation -->
<header id="header-main">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top scrolling-navbar">
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
      'menu_class'      => 'navbar-nav mr-auto',
      'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
      'walker'          => new WP_Bootstrap_Navwalker(),
    ) );
?>


    </div>
  </nav>
  <!-- Navbar -->
  <!-- Full Page Intro -->
  <div class="view  jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url('https://mdbootstrap.com/img/Photos/Others/gradient2.png'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
    <!-- Mask & flexbox options-->
    <div class="mask rgba-purple-slight d-flex justify-content-center align-items-center">
      <!-- Content -->
      <div class="container">
        <!--Grid row-->
        <div class="row wow fadeIn">
          <!--Grid column-->
          <div class="col-md-12 text-center">
            <h1 class="display-4 font-weight-bold mb-0 pt-md-5 pt-5 wow fadeInUp">Our New Course is Ready</h1>
            <h5 class="pt-md-5 pt-sm-2 pt-5 pb-md-5 pb-sm-3 pb-5 wow fadeInUp" data-wow-delay="0.2s">It comes
              with a lot of new features, easy to follow videos and images. Check it out now!</h5>
            <div class="wow fadeInUp" data-wow-delay="0.4s">
              <a class="btn btn-purple btn-rounded"><i class="fas fa-user left"></i> Sign up!</a>
              <a class="btn btn-outline-purple btn-rounded"><i class="fas fa-book left"></i> Learn more</a>
            </div>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>
      <!-- Content -->
    </div>
    <!-- Mask & flexbox options-->
  </div>
  <!-- Full Page Intro -->
</header>
<!-- Main navigation -->