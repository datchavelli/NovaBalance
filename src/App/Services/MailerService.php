<?php

declare(strict_types=1);

namespace App\Services;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class MailerService
{
    private PHPMailer $mail;

    public function __construct()
    {
        $this->mail = new PHPMailer(true);

        // Enable SMTP debugging
        $this->mail->SMTPDebug = 3; // 3 = Full Debugging, 2 = Basic, 0 = Off
        $this->mail->Debugoutput = function ($str, $level) {
            error_log("SMTP Debug ($level): " . $str);
        };
        $this->mail->Timeout = 10; // Prevent infinite hang

        // SMTP Configuration
        $this->mail->isSMTP();
        $this->mail->Host = $_ENV["SMTP_HOST"];
        $this->mail->SMTPAuth = true;
        $this->mail->Username = $_ENV["SMTP_USER"];
        $this->mail->Password = $_ENV["SMTP_PASS"];
        $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $this->mail->Port = (int) $_ENV["SMTP_PORT"];

        // Sender
        $this->mail->setFrom($_ENV["SMTP_FROM"], $_ENV["SMTP_FROM_NAME"]);
    }

    public function send(string $to, string $subject, string $body): bool
    {
        try {

            $this->mail->CharSet = 'UTF-8';
            $this->mail->Encoding = 'base64';

            $this->mail->addAddress($to);
            $this->mail->Subject = '=?UTF-8?B?' . base64_encode($subject) . '?=';
            $this->mail->Body = $body;
            $this->mail->isHTML(true);

            return $this->mail->send();
        } catch (Exception $e) {
            error_log("Mail error: " . $this->mail->ErrorInfo);
            return false;
        }
    }

    public function sendNewsletterConfirmation(string $to): bool
    {
        try {
            $this->mail->CharSet = 'UTF-8';
            $this->mail->Encoding = 'base64';
            $this->mail->Subject = '=?UTF-8?B?' . base64_encode('Uspešna prijava na Newsletter') . '?=';
            $this->mail->addAddress($to);
            $this->mail->isHTML(true);
            $this->mail->Body = "
                   <h3>Uspešno ste se prijavili!</h3>
                   <p>Hvala što ste se pridružili našoj zajednici. Ostanite uz nas za najnovije vesti i ažuriranja.</p>
                   Kao mali znak zahvalnosti u prilogu Vam šaljemo poklon.
                   ";

            // ✅ Dodaj prilog (ako postoji)
            $attachmentPath =
                __DIR__ . "/../../../public/assets/files/Kako da Uspešno Vodite Računovodstvo _ Vodič za Mikro i Mala Preduzeća.pdf";
            if (file_exists($attachmentPath)) {
                $this->mail->addAttachment($attachmentPath, "Kako da Uspesno Vodite Racunovodstvo - Vodic za Mikro i Mala Preduzeca");
            }

            return $this->mail->send();
        } catch (Exception $e) {
            error_log("Mail error: " . $this->mail->ErrorInfo);
            return false;
        }
    }
}
