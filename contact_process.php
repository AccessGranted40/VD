<?php

    $to = "rockybd1995@gmail.com";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $headers = "From: $from";
    $subject = "You have a message from your VeroDate.";

    $fields = array();
    $fields{"name"} = "name";
    $fields{"email"} = "email";
    $fields{"subject"} = "subject";
    $fields{"message"} = "message";

    $body = "Here is what was sent:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

    $send = mail($to, $subject, $body, $headers);

?>
