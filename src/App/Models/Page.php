<?php

declare(strict_types=1);

namespace App\Models;

use Framework\Model;
use PDO;

class Page extends Model
{
    protected $table = "pages";
    protected $additional_table = "page_sections";
    protected $join_on = "on p.id = ps.page_id";

    public function getPageContent(string $slug): mixed
    {
        $sql = "SELECT *, ps.id as section_id FROM {$this->table} p LEFT JOIN {$this->additional_table} ps {$this->join_on} WHERE slug = :slug ORDER BY position ASC; ";
        $conn = $this->database->getConnection();
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(":slug", $slug);
        if ($stmt->execute()) {
            $page = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if (!empty($page)) {
                return $page;
            } else {
                return [];
            }
        } else {
            return [];
        }
    }
    public function getPages(): array
    {
        $sql = "SELECT * FROM {$this->table};";
        $conn = $this->database->getConnection();
        $stmt = $conn->prepare($sql);
        if ($stmt->execute()) {
            $pages = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if (!empty($pages)) {
                return $pages;
            } else {
                return [];
            }
        } else {
            return [];
        }
    }
    public function getPageSections($page_id): array
    {
        $sql = "SELECT * FROM {$this->additional_table} WHERE page_id = $page_id ORDER BY created_at DESC;";
        $conn = $this->database->getConnection();
        $stmt = $conn->prepare($sql);
        if ($stmt->execute()) {
            $sections = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if (!empty($sections)) {
                return $sections;
            } else {
                return [];
            }
        } else {
            return [];
        }
    }
    public function getPage($page_id): array
    {
        $sql = "SELECT * FROM pages where id = $page_id  LIMIT 1;";
        $conn = $this->database->getConnection();
        $stmt = $conn->prepare($sql);
        if ($stmt->execute()) {
            $page = $stmt->fetch(PDO::FETCH_ASSOC);
            if (!empty($page)) {
                return $page;
            } else {
                return [];
            }
        } else {
            return [];
        }
    }
}
