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
                    <form>
                      Nazwa sklepu:
                      <input type="text" name="shop_name" placeholder="Podaj nazwę sklepu">
                      Godziny otwarcia w niedziele wolne od handlu:<br />
                      Otwarte od: <input type="time" name="open_from" placeholder="Podaj godzinę otwarcia">
                      do: <input type="time" name="open_from" placeholder="Podaj godzinę otwarcia"><br />
                      Adres:
                      <input type="text" name="street" placeholder="Podaj adres">
                      Miasto:
                      <input type="text" name="town" placeholder="Podaj nazwę miasta">
                      <button type="submit" onclick="alert('Dodano sklep do bazy!')">Dodaj sklep</button>
                    </form>
                    

                  </article>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php include("footer.php"); ?>
