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
                      <h2>Ustaw powiadomienie</h2>
                    </header>
                    <form>
                      Adres e-mail:
                     <input type="email" name="email"><br/>
                      Wybierz dzień i godzinę otrzymywania powiadomień:<br >
                      <input type="radio" name="daytime" id="Fri_9" value="Fri_9">
                      <strong>Piątek 9:00</strong><br />
                      <input type="radio" name="daytime" id="Fri_16" value="Fri_16">
                      <strong>Piątek 16:00</strong><br />
                      <input type="radio" name="daytime" id="Sat_9" value="Sat_9">
                      <strong>Sobota 9:00</strong><br />
                      <input type="radio" name="daytime" id="Sat_16" value="Sat_16">
                      <strong>Sobota 16:00</strong>

                      <br />
                      <br />
                      <button type="button" onclick="alert('Hello World!')">Ustaw powiadomienie</button>
                    </form>
                  </article>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php include("footer.php"); ?>
