	<!-- footer start -->
	<footer>
		<div class="copy">COPYRIGHT &copy; 2015 LUCIA CREATED BY <a href="http://www.3a.co.nz">3A WEB SOLUTION</a></div>
	</footer>
	<!-- footer end -->

	<!-- Google CDN jQuery with fallback to local -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="../js/minified/jquery-1.11.0.min.js"><\/script>')</script>

	<!-- custom scrollbar plugin -->
	<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>

	<script>
		(function($){
			$(window).load(function(){

				$("#content").mCustomScrollbar({
					theme:"minimal"
				});

			});
		})(jQuery);
	</script>
</body>
</html>