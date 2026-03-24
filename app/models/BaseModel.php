<?php

namespace App\Models;

use PDO;
use Core\Database;

class BaseModel
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
        return $this->attributes[$name] ?? null;
    }

    public static function all(bool $withTrashed = false)
    {
        $instance = new static();

        if ($withTrashed) {
            $stmt = $instance->db->query("SELECT * FROM {$instance->tableName}");
        } else {
            $stmt = $instance->db->query("SELECT * FROM {$instance->tableName} WHERE deleted_at IS NULL");
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

    public function save()
    {
        if (empty($this->attributes)) {
            throw new \Exception("No data to save.");
        }

        if (!empty($this->attributes['id'])) {
            $setClauses = [];

            foreach ($this->attributes as $key => $value) {
                if ($key !== 'id') {
                    $setClauses[] = "{$key} = :{$key}";
                }
            }

            $setString = implode(',', $setClauses);
            $this->query = "UPDATE {$this->tableName} SET {$setString} WHERE id = :id";

              $stmt = $this->db->prepare($this->query);

            foreach ($this->attributes as $key => $value) {
                $stmt->bindValue(":$key", $value);
            }

            $success = $stmt->execute();

        } else {
            $columns = implode(", ", array_keys($this->attributes));
            $placeholders = ":" . implode(", :", array_keys($this->attributes));
            $this->query = "INSERT INTO {$this->tableName} ($columns) VALUES ($placeholders)";

            $stmt = $this->db->prepare($this->query);

            foreach ($this->attributes as $key => $value) {
                $stmt->bindValue(":$key", $value);
            }

            $success = $stmt->execute();
        }




        return $success;
    }
}


