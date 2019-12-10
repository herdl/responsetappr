<script type="text/javascript">
  var adiInit = "<?= htmlentities(get_option('responsetappr_website_id'))?>",
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
</script>
