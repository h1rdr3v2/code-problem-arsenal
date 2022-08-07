<?php
        $curl = curl_init();

curl_setopt($curl, CURLOPT_URL, "https://myundian.rf.gd/public/user/");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($curl);

echo ($result);
?>