<?php
declare(strict_types=1);

namespace App\Models;

use Framework\Model;
use PDO;

class User extends Model
{
    protected $table = "admin_users";

    protected function validate(array $data): void
    {
        if (empty($data["email"])) {
            $this->addError("email", "Email je obavezan");
        }
    }

    public function checkIfUserExists(string $email, string $password): mixed
    {
        $sql = "SELECT username, email, password_hash FROM {$this->table} WHERE email = :email ; ";
        $conn = $this->database->getConnection();
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(":email", $email);

        if ($stmt->execute()) {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            if (password_verify($password, $user["password_hash"])) {
                return $user;
            } else {
                return [];
            }
        } else {
            return [];
        }
    }
}
