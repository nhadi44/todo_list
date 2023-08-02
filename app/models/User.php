<?php

class User
{
    private $table = 'tb_user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUser($email)
    {
        $this->db->query("SELECT id,email, password FROM " . $this->table . " WHERE email = :email");
        $this->db->bind('email', $email);
        return $this->db->single();
    }

    public function checkEmail($email)
    {
        $this->db->query("SELECT email FROM " . $this->table . " WHERE email = :email");
        $this->db->bind('email', $email);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function store($data)
    {
        $query = "INSERT INTO " . $this->table . " (email, password, created_at, updated_at) VALUES (:email, :password, :created_at, :updated_at)";

        $this->db->query($query);
        $this->db->bind('email', $data['email']);
        $this->db->bind('password', password_hash($data['password'], PASSWORD_DEFAULT));
        $this->db->bind('created_at', $data['created_at']);
        $this->db->bind('updated_at', $data['updated_at']);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
