<?php
    $file = fopen("./data/employee/contactlist.json","r");
    $data = fread($file,filesize('./data/employee/contactlist.json'));
    fclose($file);
    $key = "Hotdog";
    $cipher_alog = "aes-256-gcm";
    $ivlen = openssl_cipher_iv_length($cipher_alog); //get the length of the algorithm key
    $iv = openssl_random_pseudo_bytes($ivlen); //use the length of the key to generate a pseudo random number with same length
    $enc_text = openssl_encrypt($data,$cipher_alog,$key,0,$iv,$tag);
    $ivdata = [$iv,$tag];
    $file = fopen("./data/employee/ivs.dat","w");
    fwrite($file,implode(",",$ivdata));
    fclose($file);
    $file = fopen("./data/employee/contactlist.json","w");
    fwrite($file,$enc_text);
    fclose($file);
    // echo "<h1>$enc_text</h1>";
    // $dec_text = openssl_decrypt($enc_text,$cipher_alog,$key,0,$iv,$tag);
    // echo "<h1>$tag</h1>";
    // echo "<h1>$dec_text</h1>";
?>