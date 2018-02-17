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

                <div class="8u 12u(mobile) important(mobile)">
                  <div id="content">
                    <!-- Content -->
                      <article>
                        <header class="major">
                          <h2>Statystyki</h2>
                        </header>


                        <?php

                          $table = "<table style='text-align: center;'><tr><th>Nazwa sklepu</th><th>Godziny otwarcia</th><th>Adres</th></tr>";
                          $list = [];
                          if (($handle = fopen("data/shops.csv", "r")) !== FALSE) {
                              while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                                  array_push($list,$data);
                              }
                              fclose($handle);
                          }
                          unset($list[0]);


                            $num_of_shops = 0;
                            foreach ($list as $field) {
                                $num_of_shops++;
                                $table = $table."<tr><td>".$field[0]."</td><td>".$field[1]." - ".$field[2]."</td><td>".$field[3].", ".$field[4]."</td></tr>";
                            }
                            // emails

                            $email_table = "<table style='text-align: center;'><tr><th>Email</th></tr>";
                            $email_list = [];
                            if (($handle = fopen("data/emails.csv", "r")) !== FALSE) {
                                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                                    array_push($email_list,$data);
                                }
                                fclose($handle);
                            }
                            unset($email_list[0]);


                              $num_of_emails = 0;
                              foreach ($email_list as $field) {
                                  $num_of_emails++;
                                  $email_table = $email_table."<tr><td>".$field[0]."</td></tr>";
                              }

                            // prining
                            echo "<h1>Ilość sklepów w bazie: $num_of_shops<br /><a href='data/shops.csv'> ---> download shops.csv <--- </a></h1>";
                            echo "<h1>Ilość email'ów w bazie: $num_of_emails<br /><a href='data/emails.csv'> ---> download emails.csv <--- </a></h1>";
                            echo "$table</table>";
                            echo "$email_table</table>";
                        ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  <?php include("footer.php"); ?>
