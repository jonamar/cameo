    <script src="bower_components/jquery/dist/jquery.js"></script>
    <script src="bower_components/what-input/what-input.js"></script>
    <script src="bower_components/foundation-sites/dist/foundation.js"></script>
    <script src="js/min/app-min.js"></script>
    <!--<script src="bower_components/succinct/jQuery.succinct.min.js"></script>-->


    <script>
		$(function() {
			$( ".clampToggle" ).click(function() {
			  $( ".clamped" ).toggle();
			  $( ".full-text" ).toggle();
			  $( ".clampToggle .opened" ).toggle();
			  $( ".clampToggle .closed" ).toggle();

			});
			//$('.clamp').succinct({size: 400});
		});
    </script>
  </body>
</html>
