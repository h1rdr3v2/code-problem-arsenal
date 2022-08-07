<?php
    $curl = curl_init();
    $headers = array(
        'Connection: keep-alive',
        'Cookie: __test=26973b96c4fe5a82a2b188b2da3f1056',
        'User-Agent: Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1'
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);        //Make it reurn data
    curl_setopt($curl, CURLOPT_URL, "http://myundian.rf.gd/public/user/");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($curl);
    $err = curl_error($curl);
    echo $err;
    echo ($result);
?>

