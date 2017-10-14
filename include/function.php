  <?php

// THIS FUNCTION IS FOR CREATING UNIQUE TIKET NUMBER FOR USER
  

  function unique_id($l = 8){
  $better_token = md5(uniqid(rand(), true));
      $rem = strlen($better_token)-$l;
  $unique_code = substr($better_token, 0, -$rem);
  $uniqueid = $unique_code;
  return $uniqueid;
  }

  


  function filterphone($field) {
    //number of charecter on phone number  
    $pattern = "/^[0-9\_]{9,10}/";
    //validate phone number
    if (preg_match($pattern,$field)){ 
      return $field;
    }else{
      return FALSE;
    }
}
function filterName($field){
    // Sanitize user name
    $field = filter_var(trim($field), FILTER_SANITIZE_STRING);
    
    // Validate user name
    if(filter_var($field, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+/")))){
        return $field;
    }else{
        return FALSE;
    }
}    
function filterEmail($field){
    // Sanitize e-mail address
    $field = filter_var(trim($field), FILTER_SANITIZE_EMAIL);
    
    // Validate e-mail address
    if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
        return $field;
    }else{
        return FALSE;
    }
}
function filterString($field){
    // Sanitize string
    $field = filter_var(trim($field), FILTER_SANITIZE_STRING);
    if(!empty($field)){
        return $field;
    }else{
        return FALSE;
    }
}
function filtermessage($field){
    // Sanitize string
    
    if(!empty($field)){
        return $field;
    }
}