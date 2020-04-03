<?php
  require "header.php";
  //include_once "header.php";
?>
      </div>
    </nav>
<main>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

  <script>
    $(document).ready(function()  {
      $("form").submit(function(event) {
        event.preventDefault();
        var firstname = $("#firstname").val();
        var lastname = $("#lastname").val();
        var email = $("#email").val();
        var message = $("#message").val();
        var captcha = $("#captcha").val();
        var checkbox = $("[type='checkbox']:checked").val();
        var submit = $("#mail-submit").val();

        $(".form-message").load("includes/submit.inc.php", {
          firstname: firstname,
          lastname: lastname,
          email: email,
          message: message,
          captcha: captcha,
          checkbox: checkbox,
          submit: submit
        });
      });
    });
    function refreshCaptcha() {
         $("#captcha_code").attr('src','includes/captcha_code.php');
    }
  </script>

  <div class="container">
    <br>
    <div class="form-message"></div>
    <form> <!-- class="needs-validatio"-->
      <div class="form-row">
        <div class="col-md-4 mb-3">
          <label for="firstname">First name</label>
          <input id="firstname" type="text" class="form-control" name="$firstname">
        </div>
        <div class="col-md-4 mb-3">
          <label for="lastname">Last name</label>
          <input id="lastname" type="text" class="form-control" name="lastname">
        </div>
      </div>
      <div class="form-group">
          <label for="email">E-mail</label>
          <div class="input-group">
            <input id="email" type="email" class="form-control" name="email">
          </div>
      </div>
      <div class="form-group">
        <label>Message</label>
        <textarea id="message" name="message" rows="5" cols="30" class="form-control"></textarea>
      </div>
      <div class="form-group">
        <div class="form-row">
          <div class="col-md-4 mb-3">
            <input type="text" class="form-control" id="captcha" name="captcha" placeholder="CAPTCHA">
          </div>
          <div class="col-md-4 mb-3">
            <img id="captcha_code" src="includes/captcha_code.php" type="text" class="myClass">
          </div>
        </div>
        <input type="button" class="btn btn-secondary" onClick="refreshCaptcha();" value="Refresh">
      </div>
      <div class="form-group">
        <div class="form-check">
          <input class="form-check-input" type="checkbox">
          <label class="form-check-label">
            Agree to terms and conditions
          </label>
        </div>
      </div>
      <input type="submit" id="mail-submit" class="btn-primary btn" value="Send e-mail">
    </form>
  </div>
</main>
