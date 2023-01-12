<?php

class Blog_model
{
    private $table = 'blog';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBlog()
    {
        $this->db->prepare('SELECT * FROM blog');
        return $this->db->fetchAll();
    }

    public function getBlogById($id)
    {
        $this->db->prepare("SELECT * FROM {$this->table} WHERE id=:id");
        $this->db->bindValue('id', $id);
        return $this->db->fetch(); 
    }
}