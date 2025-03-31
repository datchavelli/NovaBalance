<?php

declare(strict_types=1);

namespace App\Controllers;
use Framework\Controller;
use Framework\Response;
use App\Models\Contact;
use App\Services\MailchimpService;

class Admin extends Controller
{
    public function index(): Response
    {  
        if(!isset($_SESSION['user'])){
            return $this->view("admin/login.mvc.php");
        }else {
            return $this->view("admin/index.mvc.php");
        }
    }

    public function login(): Response
    {
        $data = [
            "email" => $this->request->post['user_email'] ?? '',
            "password" => $this->request->post['user_password'] ?? ''
        ];
    }
}