<footer>
	<h6>Copyright &copy; 2009-<?php echo date('Y'); ?> Sheryl Jang; All rights reserved. Read our <a href="http://shookies.net/terms.php">terms of service</a>. Design &amp; Development by <a href="http://bradyjfrey.com">Brady J. Frey</a>, Content by <a href="http://doughahn.net">Doug Hahn</a>.</h6>
</footer>
</div>
<script>
$(document).ready(function() 
{
   $('.ingredients[title]').qtip({
        show: 'click',
        position: {
              corner: {
                 target: 'topMiddle',
                 tooltip: 'bottomMiddle'
              }
            },
        style: {
        width: 200,
        background: 'transparent',
        tip: {
            corner: 'bottomMiddle',
            size: {
                x: 20,
                y: 10,
                }
            },
        color: 'black',
        border: {
           color: '#fcd8e8', 
           width: 0,
           },
        name: 'dark',
        }
   });
});
</script>
<script src="http://shookies.net/scripts/jquery.qtip.js"></script>
<script>
    
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-4484730-11']);
      _gaq.push(['_trackPageview']);
    
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    
</script>
</body>
</html>