<form action="<?php echo home_url( '/' ); ?>" method="get" class="form-inline active-cyan-4" role="search">

    <label for="search">  <?php __( 'Search for:', 'sygnalizuj' ); ?> </label>

    <input type="text" name="s" id="search" class="form-control form-control-sm w-50 py-53" value="<?php the_search_query(); ?>" aria-label="Search" />

    <button type="submit" id="searchsubmit" class="btn btn-sm btn-success"><i class="fas fa-search mr-2" aria-hidden="true"></i><?php echo esc_attr_x( 'Search', 'submit button' ); ?></button>
</form>