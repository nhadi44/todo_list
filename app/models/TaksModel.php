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
        $this->db->query("SELECT * FROM " . $this->table . " WHERE activity_id = :id");
        $this->db->bind('id', $id);
        return $this->db->resultSet();
    }

    public function getActivityName($id)
    {
        $this->db->query("SELECT name FROM tb_activity WHERE id = :id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}
