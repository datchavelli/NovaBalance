<?php
declare(strict_types=1);

namespace App\Models;

use Framework\Model;
use PDO;

class Page extends Model
{
    protected $table = "pages";

    public function getPageContent(string $slug): mixed
    {
        $sql = "SELECT content FROM {$this->table} WHERE slug = :slug ; ";
        $conn = $this->database->getConnection();
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(":slug", $slug);

        if ($stmt->execute()) {
            $page = $stmt->fetch(PDO::FETCH_ASSOC);
            if (!empty($page)) {
                return $page["content"];
            } else {
                return [];
            }
        } else {
            return [];
        }
    }
}
