<div class="footer-bg">
		<?php
			include "views/pomocni/footerStrana.php";
		?>
	</div>


	<script src="assets/js/jquery.flipster.js"></script>
	<script>
		

		$(function () {
			$(".flipster").flipster({
				style: 'carousel',
				start: 0
			});
		});

		
	</script>
	<?php
		if(isset($_GET['page'])){
			$strana = strtolower($_GET['page']);
			if($strana == 'specials'){
				echo "<script src='assets/js/special.js' type='text/javascript'></script>";
			}
		}
	?>
</body>

</html>