<?php

class RichPeople {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }


        public function getPeople() {
            $this->db->query("SELECT * FROM RichestPeople");

            $result = $this->db->resultSet();

            return $result;
        }
}