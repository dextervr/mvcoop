<?php
require "../app/models/RichPeople.php";

class RichestPeople extends Controller {
    private array $last_people = [];

    public function __construct()   
    {
        $this->db = new Database;
        $this->get_people();
    }

    private function get_people()
    {
        $this->db->query('SELECT * FROM RichestPeople');
        $this->db->execute();
        foreach($this->db->resultSet() as $people) {
            $people = (array) $people;
            array_push($this->last_people, new RichestPeople($people['Name'], $people['Networth'], $people['MyAge'], $people['Company']));
        }
    }

    public function index() {
        $data = [
            "title" => "Richest People",
            "people" => $this->last_people
        ];
        
        $this->view('people', $data);
    }

}