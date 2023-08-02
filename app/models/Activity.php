<?php

class Activity
{
    private $table = 'tb_activity';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllActivity()
    {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultSet();
    }

    public function getActivityId($id)
    {
        $this->db->query("SELECT * FROM " . $this->table . " WHERE id=:id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function getActivityByUser($id)
    {
        $this->db->query("SELECT id, name, description, user_id, created_at FROM " . $this->table . " WHERE user_id=:id");
        $this->db->bind('id', $id);
        return $this->db->resultSet();
    }
    
    // public function createActivityUser($data) {
    //     $query = 
    // }
}
