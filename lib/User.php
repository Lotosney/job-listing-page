<?php
class User
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function create($data){
        //Insert Query
        $this->db->query("INSERT INTO users ( company,  contact_email, password)
        VALUES (:company, :contact_email, :password)");
        // Bind Data
        $this->db->bind(':company', $data['company']);
        $this->db->bind(':contact_email', $data['contact_email']);
        $this->db->bind(':password', $data['password']);
        //Execute
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }
}