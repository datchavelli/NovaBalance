<?php 

declare(strict_types=1);

namespace App\Controllers;

use Framework\Controller;
use Framework\Response;
use App\Models\Contact;
use App\Services\MailchimpService;

class Home extends Controller
{
    public function __construct( private Contact $model)
    {
    }

    public function index(): Response
    {  
        return $this->view("home/index.mvc.php");
    }

    public function usluge():Response
    {
      return $this->view("usluge/index.mvc.php",[
        "h1Title" => "Usluge"
      ]);
    }
    
    public function contact(): Response
    {
        $data = [
            "name" => $this->request->post["cntc_name"] ?? '',
            "address" => $this->request->post['cntc_address'] ?? '',
            "phone" => $this->request->post['cntc_phone'] ?? '',
            "email" => $this->request->post['cntc_email'] ?? '',
            "pib" => $this->request->post['cntc_pib'] ?? ''
        ];

        if ($this->model->insert($data)) {

            // ✅ Send Email
            $mailer = new \App\Services\MailerService();
            $subject = "NovaBalance Website | New Contact Form Submission";
            $body = "
                <h3>New Contact Request</h3>
                <p><strong>Name:</strong> {$data['name']}</p>
                <p><strong>Email:</strong> {$data['email']}</p>
                <p><strong>Phone:</strong> {$data['phone']}</p>
                <p><strong>Address:</strong> {$data['address']}</p>
                <p><strong>PIB:</strong> {$data['pib']}</p>
            ";
            
            $emailSent = $mailer->send("dev@novabalance.rs", $subject, $body);

            // ✅ Response handling
            $responseData = ["success" => "Email Saved!"];
            if (!$emailSent) {
                error_log("Email sending failed.");
                $responseData["error"] = "Error Sending Mail!";
            }

            return new Response(json_encode($responseData), 200, ["Content-Type" => "application/json"]);
        } else {
            return new Response(
                json_encode(["errors" => $this->model->getErrors()]),
                400, // Bad Request
                ["Content-Type" => "application/json"]
            );
        }
    }


    public function subscribe(): Response
    {
        $data = [
            "email" => $this->request->post['email'],
        ];

        $mailchimp = new MailchimpService();
        $result = $mailchimp->addSubscriber($data);

        if ($result) {
            return $this->redirect("/NovaBalance/");
        }  else {
    
            return $this->view("home/index.mvc.php", [
              "errors" => $result['error']
            ]);
      
          }

    }
}