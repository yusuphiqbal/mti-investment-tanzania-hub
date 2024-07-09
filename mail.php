<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = strip_tags(trim($_POST["name"]));
    $mobile = strip_tags(trim($_POST["mobile"]));
    $package = strip_tags(trim($_POST["package"]));
    $from = strip_tags(trim($_POST["from"]));
    $to = strip_tags(trim($_POST["to"]));

    $from = new DateTime($from);
    $from = $from->format('l, F j, Y \a\t g:i A');

    $to = new DateTime($to);
    $to = $to->format('l, F j, Y \a\t g:i A');

    if (empty($name) || empty($message)) {
        header("Location: /");
    }

    $recipient = "noah.mwakanyamale@mti-investment.com";
    $subject = "New $package Booking";

    $headers = "From: MTI Tanzania Investment Hub <info@mti-tanzaniahub.com>";

    $message = "
        Dear Operator,
        A new booking request has been made for the $package package. Here are the details:
        Name: $name
        Mobile: $mobile
        From: $from
        To: $to
        Please contact the user to confirm the booking.
        Best regards,
        MTI Investment Tanzania Hub
    ";

    if (mail($recipient, $subject, $message, $headers)) {
        header("Location: /");
    } else {
        header("Location: /");
    }
}

header("Location: /");
exit;
