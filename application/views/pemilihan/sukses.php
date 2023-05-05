<h5>sukses <?php 



echo "nik :".$nik." vote: ".$vote; 

?> </h5>

<?php
inputblok($nik,$vote);
function inputblok($nik,$vote) {
    $datatps = $_SESSION['tps'];
    $tps =$datatps['ID'];
    
    $ch = curl_init(); // Initialize cURL
    $ipadress= $datatps['Adress'].':'.$datatps['Port'];
    $idvoter = $nik;
    $h = $vote;
    $kandidate = "";
    if($h==1){
        $kandidate = "k1";
    
    }
    else if($h==2){
        $kandidate = "k2";
    
    }
    else if($h==3){
        $kandidate = "k3";
    
    }
    
    $data = [
        "recipient"=> $idvoter,
        $kandidate.$tps => 1
    ];

    //url-ify the data for the POST
    
    
    
    curl_setopt($ch, CURLOPT_URL, $ipadress.'/transact'); // Set the API endpoint
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); // Set the request headers
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Return the response as a string
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    
    // Set the appropriate method (e.g., GET, POST, PUT, DELETE)
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    
    
    $response = curl_exec($ch); // Execute the cURL request
    curl_close($ch); // Close cURL
    
    // Process the response
    if ($response === false) {
        // Handle error
        echo "error";
    } else {
        $decodedResponse = json_decode($response, true); // Decode the response from JSON to an array or object
        echo "sukses";
        //print_r($decodedResponse);
        // Process the decoded response
    }
    
    
    //mine-transacton
    //--------------------------------------------------------------------------------------
    
    $chget = curl_init(); // Initialize cURL
    curl_setopt($chget, CURLOPT_URL, $ipadress.'/mine-transactions'); // Set the API endpoint
    curl_setopt($chget, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); // Set the request headers
    curl_setopt($chget, CURLOPT_RETURNTRANSFER, true); // Return the response as a string
    
    // Set the appropriate method (e.g., GET, POST, PUT, DELETE)
    curl_setopt($chget, CURLOPT_CUSTOMREQUEST, 'GET');
    
    
    $response2 = curl_exec($chget); // Execute the cURL request
    curl_close($chget); // Close cURL
    
    // Process the response
    if ($response2 === false) {
        // Handle error
        echo "error 2";
    } else {
        $decodedResponse2 = json_decode($response2, true); // Decode the response from JSON to an array or object
        echo "sukses2";
        print_r($decodedResponse2);
        //echo "<html><?br>---------------------------------------------------------------------------------";
    //print_r($decodedResponse[2]['data']); echo "-----------------------------------------------------------------</br>";
    //	echo $decodedResponse[2]['data']['nama'];
        //echo"</html>";
        
        //$a = $decodedResponse[2];
        //echo ($a[0]);
        // Process the decoded response
    }

}


?>