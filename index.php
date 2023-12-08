
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>form submit</title>
  <link rel="stylesheet" type="text/css" href="./style.css" />
</head>
<body>

  <!-- <?php

    if(!empty($_POST["Send"])){
      $userName = $_POST["userName"];
      $userEmail = $_POST["userEmail"];
      $userPhone = $_POST["userPhone"];
      $userMessage = $_POST["userMessage"];
      $toEmail = "hanslemkimeng5@gmail.com";

      $mailHeaders = "Name: " . $userName .
      "\r\n Email: " . $userEmail .
      "\r\n Phone: " . $userPhone .
      "\r\n Message: " . $userMessage . "\r\n";

      if(mail($toEmail, $userName, $mailHeaders)){
         $message = "Your information has been received successfully.";
      }
    }
  ?>


<div class="form-container">
      <form action="./index.php" method="post" name="emailContact">
        <div class="input-row">
          <label for="userName">Name <em>*</em></label>
          <input type="text" name="userName" id="" required />
        </div>

        <div class="input-row">
          <label for="userEmail">Email <em>*</em></label>
          <input type="email" name="userEmail" id="" required />
        </div>

        <div class="input-row">
          <label for="userPhone">Phone <em>*</em></label>
          <input type="tel" name="userPhone" id="" required />
        </div>

        <div class="input-row">
          <label for="userMessage">Message <em>*</em></label>
          <textarea type="text" name="userMessage" id="" required></textarea>
        </div>

        <div class="input-row">
          <input type="submit" name="Send" id="" value="Submit" required />
          <?php
            if(!empty($message)){ ?>
          <div class="success">
            <strong><?php echo $message; ?></strong>
          </div>
          <?php } ?>
        </div>
      </form>
    </div> -->
</body>
</html>