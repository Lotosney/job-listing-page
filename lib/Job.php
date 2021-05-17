<?php
class Job
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllJobs()
    {
        $this->db->query("SELECT jobs.*, categories.name AS cname 
						FROM jobs 
						INNER JOIN categories
						ON jobs.category_id = categories.id 
						ORDER BY post_date DESC 
						");

        $results = $this->db->resultSet();
        return $results;
    }
    public function getCategories()
    {
        $this->db->query("SELECT * FROM categories");
        // Assign Result Set
        $results = $this->db->resultSet();

        return $results;
    }
    public function getLocations()
    {
        $this->db->query("SELECT * FROM locations");
        // Assign Result Set
        $results = $this->db->resultSet();

        return $results;
    }


    public function getCategory($category_id)
    {
        $this->db->query("SELECT * FROM categories WHERE id = :category_id");

        $this->db->bind(':category_id', $category_id);

        // Assign Row
        $row = $this->db->single();

        return $row;
    }

    public function getLocation($location_id)
    {
        $this->db->query("SELECT * FROM categories WHERE id = :location_id");

        $this->db->bind(':location_id', $location_id);

        // Assign Row
        $row = $this->db->single();

        return $row;
    }
    public function getJobsByCategory($category)
    {
        $this->db->query("SELECT jobs.*, categories.name AS cname 
						FROM jobs 
						INNER JOIN categories
						ON jobs.category_id = categories.id 

						WHERE jobs.category_id = $category 
						ORDER BY post_date DESC 
						");
        // Assign Result Set
        $results = $this->db->resultSet();

        return $results;
    }
    public function getJobsByCategoryLocation($category, $location)
    {
        $this->db->query("SELECT jobs.*, categories.name AS cname AND locations.name AS lname 
						FROM jobs 
						INNER JOIN categories
						ON jobs.category_id = categories.id 
                       

						WHERE jobs.category_id = $category

                      AND  INNER JOIN locations
            ON jobs.location_id = locations.id 
            WHERE jobs.location_id = $location
						ORDER BY post_date DESC 
						");
        // Assign Result Set
        $results = $this->db->resultSet();

        return $results;
    }
    public function getJobsByLocation($location)
    {
        $this->db->query("SELECT jobs.*, locations.name AS lname 
            FROM jobs 
            INNER JOIN locations
            ON jobs.location_id = locations.id 
            WHERE jobs.location_id = $location
            ORDER BY post_date DESC 
            ");
        // Assign Result Set
        $results = $this->db->resultSet();

        return $results;
    }

    public function getJob($id)
    {
        $this->db->query("SELECT * FROM jobs WHERE id = :id");

        $this->db->bind(':id', $id);

        // Assign Row
        $row = $this->db->single();

        return $row;
    }
}
