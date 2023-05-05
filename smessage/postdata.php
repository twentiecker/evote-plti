<?php 


$ch = curl_init(); // Initialize cURL

$data = [ 
	"data"=>[
    "nama" => "fadli2",
	"to" => "lukman"
	]
];

//url-ify the data for the POST



curl_setopt($ch, CURLOPT_URL, '192.168.100.20:3001/mine'); // Set the API endpoint
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); // Set the request headers
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Return the response as a string
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

// Set the appropriate method (e.g., GET, POST, PUT, DELETE)
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');

// Add any necessary data or parameters to the request, such as query parameters or request body
// Example: curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
/* contoh

$fields = [
    '__VIEWSTATE '      => $state,
    '__EVENTVALIDATION' => $valid,
    'btnSubmit'         => 'Submit'
];

//url-ify the data for the POST
$fields_string = http_build_query($fields);

curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);


*/

$response = curl_exec($ch); // Execute the cURL request
curl_close($ch); // Close cURL

// Process the response
if ($response === false) {
    // Handle error
	echo "error";
} else {
    $decodedResponse = json_decode($response, true); // Decode the response from JSON to an array or object
    echo "sukses";
	print_r($decodedResponse);
	// Process the decoded response
}
?>