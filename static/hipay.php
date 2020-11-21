<?php
if(filter_has_var(INPUT_POST, 'amount')) {
  $amount = filter_input(INPUT_POST,'amount',FILTER_SANITIZE_NUMBER_INT);
  $currency = filter_input(INPUT_POST,'currency',FILTER_SANITIZE_STRING);
  $msg = filter_input(INPUT_POST,'msg',FILTER_SANITIZE_STRING);
} else {
  $amount = filter_input(INPUT_GET,'amount',FILTER_SANITIZE_NUMBER_INT);
  $currency = filter_input(INPUT_GET,'currency',FILTER_SANITIZE_STRING);
  $msg= filter_input(INPUT_GET,'msg',FILTER_SANITIZE_STRING);
}

function request($amount,$currency) {
  /*
  $url = 'https://test.hipay.mn/checkout/';
  $orgId = 'cancer';
  $token = 'TzUwM09oWGVkaVlaQjlQRg';
  */
  $url = 'https://sts.hipay.mn/checkout/';
  $orgId = 'cancerco';
  $token = 'ZDdVY2pGanYyc0ZiZnhMYg';
  $data = 'entityId='.$orgId
        .'&amount='.number_format($amount,2,'.','')
        .'&currency='.$currency
        .'&item[0][name]='.$msg;
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Authorization:Bearer ' .$token));
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // this should be set to true in production curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $responseData = curl_exec($ch);
  if(curl_errno($ch)) {
    return curl_error($ch);
  }
  curl_close($ch);
  return $responseData;
}
$responseData = @request($amount,$currency);
