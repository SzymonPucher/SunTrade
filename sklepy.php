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
										<div id="sidebar" style="text-align: center;">

											<!-- Sidebar -->

												<section>
													<h2>Znajdź sklep</h2>
													<?php

													echo '
													<form method="post">

			                      <p>Podaj miasto:</p>
			                      <input type="text" name="town" placeholder="Miasto">
			                      <button type="submit" name="submit" value="submit">Szukaj</button>
			                    </form>
												</section>

												<section>
														<h2>Mam sklep</h2>
														Twój sklep jest otwarty w niedzielę wolną od handlu?
													<footer>
														<a href="dodaj_sklep.php" class="button">Dodaj twój sklep</a>
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
													<h4 id="shop_list"></h4>

													';

													if(isset($_POST['submit'])){
			                      $table = "<table style='text-align: center;'><tr><th>Nazwa sklepu</th><th>Godziny otwarcia</th><th>Adres</th></tr>";
			                      $list = [];
			                      if (($handle = fopen("data/shops.csv", "r")) !== FALSE) {
			                          while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
			                              array_push($list,$data);
			                          }
			                          fclose($handle);
			                      }
														unset($list[0]);

			                        $town = $_POST['town'];
															$num_of_records = 0;
			                        foreach ($list as $field) {
			                          if($town == $field[4] || $town == "all"){
			                            $num_of_records++;
			                            $table = $table."<tr><td>".$field[0]."</td><td>".$field[1]." - ".$field[2]."</td><td>".$field[3].", ".$field[4]."</td></tr>";
			                          }
			                        }
															if($num_of_records > 0)
			                        	echo $table."</table>";
															elseif($town != "") {
																echo "<h5>Nie znaleziono otwartych sklepów w miejscowości ".$town."</h5>";
															}
															else{
																echo "";
															}

			                    }

			                    ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
		<?php include("footer.php"); ?>
