<?php
require "../app/models/Fruit.php";

class Fruits extends Controller {
    private array $last_fruits = [];

    public function __construct()   
    {
        $this->db = new Database;
        $this->get_fruits();
    }

    private function get_fruits()
    {
        $this->db->query('SELECT * FROM fruits');
        $this->db->execute();
        foreach($this->db->resultSet() as $fruit) {
            $fruit = (array) $fruit;
            array_push($this->last_fruits, new Fruit($fruit['id'], $fruit['name'], $fruit['color'], $fruit['price']));
        }
    }

    public function index() {
        $data = [
            "title" => "Fruits",
            "fruits" => $this->last_fruits
        ];
        
        $this->view('fruits', $data);
    }

}