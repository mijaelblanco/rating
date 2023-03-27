<?php 
  require("config/session.php");
  require("config/helper.php");
  require("config/database.php");
  require("config/constant.php");
 		
  $sqltran = mysqli_query($conn, "SELECT * FROM logs ") or die(mysqli_error($conn));
  $arrVal = array();
 		
  $i=1;

  while ($rowList = mysqli_fetch_array($sqltran)) {       
    $name = array(
        'id' => $rowList['id'],
        'username'=> $rowList['username'],
        'final_date'=> $rowList['final_date']
      );		
      array_push($arrVal, $name);	
    $i++;			
  }
      echo  json_encode($arrVal);		
  mysqli_close($conn);
?>