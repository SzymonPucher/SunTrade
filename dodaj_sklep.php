<?php include("header.php"); ?>
<body class="no-sidebar">
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
              <div id="content">
                <!-- Content -->
                  <article>
                    <header class="major">
                      <h2>Dodaj sklep</h2>
                    </header>

                    <?php
                    if(isset($_POST['submit'])){
                      $list = [];
                      if (($handle = fopen("data/shops.csv", "r")) !== FALSE) {
                          while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                              array_push($list,$data);
                          }
                          fclose($handle);
                      }

                      if($_POST['shop_name'] ==''){
                        $error[] = 'Nazwa sklepu jest wymagana';
                      }
                      if($_POST['open_from'] ==''){
                        $error[] = 'Godzina otwarcia jest wymagana';
                      }
                      if($_POST['open_to'] ==''){
                        $error[] = 'Godzina zamknięcia jest wymagana';
                      }
                      if($_POST['address'] ==''){
                        $error[] = 'Adres jest wymagany';
                      }
                      if($_POST['town'] ==''){
                        $error[] = 'Miasto jest wymagane';
                      }

                      foreach ($list as $field){
                        if($field[3] == $_POST['address'] && $field[4] == $_POST['town']){
                          $error[] = 'Sklep o tym adresie już jest w naszej bazie.';
                        }
                      }

                      if(isset($error)){
                          foreach($error as $error){
                              echo "<p style='color:#ff0000; text-align: center;'>$error</p><br />";
                          }
                      }
                      else {

                        $shop_name = $_POST['shop_name'];
                        $open_from = $_POST['open_from'];
                        $open_to = $_POST['open_to'];
                        $address = $_POST['address'];
                        $town = $_POST['town'];

                        array_push($list,array($shop_name,$open_from,$open_to,$address,$town));

                        $fp = fopen('data/shops.csv', 'w');
                        foreach ($list as $fields) {
                            fputcsv($fp, $fields);
                        }
                        fclose($fp);
                      }
                    }

                    ?>

                    <form method="post">
                      Nazwa sklepu:
                      <input type="text" name="shop_name" placeholder="Podaj nazwę sklepu">
                      Godziny otwarcia w niedziele wolne od handlu:<br />
                      Otwarte od: <input type="time" name="open_from">
                      do: <input type="time" name="open_to"><br />
                      Adres:
                      <input type="text" name="address" placeholder="Podaj adres">
                      Miasto:
                      <input type="text" name="town" placeholder="Podaj nazwę miasta">
                      <button type="submit" name="submit" value="submit">Dodaj sklep</button>
                    </form>


                  </article>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php include("footer.php"); ?>
