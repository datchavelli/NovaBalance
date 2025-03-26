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
            "name" => $this->request->post["cntc_name"],
            "address" => $this->request->post['cntc_address'],
            "phone" => $this->request->post['cntc_phone'],
            "email" => $this->request->post['cntc_email'],
            "pib" => $this->request->post['cntc_pib']
        ];

        $mailchimp = new MailchimpService();
        $result = $mailchimp->addSubscriber($data);

        if ($this->model->insert($data)) {
            return $this->redirect("/NovaBalance/");
        }  else {
    
            return $this->view("home/index.mvc.php", [
              "errors" => $this->model->getErrors(),
              "product" => $data
            ]);
      
          }

    }


    public function create(): Response
    {
      $data = [
        "name" => $this->request->post['name'],
        "description" => empty($this->request->post['description']) ? null : $this->request->post['description']
      ];
  
      if ($this->model->insert($data)) {
  
        return $this->redirect("/NovaBalance/products/{$this->model->getInsertID()}/show");
  
      } else {
    
        return $this->view("products/new.mvc.php", [
          "errors" => $this->model->getErrors(),
          "product" => $data
        ]);
  
      }
    }
}