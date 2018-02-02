<?php

$data = $_POST;
$result = Array('status' => 'error');

if(!isset($data['email'])) {
    $result['error'] = 'empty_email';
    die(json_encode($result));
}

if(!isset($data['code'])) {
    $result['error'] = 'empty_code';
    die(json_encode($result));
}

if(!isset($data['wallet'])) {
    $result['error'] = 'empty_wallet';
    die(json_encode($result));
}

$email = trim($data['email']);
$code = trim($data['code']);
$wallet = trim($data['wallet']);

if(empty($email)) {
    $result['error'] = 'empty_fields';
    die(json_encode($result));
}
if(empty($code)) {
    $result['error'] = 'empty_fields';
    die(json_encode($result));
}
if(empty($wallet)) {
    $result['error'] = 'empty_fields';
    die(json_encode($result));
}

if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $result['error'] = 'invalid_email';
    die(json_encode($result));
}

$file_text = $email . " | " . $code . " | " . $wallet . "\r\n";
$save_result = file_put_contents('promo_list.txt', $file_text, FILE_APPEND);

if($save_result)  {
    $result['status'] = 'success';
}
else {
    $result['error'] = 'save';
}

die(json_encode($result));

?>