<?php
    $curl = curl_init();

    curl_setopt($curl, CURLOPT_URL, "http://myundian.rf.gd/public/user/");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($curl);
    $err = curl_error($curl);
    echo $err;
    echo ($result);
?>