<?php 
function debug($variable){
    echo'<pre>'.print_r($variable,true).'</pre>';
}

function updateCash(){
    include('db.php');
    $sql = "SELECT * FROM voyage ";
    $result = $pdo->query($sql);
    while($row = $result->fetch_assoc()){
      
        
    }
}