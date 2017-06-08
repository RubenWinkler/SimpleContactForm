<?php
include_once "send-email-gmail.php";

if (isset($_POST["Submit"])) {

  $email = $_POST["Email"];
  $subject = $_POST["Subject"];
  $message = $_POST["Message"];

  $mail_body = '<html>
                <head>
                    <meta charset="utf-8">
                    <title>New message via Contact Form: '.$subject.' from '.$email.'</title>
                    <style type="text/css">
                    </style>
                </head>
                <body>
                <h2>New message via Contact Form</h2>
                <p><b>From</b>: '.$email.'</p>
                <p><b>Message</b>:<br />'.$message.'</p>
                </body>
                </html>';

  $mail->addAddress($email, $email);

  $mail->Subject = $subject;

  $mail->Body = $mail_body;

  $mail->From = $email;

  $mail->FromName = "New message via Contact Form from: " . $email;

  if (!$mail->Send()) {

    echo "<script>window.onload = function() {document.getElementById('error').innerHTML = 'There was a problem sending your message! Please try again!'; document.getElementById('error').style.display = 'block';}</script>";

  } else {

    echo '<script>window.onload = function() {document.getElementById("success").innerHTML = "Your message has been successfully sent!"; document.getElementById("success").style.display = "block";}</script>';

  }

}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Contact Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>

      button {
        width: 100%;
        margin-top: 20px;
      }

      div#error {
        display: none;
      }

      div#success {
        display: none;
      }

    </style>

  </head>
  <body>

    <main class="container">

      <h1>Contact form</h1>

      <div class="alert alert-success" id="success" role="alert"></div>
      <div class="alert alert-danger" id="error" role="alert"></div>

      <form method="post" action="" id="contact-form">

        <div class="form-group">
          <label for="Email">Email address</label>
          <input type="email" class="form-control" id="Email" placeholder="Enter your E-Mail adress" name="Email">
        </div>

        <div class="form-group">
          <label for="Subject">Subject</label>
          <input type="text" class="form-control" id="Subject" placeholder="Enter a subject" name="Subject">
        </div>

        <div class="form-group">
          <label for="Message">Your message</label>
          <textarea type="textarea" class="form-control" id="Message" placeholder="Enter your message" cols="1" rows="3" name="Message"></textarea>
        </div>

        <button class="btn btn-primary" id="Submit" name="Submit">Submit</button>

      </form>

    </main>

    <footer>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

      <script>

        function isValidEmailAddress(emailAddress) {
            var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
            return pattern.test(emailAddress);
        };

        $("#Submit").click(function() {

          var errorsArray = [];
          var result;

          if ($("#Email").val() == "" || !isValidEmailAddress($("#Email").val())) {

            result = "That (" + $("#email").val() + ") is not a valid E-Mail adress!";

            errorsArray.push(result);

          }

          if ($("#Subject").val() == "") {

            result = "Please enter a subject!";

            errorsArray.push(result);

          }

          if ($("#Message").val() == "") {

            result = "Please enter a message!";

            errorsArray.push(result);

          }

          if (errorsArray.length != 0) {

            var errorList = "<ul>";

            for (var i = 0; i < errorsArray.length; i++) {

              errorList += "<li>" + errorsArray[i] + "</li>";

            }

            errorList += "</ul>";

            $("#error").html(errorList);

            $("#error").css("display", "block");

            return false;

          } else {

            return true;

          }

        });

      </script>

    </footer>

  </body>
</html>
