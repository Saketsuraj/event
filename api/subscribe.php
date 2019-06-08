<?php
    include "connection.php";

    $name = $_POST['full_name'];
    $email = $_POST['email'];

    $query = "insert into subscribed(full_name, email) values ('$name','$email')";
    $runquery = mysqli_query($conn, $query);

    $mail_html = '
        <html>
            <head>
                <title></title>
            </head>
            <body>
                '.$name.' has subscibed successfully, email id is '.$email.'
            </body>
        </html>

    ';

    if ($runquery) {
        $arr = array('status' => true, 'message' => 'Thanks for subscribing, you will be notified for upcoming events');
        echo json_encode($arr);
        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n";
        $headers .= "From: noreply@ranchiblog.in\r\n";
        $mail = mail("saket.suraj57@gmail.com","Subscription - ".$name,$mail_html, $headers);
        
    } else {
        $arr = array('status' => false, 'message' => 'Error occured while subscribing');
        echo json_encode($arr);
    }

?>