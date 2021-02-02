<?php
$response           = array();
$response['status'] = 'warning';

// Contact form
if ( ( isset( $_POST['cf-1-name-surename'] ) && $_POST['cf-1-name-surename'] != "" ) && ( isset( $_POST['cf-1-services'] ) && $_POST['cf-1-services'] != "" ) && ( isset( $_POST['cf-1-phone'] ) && $_POST['cf-1-phone'] != "" ) && isset( $_POST['cf-1-date'] ) && isset( $_POST['cf-1-message'] ) ) {
    $to      = 'your@email.com'; // Your email
    $subject = 'Contact form';   // E-mail subject
    $message = '
            <html>
                <head>
                    <title>' . $subject . '</title>
                </head>
                <body>
                    <p>Name and Surename: ' . $_POST['cf-1-name-surename'] . '</p>
                    <p>Service: ' . $_POST['cf-1-services'] . '</p>
                    <p>Phone no.: ' . $_POST['cf-1-name-phone'] . '</p>
                    <p>Appointment date: ' . $_POST['cf-1-date'] . '</p>
                    <p>Message: ' . $_POST['cf-1-message'] . '</p>
                </body>
            </html>';
    $headers = "Content-type: text/html; charset=utf-8 \r\n"; // Charset
    $headers .= "From: Chop <your@email.com>\r\n";          // Your name and email
    
    if ( mail( $to, $subject, $message, $headers ) ) {
        $response['status'] = 'success';
    } else {
        $response['status'] = 'error';
    }
}

// Newsletter form
else if ( isset( $_POST['cf-2-email'] ) && isset( $_POST['cf-2-email'] ) != "" ) {
    $to      = 'your@email.com'; // Your email
    $subject = 'Newsletter';     // E-mail subject
    $message = '
            <html>
                <head>
                    <title>' . $subject . '</title>
                </head>
                <body>
                    <p>Email: ' . $_POST['email'] . '</p>
                </body>
            </html>';
    $headers = "Content-type: text/html; charset=utf-8 \r\n"; // Charset
    $headers .= "From: Chop <your@email.com>\r\n";            // Your name and email
    
    if ( mail( $to, $subject, $message, $headers ) ) {
        $response['status'] = 'success';
    } else {
        $response['status'] = 'error';
    }
}

// Comment form
else if ( isset( $_POST['comment'] ) && isset( $_POST['comment-author'] ) && isset( $_POST['comment-email'] ) && isset( $_POST['comment-url'] ) ) {
    $to      = 'your@email.com'; // Your email
    $subject = 'Comment form';   // E-mail subject
    $message = '
            <html>
                <head>
                    <title>' . $subject . '</title>
                </head>
                <body>
                    <p>Comment: ' . $_POST['comment'] . '</p>
                    <p>Author: ' . $_POST['author'] . '</p>
                    <p>Email: ' . $_POST['email'] . '</p>
                    <p>Url: ' . $_POST['url'] . '</p>
                </body>
            </html>';
    $headers = "Content-type: text/html; charset=utf-8 \r\n"; // Charset
    $headers .= "From: Chop <your@email.com>\r\n";            // Your name and email
    
    if ( mail( $to, $subject, $message, $headers ) ) {
        $response['status'] = 'success';
    } else {
        $response['status'] = 'error';
    }
}

echo json_encode( $response );
?>