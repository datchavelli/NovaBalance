<?php

declare(strict_types=1);

namespace App\Controllers;
use Framework\Controller;
use Framework\Response;
use App\Models\User;
use App\Services\MailchimpService;
use App\Models\Page;

class Admin extends Controller
{
    public function __construct(private User $model, private Page $pages) {}

    public function index(): Response
    {
        if (!isset($_SESSION["user"])) {
            return $this->view("admin/login.mvc.php");
        } else {
            return $this->view("admin/index.mvc.php", [
                "page" => "home",
            ]);
        }
    }

    public function pages(): Response
    {
      $pages = $this->pages;
      $pages = $pages->getPages();
      if (!isset($_SESSION["user"])) {
            return $this->view("admin/login.mvc.php");
        } else {
            return $this->view("admin/index.mvc.php", [
                "page" => "pages",
                "pages" => $pages,
            ]);
        }
    }

    public function login(): Response
    {
        $data = [
            "email" => $this->request->post["user-email"] ?? "",
            "password" => $this->request->post["user-password"] ?? "",
        ];
        $responseData = [];

        if ($data["email"] == "" || $data["password"] == "") {
            $responseData["error"] = "Molimo Vas da popunite sva polja!";
            return $this->view("admin/login.mvc.php", [
                "errors" => $responseData["error"],
            ]);
        }

        $user = $this->model->checkIfUserExists(
            $data["email"],
            $data["password"]
        );

        if (!empty($user)) {
            $_SESSION["user"] = $user;
            return $this->redirect("/NovaBalance/admin/index");
        } else {
            $responseData["error"] = "Korisnik nije pronadjen!";
            return $this->view("admin/login.mvc.php", [
                "errors" => $responseData["error"],
            ]);
        }
    }

    public function logout(): Response
    {
        unset($_SESSION["user"]);
        return $this->redirect("/NovaBalance/admin/index");
    }
}
