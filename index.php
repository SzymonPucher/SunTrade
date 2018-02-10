	<?php include("header.php"); ?>
	<body class="homepage">
		<div id="page-wrapper">
			<!-- Header -->
				<div id="header-wrapper">
					<div class="container">
						<?php include("navigation.php"); ?>
						<!-- Powiadomienia i sklepy -->
						<div id="banner">

							<?php
							$handle = fopen("lista_niedziel.txt", "r");
							date_default_timezone_set('UTC');
							$day =  date("d");
							$day_of_week = date("D");
							$month = date("m");
							$date = date("d.m");

							$res = 0;
							if ($handle) {
							    while (($line = fgets($handle)) !== false) {
										list($file_day, $file_month) = explode(".", $line);
										if((int)$file_day == (int)$day && (int)$file_month == (int)$month){
											$res = 3;
											break;
										}
										for($i = 1; $i < 8; $i++){
											$date2 = Date("d.m", mktime(0,0,0,(int)$month,(int)$day+$i,2018));
											list($next_day, $next_month) = explode(".", $date2);
											if((int)$file_day == (int)$next_day && (int)$file_month == (int)$next_month){
												$res = 1;
												break;
											}
											else{
												$res = 2;
											}
										}
										if($res == 1) break;

							    }
									if($res != 3 && !strcmp("Sun", $day_of_week)){
										$res = 4;
									}
							    fclose($handle);
							} else {
							    // error opening the file.
							}

							switch($res){
								case 1:
								echo "<h2>W najbliższą niedzielę sklepy będą
								<br /><br />
								<strong>ZAMKNIĘTE</strong></h2>";
								break;
								case 2:
								echo "<h2>W najbliższą niedzielę sklepy będą
								<br /><br />
								<strong>OTWARTE</strong></h2>";
								break;
								case 3:
								echo "<h2>Dziś sklepy są
								<br /><br />
								<strong>ZAMKNIĘTE</strong></h2>";
								break;
								case 4:
								echo "<h2>Dziś sklepy są
								<br /><br />
								<strong>OTWARTE</strong></h2>";
								break;
								default:
								echo "<h2>Brak danych otwarcia sklepów.</h2>
								<br /><br />";

							}
							//echo "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa".$date;
							?>

							<p>Chcesz wiedzieć w którą niedzielę sklepy będą zamknięte?</p>
							<a href="powiadomienie.php" class="button big">Ustaw<br />powiadomienie</a>
							<br /><br /><br />
							<p>Chcesz zrobić zakupy w niedzielę wolną od handlu?</p>
							<a href="sklepy.php" class="button big">Znajdź sklep<br />w twojej okolicy</a>2
							<br /><br /><br />
							<p>Twój sklep jest otwarty w niedzielę wolną od handlu?</p>
							<a href="dodaj_sklep.php" class="button big">Dodaj sklep<br />do naszej bazy</a>
						</div>
					</div>
				</div>
	<?php include("footer.php"); ?>
