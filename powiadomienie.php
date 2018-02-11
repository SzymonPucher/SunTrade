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



                    <?php
                    if(isset($_POST['submit'])){

                      $list = [];
                      if (($handle = fopen("data/emails.csv", "r")) !== FALSE) {
                          while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                              array_push($list,$data);
                          }
                          fclose($handle);
                      }

                      if($_POST['email'] ==''){
                        $error[] = 'Email jest wymagany';
                      }

                      foreach ($list as $field){
                        if($field[0] == $_POST['email'] && $field[1] == $_POST['daytime']){
                          $error[] = 'Na ten email o tej godzinie jest już ustawione powiadomienie.';
                        }
                      }

                      if(isset($error)){
                          foreach($error as $error){
                              echo "<p style='color:#ff0000; text-align: center;'>$error</p><br />";
                          }
                      }
                      else {

                        $email = $_POST['email'];
                        $daytime = $_POST['daytime'];

                        array_push($list,array($email,$daytime));

                        $fp = fopen('data/emails.csv', 'w');
                        foreach ($list as $fields) {
                            fputcsv($fp, $fields);
                        }
                        fclose($fp);

                        if(substr($daytime, -1) == "9"){
                          $time = "9:00";
                        }
                        else {
                          $time = "16:00";
                        }

                        if($daytime[0] == "F"){
                          $day = "piątek";
                        }
                        else {
                          $day = "sobotę";
                        }

                        echo "<p style='text-align: center;'>Ustawiono powiadomienie dla <b>".$email."</b> w <b>".$day."</b> o godzinie <b>".$time."</b></p><br />";
                        }
                      }
                    ?>

                    <div class="notification_type" id="email_choice">Powiadomienie E-mail</div>
                    <div class="notification_type" id="sms_choice">Powiadomienie SMS</div>

                    <form id="email_form" method="post">
                      <h3>Powiadomienie e-mail jest bezpłatne.</h3>
                      <p>Adres e-mail:</p>
                     <input type="email" name="email" placeholder="Podaj adres e-mail">

                     <p>Wybierz dzień i godzinę otrzymywania powiadomień:</p>

                       <div class="notification_time notification_time_email" id="Fri9Email_box">
                         <label for="Fri_9_email">Piątek 9:00</label>
                         <input type="radio" name="daytime" id="Fri_9_email" value="F9" hidden>
                       </div>

                       <div class="notification_time notification_time_email" id="Fri16Email_box">
                         <label for="Fri_16_email">Piątek 16:00</label>
                         <input type="radio" name="daytime" id="Fri_16_email" value="F16" hidden>
                       </div>
                       <div class="notification_time notification_time_email" id="Sat9Email_box">
                         <label for="Sat_9_email">Sobota 9:00</label>
                         <input type="radio" name="daytime" id="Sat_9_email" value="S9" hidden checked>
                       </div>
                       <div class="notification_time notification_time_email" id="Sat16Email_box">
                         <label for="Sat_16_email">Sobota 16:00</label>
                         <input type="radio" name="daytime" id="Sat_16_email" value="S16" hidden>
                       </div>
                     <button type="submit" name="submit" value="submit">Ustaw powiadomienie</button>
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
