	<?php include("header.php"); ?>
	<body class="left-sidebar">
		<div id="page-wrapper">

			<!-- Header Wrapper -->
				<div id="header-wrapper">
					<div class="container">

							<?php include("navigation.php"); ?>

					</div>
				</div>

			<!-- Main Wrapper -->
				<div id="main-wrapper">
					<div class="wrapper style2">
						<div class="inner">
							<div class="container">
								<div class="row">
									<div class="4u 12u(mobile)">
										<div id="sidebar">

											<!-- Sidebar -->

												<section>
														<h2>Znajdź sklep</h2>
														Podaj miasto<br />
														<input type="text" name="city"><br>
													<footer>
														<a href="#" class="button icon fa-info-circle">szukaj</a>
													</footer>
												</section>

												<section>
														<h2>Mam sklep</h2>
														Twój sklep jest otwarty w niedzielę wolną od handlu?
													<footer>
														<a href="#" class="button icon fa-info-circle">Dodaj twój sklep.</a>
													</footer>
												</section>

										</div>
									</div>
									<div class="8u 12u(mobile) important(mobile)">
										<div id="content">
											<!-- Content -->
												<article>
													<header class="major">
														<h2>Otwarte sklepy w okolicy</h2>
													</header>
													<h4>Nie znaleziono sklepów w twojej okolicy.</h4>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
		<?php include("footer.php"); ?>
