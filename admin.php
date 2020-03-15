<?php
  require "header.php";
  include_once "includes/dbh.inc.php";
?>


      <form method="post" class="form-inline my-2 my-lg-0" action="includes/login.inc.php">
          <a class="btn btn-outline-light my-2 my-sm-0 button" href="includes/logout.inc.php">Log out</a>
      </form>
    </div>
  </nav>

  <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>

    <script>
      $(document).ready(function(){
        var messageCount = 5;
        $("#btn").click(function()  {
            messageCount += 4;
            $(".list-group").load("includes/messages.inc.php", {
                messageNewCount: messageCount
            });
        });
      });
    </script>

    </head>
    <body>
      <div class="container">
        <br>
          <div class="list-group">
            <?php
              $sql = "SELECT * FROM users ORDER By created_at DESC LIMIT 5";
              $result = mysqli_query($conn, $sql);
              while($row = mysqli_fetch_assoc($result)) {
                echo "
                    <a class='list-group-item list-group-item-action flex-column align-items-start'>
                      <div class='d-flex w-100 justify-content-between'>
                        <h5 class='mb-1'>from: ".$row['user_email'].
                        "</h5> <small>received at: ".$row['created_at']."</small>
                      </div>
                      <div id='read-message'>Read Message
                        <p class='mb-1 childMessage' >".$row['user_message']."</p>
                        <small class='childMessage'>".$row['user_first']." ".$row['user_last']."</small>
                      </div>
                    </a>
                ";
              }
              if (mysqli_num_rows($result) <= 0) {
                echo "There are no messages";
              }
            ?>
        </div>
        <br>
        <button id="btn" class="btn btn-outline-dark my-2 my-sm-0 button" type="submit">Show more message</button>
      </div>
  </body>
  <script>
    function handler( event ) {
      var target = $( event.target );
      if ( target.is( "#read-message" ) ) {
        target.children().toggle();
      }
    }
    $("a").click(handler).find(".childMessage").hide();
  </script>
  </html>
