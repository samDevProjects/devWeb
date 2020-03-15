<?php
  include 'dbh.inc.php';

  $messageNewCount = $_POST['messageNewCount'];

  $sql = "SELECT * FROM users ORDER By created_at DESC LIMIT $messageNewCount";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
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
  }
  else {
    echo "There are no comments";
  }
?>
<script>
  function handler( event ) {
    var target = $( event.target );
    if ( target.is( "#read-message" ) ) {
      target.children().toggle();
    }
  }
  $( "a" ).click( handler ).find( ".childMessage" ).hide();
</script>
