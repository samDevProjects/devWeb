<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<?php
  include_once 'dbh.inc.php';


    session_start();


    if(isset($_POST['submit'])){

      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $email = $_POST['email'];
      $message = $_POST['message'];
      $captcha = $_POST['captcha'];
      $captcha_code = $_SESSION["captcha_code"];

      $errorEmpty = false;
      $errorCaptcha = false;
      $errorCheckbox = false;

      if (empty($firstname) || empty($lastname) || empty($email) || empty($message) || empty($captcha) || !isset($_POST['checkbox'])) {
        echo "<span class='form-error'>Fill in all the fields correctly!</span>";
        $errorEmpty = true;
        //echo "<br>errorEmpty(1 for true): ".$errorEmpty;
      }

      if (empty($captcha)){
        $errorCaptcha = true;
        ///echo "<br>errorCaptcha(1 for true): ".$errorCaptcha."<br>";
      }
      if ($captcha != $captcha_code) {
        echo '<br><span class="form-error">captcha error</span>';
        $errorCaptcha = true;
      }

      if (!isset($_POST['checkbox'])) {
        $errorCheckbox = true;
      }
      elseif($errorEmpty == false && $captcha == $captcha_code && $errorCheckbox == false) {
        echo "<span class='form-success'>successful send!</span>";
      }
    }
    else {
      echo "There was an error!";
    }
    //echo "<br><br> After loop: <br> errorCaptcha: ".$errorCaptcha."<br> errorEmpty: ".$errorEmpty."<br> errorCheckbox: ".$errorCheckbox."<br>";
?>



<script>
  var errorEmpty = "<?php echo $errorEmpty ?>";
  var errorCaptcha = "<?php echo $errorCaptcha ?>";
  var errorCheckbox = "<?php echo $errorCheckbox ?>";
  /*if(errorEmpty == true)  {
    $("#firstname, #lastname, #email, #message, #captcha").addClass("is-invalid");
  }*/
  //console.log(errorCheckbox, errorCaptcha, errorEmpty);
  if (errorEmpty == false && errorCaptcha == false && errorCheckbox == false) {
    $("#firstname, #lastname, #email, #message, #captcha").val("");
  }
  if (errorCaptcha == true && errorCaptcha == false) {
    function refreshCaptcha() {
         $("#captcha_code").attr('src','captcha_code.php');
    }
  }
</script>



<?php
  if ($errorEmpty == false && $errorCaptcha == false && $errorCheckbox == false){

      $userFirst = mysqli_real_escape_string($conn, $firstname);
      $userLast = mysqli_real_escape_string($conn, $lastname);
      $userEmail = mysqli_real_escape_string($conn, $email);
      $userMesssage = mysqli_real_escape_string($conn, $message);

      $sql = "INSERT INTO users(user_first, user_last, user_email, user_message) VALUES(?, ?, ?, ?);";
      $stmt = mysqli_stmt_init($conn);

      if (!mysqli_stmt_prepare($stmt, $sql)) {
       echo "SQL error";
      }
      else {
       mysqli_stmt_bind_param($stmt, "ssss", $userFirst, $userLast, $userEmail, $userMesssage);
       mysqli_stmt_execute($stmt);
     }
  }
?>
