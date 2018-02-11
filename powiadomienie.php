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

                    <div class="notification_type" id="email_choice">Powiadomienie E-mail</div>
                    <div class="notification_type" id="sms_choice">Powiadomienie SMS</div>

                    <form id="email_form">
                      <h3>Powiadomienie e-mail jest bezpłatne.</h3>
                      <p>Adres e-mail:</p>
                     <input type="email" name="email" placeholder="Podaj adres e-mail">

                     <p>Wybierz dzień i godzinę otrzymywania powiadomień:</p>

                       <div class="notification_time notification_time_email" id="Fri9Email_box">
                         <label for="Fri_9_email">Piątek 9:00</label>
                         <input type="radio" name="daytime" id="Fri_9_email" value="Fri_9_email" hidden>
                       </div>

                       <div class="notification_time notification_time_email" id="Fri16Email_box">
                         <label for="Fri_16_email">Piątek 16:00</label>
                         <input type="radio" name="daytime" id="Fri_16_email" value="Fri_16_email" hidden>
                       </div>
                       <div class="notification_time notification_time_email" id="Sat9Email_box">
                         <label for="Sat_9_email">Sobota 9:00</label>
                         <input type="radio" name="daytime" id="Sat_9_email" value="Sat_9_email" hidden>
                       </div>
                       <div class="notification_time notification_time_email" id="Sat16Email_box">
                         <label for="Sat_16_email">Sobota 16:00</label>
                         <input type="radio" name="daytime" id="Sat_16_email" value="Sat_16_email" hidden>
                       </div>
                     <button class="all_notification" type="submit" onclick="alert('Ustawiono powiadomienie!')">Ustaw powiadomienie</button>
                    </form>
                    <!--
                    <form id="sms_form">

                      <h3>Powiadomienie sms jest płatne.</h3>

                      <p>Wybierz typ płatności:<p>

                      <div class="payment_type" id="monthlyPayment_box">
                        <label for="monthly_payment">Płatność miesięczna
                        <p class="payment_amount">90 gr/miesiąc</p>
                        </label>
                        <input type="radio" name="payment" id="monthly_payment" value="monthly_payment" hidden>
                      </div>

                      <div class="payment_type" id="yearlyPayment_box">
                        <label for="yearly_payment">Płatność roczna
                          <p class="payment_amount">9 zł/rok</p>
                        </label>
                        <input type="radio" name="payment" id="yearly_payment" value="yearly_payment" hidden>
                      </div>

                     <p>Numer telefonu:</p>
                     <input type="tel" name="tel" id="tel" placeholder="Podaj numer telefonu">

                     <p>Wybierz dzień i godzinę otrzymywania powiadomień:</p>
                     <div class="notification_time notification_time_sms"  id="Fri9Sms_box">
                       <label for="Fri_9_sms">Piątek 9:00</label>
                       <input type="radio" name="daytime" id="Fri_9_sms" value="Fri_9_sms" hidden>
                     </div>
                     <div class="notification_time notification_time_sms"  id="Fri16Sms_box">
                       <label for="Fri_16_sms">Piątek 16:00</label>
                       <input type="radio" name="daytime" id="Fri_16_sms" value="Fri_16_sms" hidden>
                     </div>
                     <div class="notification_time notification_time_sms"  id="Sat9Sms_box">
                       <label for="Sat_9_sms">Sobota 9:00</label>
                       <input type="radio" name="daytime" id="Sat_9_sms" value="Sat_9_sms" hidden>
                     </div>
                     <div class="notification_time notification_time_sms"  id="Sat16Sms_box">
                       <label for="Sat_16_sms">Sobota 16:00</label>
                       <input type="radio" name="daytime" id="Sat_16_sms" value="Sat_16_sms" hidden>
                     </div>
                     <button type="submit" onclick="alert('Ustawiono powiadomienie sms!')">Ustaw powiadomienie</button>

                    </form>
                    -->
                    <div id="sms_form_disabled" style="text-align: center;">
                      <h3>Funkcja powiadomień sms jest teraz nieaktywna</h3>
                      <h5>Spróbuj ponownie później</h5>
                    </div>

                  </article>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php include("footer.php"); ?>
