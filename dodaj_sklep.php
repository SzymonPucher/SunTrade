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
                      <input type="email" name="email" placeholder="Podaj nazwę sklepu"><br/>

                      <button type="submit" onclick="alert('Dodano sklep do bazy!')">Dodaj sklep</button>
                    </form>
                  </article>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php include("footer.php"); ?>
