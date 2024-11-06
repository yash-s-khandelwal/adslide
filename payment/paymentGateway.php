<?php   
  // API Information
  $merchantId = 'PGTESTPAYUAT86'; 
  $saltkey="96434309-7796-489d-8924-ab56988a6076";
  $salt_index = 1; //key index 1

  // User Information
  $amount = 300; // in rupees
  $orderid = 12345;
  $message = "Fresher's Payment.";  
  
  $amount_in_paisa = $amount*100;
    
  $paymentData = array(
      'merchantId' => $merchantId,
      'merchantTransactionId' => "MT-$studurn",
      'amount' => $amount_in_paisa, // Amount in paisa (10 INR)
      "merchantUserId"=>"MUID123",
      'redirectUrl'=>"http://localhost/PHP-Programs/Adslide/payment/paymentSuccess.php",
      'redirectMode'=>"POST",
      'callbackUrl'=>"http://localhost/PHP-Programs/Adslide/payment/paymentSuccess.php",
      "paymentInstrument"=> array(    
      "type"=> "PAY_PAGE",
      )
    );

     
    $jsonencode = json_encode($paymentData);
    $payloadMain = base64_encode($jsonencode);

    $payload = $payloadMain . "/pg/v1/pay" . $saltkey;
    $sha256 = hash("sha256", $payload);
    $final_x_header = $sha256 . '###' . $salt_index;
    $request = json_encode(array('request'=>$payloadMain));

    $curl = curl_init();
    curl_setopt_array($curl, [
      CURLOPT_URL => "https://api-preprod.phonepe.com/apis/pg-sandbox/pg/v1/pay",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => $request,
      CURLOPT_HTTPHEADER => [
        "Content-Type: application/json",
        "X-VERIFY: " . $final_x_header,
        "accept: application/json"
      ],
    ]);
 
$response = curl_exec($curl);
$err = curl_error($curl);
 
curl_close($curl);
 
if ($err) {
  echo "cURL Error #:" . $err;
} 
else {
  $res = json_decode($response);
  if(isset($res->success) && $res->success=='1'){
    $paymentCode=$res->code;
    $paymentMsg=$res->message;
    $payUrl=$res->data->instrumentResponse->redirectInfo->url;
    
    header('Location:'.$payUrl) ;
  }
}
?>