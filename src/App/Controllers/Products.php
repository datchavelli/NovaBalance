<?php 

declare(strict_types=1);

namespace App\Controllers;

use App\Models\Product;
use Framework\Controller;
use Framework\Exceptions\PageNotFoundException;
use Framework\Response;

class Products extends Controller
{

  public function __construct( private Product $model)
  {
  }

  private function getProduct(string $id): array 
  {
    $product = $this->model->find($id);

    if($product === false){

      throw new PageNotFoundException("Product not found.");

    }

    return $product;
  }

  public function index(): Response
  {

    $products = $this->model->findAll();

    return $this->view("products/index.mvc.php", [
      "products" => $products,
      "total" => $this->model->getTotal()
    ]);

  }

  public function show(string $id): Response
  {
    $product = $this->getProduct($id);

    return $this->view("products/show.mvc.php", [
      "product" => $product,
    ]);
  }

  public function edit(string $id): Response
  {
    
    $product = $this->getProduct($id);

    return $this->view("products/edit.mvc.php", [
      "product" => $product,
    ]);
  }

  public function showPage(string $title, string $id, string $page)
  {
      echo $title, " ", $id, " ", $page;
  }

  public function new(): Response
  {
      return $this->view("products/new.mvc.php");
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

  public function update(string $id): Response
  {
    $product = $this->getProduct($id);

    $product["name"] = $this->request->post["name"];
    $product["description"] = empty($this->request->post['description']) ? null : $this->request->post['description'];

    if ($this->model->update($id, $product)) {

      return $this->redirect("/NovaBalance/products/{$id}/show");

    } else {
  
      return $this->view("products/edit.mvc.php", [
        "errors" => $this->model->getErrors(),
        "product" => $product
      ]);

    }

  }

  public function delete(string $id): Response
  {
    $product = $this->getProduct($id);

    if ($_SERVER["REQUEST_METHOD"] === "POST") {

      $this->model->delete($id);

      return $this->redirect("/NovaBalance/products/index");
    }

    return $this->view("products/delete.mvc.php", [
      "product" => $product
    ]);

  }

  public function destroy(string $id): Response
  {
    $product = $this->getProduct($id);

    $this->model->delete($id);

    return $this->redirect("/NovaBalance/products/index");

  }

  public function responseCodeExample(): Response
  {
    $this->response->setStatusCode(451);

    $this->response->setBody("Unavailable for legal reasons");

    return $this->response;
  }

}
