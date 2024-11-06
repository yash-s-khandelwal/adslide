<?php
    echo "Payment Done! <br><br>";
    echo "<br><br>";

    $saltkey="96434309-7796-489d-8924-ab56988a6076";
    $salt_index = 1; //key index 1

    $merchantTransactionID = $_POST["transactionId"];
    $merchantID= $_POST["merchantId"];
    $amountinpaisa = $_POST['amount']; // amount in paisa
    $amount = $amountinpaisa/100;

    $payload="/pg/v1/status/$merchantID/$merchantTransactionID".$saltkey;
    $sha256=hash("sha256",$payload);
    $final_header=$sha256."###".$salt_index;

    // print_r($payload);
// 
// looop - 30 secs{
//    try block{
//      curl response

//  if (variable are set and payment code is true/success)
// executions
//     } catch { 
//        please try gain after some time
//      }
// 
// 
// 
// 
// 
// 
// 
// 
//     

    $curl = curl_init();
    curl_setopt_array($curl, [
      CURLOPT_URL => "https://api-preprod.phonepe.com/apis/pg-sandbox/pg/v1/status/$merchantID/$merchantTransactionID",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
    //   CURLOPT_POSTFIELDS => $request,
      CURLOPT_HTTPHEADER => [
        "Content-Type: application/json",
        "X-VERIFY: " . $final_header,
        "X-MERCHANT-ID:".$merchantID,
        "accept: application/json"
      ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);
    
    curl_close($curl);

    print_r("response".$response);
    echo "<br><br>";
    print_r("error".$err);

    $arrReponse=json_decode($response);

    $paymentCheck=$arrReponse->success;
    $paymentCode=$arrReponse->code;
    $paymentAmount=$arrReponse->data->amount;
    $paymentState=$arrReponse->data->state;

    print_r($paymentCheck);
    print_r($paymentCode);
    print_r($paymentAmount);
    print_r($paymentState);


    echo "<br>Transaction ID : $merchantTransactionID <br>";
    $studurn = substr($merchantTransactionID,3);
    echo "<br>URN in Transaction ID : $studurn<br>";
    

    //IF payment Made Data will be inserted

    if(isset($paymentCheck)&& isset($paymentCode) && isset($paymentAmount) &&isset($paymentState) &&  $paymentCode=="PAYMENT_SUCCESS"){

      include("conn.php");
      include("addstudinDB.php");

      header("Location:../ticket.php");
    } else{
      echo "your transaction failed";
    }
    // }
    // else{
    //   //Payment Failed
    // }

?>