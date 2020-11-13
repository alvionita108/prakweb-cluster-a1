<?php
$data = array("lanirne", "aduh", "qifuat", 
                "toda", "anevi", "samid", 
                "kifuat", "akjdh", "klfdsjls", 
                "fuacd");

echo "Berikut merupakan 10 data acak yang ada: <br>";

    for ($i=0;$i<10;$i++) {
        if($i!=9){
            echo $data[$i] . ", ";
        }else{
            echo $data[$i];
        }
    }

sort($data);

echo "<br> <br> Data acak yang telah diurutkan :<br>";
   
    for ($i=0;$i<10;$i++) {
        if($i!=9){
            echo $data[$i] . ", ";
        }else{
            echo $data[$i];
        }
       
    }
?>