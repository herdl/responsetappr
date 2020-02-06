<script type="text/javascript">
  var adiInit = "<?= htmlentities(get_option('responsetap_wp_website_id'))?>",
    adiRVO = true,
    adiFunc = null;
  (function() {
    var adiSrc = document.createElement('script');
    adiSrc.type = 'text/javascript';
    adiSrc.async = true;
    adiSrc.src = ('https:' == document.location.protocol ? 'https://static-ssl' : 'http://static-cdn')
      + '.responsetap.com/static/scripts/rTapTrack.min.js';

    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(adiSrc, s);
  })();

  <?php // https://stackoverflow.com/questions/20564770 ?>
  function rTapPostReplacement() {
    var $ = jQuery;

    $('a[href*="tel:"]').each(function() {
      var number = $(this).text();

      number = number.replace(/\s+/g, '').toLowerCase();

      $(this).attr('href', 'tel:' + number);
    });
  }
</script>
