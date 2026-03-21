<?php
namespace App\Models;

use PDO;
use Core\Database;

class Contact
{
    protected $db;
    protected string $tableName = '';
    protected array $attributes = [];

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function __set($name, $value)
    {
        $this->attributes[$name] = $value;
    }

    public function __get($name)
    {
        $this->attributes[$name];
    }

    public static function all(bool $withTrashed = false)
    {
        $instance = new static();

        if ($withTrashed) {
            $stmt = $instance->db->query("SELECT * FROM {instance->tablename}");
        } else {
            $stmt = $instance->db->query("SELECT * FROM {instance->tablename} WHERE deleted_at IS NULL");
        }
        return $stmt->fetchAll(PDO::FETCH_CLASS, static::class);
    }
}


