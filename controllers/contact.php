<?php
$opt = array(
    'subject' => FILTER_SANITIZE_STRING,
    'msg' => FILTER_SANITIZE_STRING,
    'email' => FILTER_SANITIZE_EMAIL,
);
$post = filter_input_array(INPUT_POST, $opt);

if (!is_null($post)){
    //ok
}

include 'views/contact.php';