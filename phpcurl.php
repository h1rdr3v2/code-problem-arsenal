<?php
    $curl = curl_init();
    $headers = array(
        'Accept: application/json',
        'Content-Type: application/json',
        'Cookie: __test=26973b96c4fe5a82a2b188b2da3f1056'
        );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);        //Make it reurn data
    curl_setopt($curl, CURLOPT_URL, "http://myundian.rf.gd/public/user/");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($curl);
    $err = curl_error($curl);
    echo $err;
    echo ($result);
?>
