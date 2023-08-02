<?php

class Activity
{
    private $table = 'tb_activity';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getActivityId($id)
    {
        $this->db->query("SELECT * FROM " . $this->table . " WHERE id=:id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function getActivityByUser($id)
    {
        $this->db->query("SELECT id, name, description, user_id, created_at, update_at FROM " . $this->table . " WHERE user_id=:id ORDER BY created_at DESC");
        $this->db->bind('id', $id);
        return $this->db->resultSet();
    }

    public function createActivityUser($data)
    {
        $query = "INSERT INTO " . $this->table . " (name, description, user_id, created_at, update_at) VALUES (:name, :description, :user_id, :created_at, :updated_at)";

        $this->db->query($query);
        $this->db->bind('name', $data['name']);
        $this->db->bind('description', $data['description']);
        $this->db->bind('user_id', $data['user_id']);
        $this->db->bind('created_at', $data['created_at']);
        $this->db->bind('updated_at', $data['updated_at']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateActivityUser($data)
    {
        $query = "UPDATE " . $this->table . " SET name=:name, description=:description, user_id=:user_id, update_at=:update_at WHERE id=:id AND user_id=:user_id";

        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('name', $data['name']);
        $this->db->bind('description', $data['description']);
        $this->db->bind('user_id', $data['user_id']);
        $this->db->bind('update_at', $data['updated_at']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteActivityUser($data)
    {
        $query = "DELETE FROM " . $this->table . " WHERE id=:id AND user_id=:user_id";

        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('user_id', $data['user_id']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
