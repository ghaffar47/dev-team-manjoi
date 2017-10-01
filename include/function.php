  <?php

// THIS FUNCTION IS FOR CREATING UNIQUE TIKET NUMBER FOR USER
  

  function unique_id($l = 8){
  $better_token = md5(uniqid(rand(), true));
      $rem = strlen($better_token)-$l;
  $unique_code = substr($better_token, 0, -$rem);
  $uniqueid = $unique_code;
  return $uniqueid;
  }

  echo unique_id(8);