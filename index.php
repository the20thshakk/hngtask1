<?php

$conn = mysqli_connect("localhost","Meshack","iyanuoluwa","hngapi");
$response = array();
if($conn){
    $sql = "select * from api";
    $result = mysqli_query($conn,$sql);
    if($result){
        $i=0;
        while($row = mysqli_fetch_assoc($result)){
            $response[$i]['slackUsername'] = $row ['slackUsername'];
            $response[$i]['backend'] = $row ['backend'];
            $response[$i]['age'] = $row ['age'];
            $response[$i]['bio'] = $row ['bio'];
            $i++;
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }
}
else{
    echo "connection failed";
}

?>
