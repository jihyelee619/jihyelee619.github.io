<?php
//$myData = $_POST["mydata"];
//$response = array ('my'=> $myData,'res'=> $gameData);
$response = '{"RESULT" : "0","BONUS": "0","ITEMS": ["0","0","3","2","0","0","0","2","3","0"],"REMAINTICKET" : "10","USETICKET" : "6"}';

echo json_encode($response);

?>