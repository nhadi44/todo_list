<?php

class TaksModel
{
    private $table = 'tb_taks';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllTaks($id)
    {
        $this->db->query("SELECT * FROM " . $this->table . " WHERE activity_id = :id ORDER BY created_at DESC");
        $this->db->bind('id', $id);
        return $this->db->resultSet();
    }

    public function getActivity($data)
    {
        $this->db->query("SELECT id, name FROM tb_activity WHERE id = :id AND user_id = :user_id");
        $this->db->bind('id', $data['id']);
        $this->db->bind('user_id', $data['user_id']);
        return $this->db->single();
    }

    public function getTaksId($data)
    {
        $this->db->query("SELECT * FROM " . $this->table . " WHERE id = :id");
        $this->db->bind('id', $data['id']);
        return $this->db->single();
    }

    public function createTaks($data)
    {
        $query = "INSERT INTO " . $this->table . " (name, description, priority, is_finished, activity_id, created_at, updated_at) VALUES (:name, :description, :priority, :is_finished, :activity_id, :created_at, :updated_at)";

        $this->db->query($query);
        $this->db->bind('name', $data['name']);
        $this->db->bind('description', $data['description']);
        $this->db->bind('priority', $data['priority']);
        $this->db->bind('is_finished', $data['is_finished']);
        $this->db->bind('activity_id', $data['activity_id']);
        $this->db->bind('created_at', $data['created_at']);
        $this->db->bind('updated_at', $data['updated_at']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateTaks($data)
    {
        $query = "UPDATE " . $this->table . " SET name = :name, description = :description, priority = :priority, is_finished = :is_finished, updated_at = :updated_at WHERE id = :id and activity_id = :activity_id";

        $this->db->query($query);
        $this->db->bind('name', $data['name']);
        $this->db->bind('description', $data['description']);
        $this->db->bind('priority', $data['priority']);
        $this->db->bind('is_finished', $data['is_finished']);
        $this->db->bind('updated_at', $data['updated_at']);
        $this->db->bind('id', $data['id']);
        $this->db->bind('activity_id', $data['activity_id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteTaks($data)
    {
        $query = "DELETE FROM " . $this->table . " WHERE id = :id and activity_id = :activity_id";

        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('activity_id', $data['activity_id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function finishTask($data)
    {
        $query = "UPDATE " . $this->table . " SET is_finished = :is_finished, updated_at = :updated_at WHERE id = :id and activity_id = :activity_id";

        $this->db->query($query);
        $this->db->bind('is_finished', $data['is_finished']);
        $this->db->bind('updated_at', $data['updated_at']);
        $this->db->bind('id', $data['id']);
        $this->db->bind('activity_id', $data['activity_id']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
