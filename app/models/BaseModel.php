<?php
namespace App\Models;

use PDO;
use Core\Database;

class Contact
{
    protected $db;
    protected string $query;
    protected array $params = [];
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

    public static function where($column, $value)
    {
        $instance = new static();
        $instance->query = "SELECT * FROM {$instance->tableName} WHERE {$column} = :value";
        $instance->params = [':value' => $value];

        return $instance;
    }

    public function get()
    {
        $stmt = $this->db->prepare($this->query);

        foreach ($this->params as $key => $value) {
            $stmt->bindValue($key, $value);
        }

        $stmt->execute();

        return $stmt->fetchObject(static::class);
    }

    public function first()
    {
        $stmt = $this->db->prepare($this->query);

        foreach ($this->params as $key => $value) {
            $stmt->bindValue($key, $value);
        }

        $stmt->execute();

        return $stmt->fetchObject(static::class);
    }


}


