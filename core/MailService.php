<?php

namespace App\Core;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


class MailService
{
    private $mailer;

    public function __construct()
    {
      
        $this->mailer = new PHPMailer(true);
        $this->mailer->isSMTP();
        $this->mailer->Host       = \Configruation::MAIL_HOST;
        $this->mailer->SMTPAuth   = true;
        $this->mailer->Username   = \Configruation::MAIL_USERNAME;
        $this->mailer->Password   = \Configruation::MAIL_PASSWORD;
        $this->mailer->SMTPSecure = \Configruation::MAIL_PROTOCOL;
        $this->mailer->Port       = \Configruation::MAIL_PORT;
        $this->mailer->setFrom(\Configruation::MAIL_USERNAME, 'DoctorLab Notifiaction');

        $this->mailer->isHTML(true);
    }

    public function sendMail(string $to, string $subject, string $body): bool
    {
        try {
            $this->mailer->clearAddresses();
            $this->mailer->addAddress($to);
            $this->mailer->Subject = $subject;
            $this->mailer->Body    = $body;
            $this->mailer->send();
            return true;
        } catch (Exception $e) {
    echo 'Mailer Error: ' . $this->mailer->ErrorInfo . "<br>";
    echo 'Exception Message: ' . $e->getMessage();
    return false;
}


    }
}