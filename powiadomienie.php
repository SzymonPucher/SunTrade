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
                      <p>Wybierz typ powiadomienia:</p>
                      <div class="notification_type" id="email_choice">Powiadomienie E-mail</div>
                      <div class="notification_type" id="sms_choice">Powiadomienie SMS</div>
                      <h3 class="email_notification">Powiadomienie e-mail jest bezpłatne.</h3>
                      <h3 class="sms_notification">Powiadomienie sms jest płatne.</h3>

                      <p class="email_notification">Adres e-mail:</p>
                     <input type="email" name="email" placeholder="Podaj adres e-mail" class="email_notification">

                      <p class="sms_notification">Wybierz typ płatności:<p>

                      <div class="payment_type sms_notification">
                        <label for="monthly_payment">Płatność miesięczna
                        <p class="payment_amount">90 gr/miesiąc</p>
                        </label>
                        <input type="radio" name="payment" id="monthly_payment" value="monthly_payment">
                      </div>

                      <div class="payment_type sms_notification">
                        <label for="yearly_payment">Płatność roczna
                          <p class="payment_amount">9 zł/rok</p>
                        </label>
                        <input type="radio" name="payment" id="yearly_payment" value="yearly_payment">
                      </div>


                     <p class="sms_notification">Numer telefonu:</p>
                     <input type="tel" name="tel" id="tel" placeholder="Podaj numer telefonu" class="sms_notification"><br />

                      <p class="all_notification">Wybierz dzień i godzinę otrzymywania powiadomień:</p>
                        <div class="notification_time all_notification">
                          <label for="Fri_9">Piątek 9:00</label>
                          <input type="radio" name="daytime" id="Fri_9" value="Fri_9">
                        </div>
                        <div class="notification_time all_notification">
                          <label for="Fri_16">Piątek 16:00</label>
                          <input type="radio" name="daytime" id="Fri_16" value="Fri_16">
                        </div>
                        <div class="notification_time all_notification">
                          <label for="Sat_9">Sobota 9:00</label>
                          <input type="radio" name="daytime" id="Sat_9" value="Sat_9">
                        </div>
                        <div class="notification_time all_notification">
                          <label for="Sat_16">Sobota 16:00</label>
                          <input type="radio" name="daytime" id="Sat_16" value="Sat_16">
                        </div>
                      <button class="all_notification" type="submit" onclick="alert('Ustawiono powiadomienie!')">Ustaw powiadomienie</button>

                    </form>
                  </article>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php include("footer.php"); ?>
