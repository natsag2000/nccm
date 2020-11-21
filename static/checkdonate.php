<?php
if(filter_has_var(INPUT_POST, 'checkid')) {
  $checkid = filter_input(INPUT_POST,'checkid',FILTER_SANITIZE_NUMBER_INT);
} else {
  $checkid = filter_input(INPUT_GET,'checkid',FILTER_SANITIZE_NUMBER_INT);
}

function request($amount,$currency) {
  /*
  $url = 'https://test.hipay.mn/payment/get/';
  $orgId = 'cancer';
  $token = 'TzUwM09oWGVkaVlaQjlQRg';
  */
  $url = 'https://sts.hipay.mn/payment/get/';
  $orgId = 'cancerco';
  $token = 'ZDdVY2pGanYyc0ZiZnhMYg';
  $url .= $checkid.'?entityId='.$orgId;
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Authorization:Bearer ' .$token));
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // this should be set to true in production curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $responseData = curl_exec($ch);
  if(curl_errno($ch)) {
    return curl_error($ch);
  }
  curl_close($ch);
  return $responseData;
}
$responseData = @request($amount,$currency);
