<?php 
/*if (isset($_POST['customer_id']) && $_POST['customer_id']!="") {
 $customer_id = $_POST['customer_id'];*/
 
 // path of the REST API URL
$url = "https://portal.daun-penh.com/api/login.php";
 
 $postdata = json_encode(array(
    "empemail" => "han.vatana@dpc-group.com",
    "password" => "123@123"
));

$curl = curl_init($url);
//setting them to false.
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $postdata);
 $response = curl_exec($curl);

 if ($response === false) {
    throw new Exception(curl_error($curl), curl_errno($curl));
}

 $result = json_decode($response);
 echo $result->message;
 echo $result->Tooken;

 if(!$result) {
 echo "No data found";
 exit;
 }
//}
 ?>


