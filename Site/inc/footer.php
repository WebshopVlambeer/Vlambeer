				</div> <!-- /.container -->
			</div> <!-- /.content -->

			<footer>
				<div class="footer-top">
					<div class="container">
						<h2>Subscribe to our newsletter:</h2>
						<form action="<?= ROOT ?>/controllers/newsletterController.php" method="post">
							<input type="email" placeholder="Email address" name="newsletterEmail" autocomplete="on">
							<input type="submit" hidden>
						</form>
					</div>
				</div>

				<div class="footer-bottom">
					<div class="container">
						<div class="footer-section">
							<h2>About:</h2>
							<p>VLAMBEER is a Dutch independent game studio made up of Rami Ismail 
								and Jan Willem Nijman, bringing back arcade games since 1955.</p>
						</div>
					</div>
				</div>
			</footer>
	
		<!-- JavaScript -->
		<script src="<?= ASSETS ?>/js/jquery.min.js"></script>
		<script src="<?= ASSETS ?>/js/script.js"></script>

		</div> <!-- /.wrapper -->
	</body>
</html>

<?php
	unset($_SESSION['msg']);
	unset($_SESSION['lvl']);
?>