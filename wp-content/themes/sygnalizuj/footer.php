<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sygnalizuj
 */

?>

	</div><!-- #content -->

<!-- Footer -->
<footer class="page-footer font-small light-blue darken-4 pt-4">

    <?php get_sidebar('footer1'); ?>

    <hr>

    <div class="text-center my-4">
      <a class="btn btn-danger wow fadeInLeft" role="button" data-wow-delay="0.7s">Prześlij zgłoszenie <i class="fas fa-paper-plane fa-lg ml-2"></i></a>
      <a href="http://localhost/www/sygnalizuj/rekomendacja/" class="btn btn-success wow fadeInRight" role="button" data-wow-delay="0.9s">Zarekomenduj Sygnalizuj.com <i class="fas fa-thumbs-up fa-lg ml-2"></i></a>
    </div>
    <hr>
    <?php get_sidebar('footerbottom'); ?>
    <!-- Social buttons -->
    <ul class="list-unstyled list-inline text-center">
      <li class="list-inline-item">
        <a class="btn-floating btn-fb mx-1">
          <i class="fab fa-facebook-f"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-tw mx-1">
          <i class="fab fa-twitter"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-gplus mx-1">
          <i class="fab fa-google-plus-g"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-li mx-1">
          <i class="fab fa-linkedin-in"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-dribbble mx-1">
          <i class="fab fa-dribbble"> </i>
        </a>
      </li>
    </ul>
    <!-- Social buttons -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3"><?php bloginfo( 'name' ); ?> © <?php echo date('Y') ?> by <a href="http://mediaeffectivegroup.pl">MEG</a>
    </div>
    <!-- Copyright -->

<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
  <a class="btn-floating btn-lg red">
    <i class="far fa-comments"></i>
  </a>

  <ul class="list-unstyled">
    <li><a class="btn-floating red"><i class="fas fa-star"></i></a></li>
    <li><a class="btn-floating yellow darken-1"><i class="fas fa-user"></i></a></li>
    <li><a class="btn-floating green"><i class="fas fa-envelope"></i></a></li>
    <li><a class="btn-floating blue"><i class="fas fa-shopping-cart"></i></a></li>
  </ul>
</div>



</footer>
<!-- Footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script>
  new WOW().init();

// Material Select Initialization
$(document).ready(function() {
 $('.mdb-select').materialSelect();
 $('.datepicker').pickadate({
    format: 'yyyy-mm-dd ',
    monthsFull: [ 'styczeń', 'luty', 'marzec', 'kwiecień', 'maj', 'czerwiec', 'lipiec', 'sierpień', 'wrzesień', 'październik', 'listopad', 'grudzień' ],
    monthsShort: [ 'sty', 'lut', 'mar', 'kwi', 'maj', 'cze', 'lip', 'sie', 'wrz', 'paź', 'lis', 'gru' ],
    weekdaysFull: [ 'niedziela', 'poniedziałek', 'wtorek', 'środa', 'czwartek', 'piątek', 'sobota' ],
    weekdaysShort: [ 'niedz.', 'pn.', 'wt.', 'śr.', 'cz.', 'pt.', 'sob.' ],
    today: 'Dzisiaj',
    clear: 'Usuń',
    close: 'Zamknij',
    firstDay: 1,
    format: 'yyyy-mm-dd',
    formatSubmit: 'yyyy-mm-dd',
    min: true
  });

 $('.timepicker').pickatime({
    // 12 or 24 hour
    twelvehour: true,
    minutestep: 5,
    min:[8,0],
    max:[17,0],
    ampmclickable: false,
    autoclose: true,
    default: 'now',
    donetext: 'zapisz',
    cleartext: 'wyczyść'
});

$('.callme :checkbox').change(function() {
  if($(this).is(":checked")) {
      $('.callme-form').addClass('fadeIn').toggleClass('hidden');
      return;
   }
   $('.callme-form').removeClass('fadeIn').toggleClass('hidden');
}); 

});

</script>

</body>
</html>
