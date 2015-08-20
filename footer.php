<footer>
	<div class="copyright">
		<div class="container">
			 <p>&copy;<?php echo @date('Y');?> <?php $this->options->title(); ?> | Powered by <a href="http://typecho.org">Typecho)))</a> | Theme by <a href="http://www.lofter.com">Lofter</a> | Transplant by <a href="https://www.imim.pw">吟梦</a></p>
		</div>
	</div>
	<a href="#top" id="to-top"><span class="icon-chevron-up"></span></a>
</footer>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function() {
		$("#to-top").hide();
		$(function() {
			$(window).scroll(function() {
				if ($(window).scrollTop() > 300) {
					$("#to-top").fadeIn(200);
				} else {
					$("#to-top").fadeOut(200);
				}
			});
			$("#to-top").click(function() {
				$('body,html').animate({
					scrollTop: 0
				},
				1000);
				return false;
			});
		});
	});
</script>