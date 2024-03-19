<?php 
    class AuthorModel {
        private $author;
    
        public function __construct() {
            $this->author = [
                ['id'=>1, 'author' => 'Abraham Silberschatz', 'nationality' => 'Israelis / American', 'birth_year' => '1952', 'fields' => 'Database Systems, Operating Systems', 'books__book_id' => '1', 'books__title' => 'Operating System Concepts'],
                ['id'=>2, 'author' => 'Abraham Silberschatz', 'nationality' => 'Israelis / American', 'birth_year' => '1952', 'fields' => 'Database Systems, Operating Systems', 'books__book_id' => '2', 'books__title' => 'Database System Concepts'],
                ['id'=>3, 'author' => 'Andrew S. Tanenbaum', 'nationality' => 'Dutch / American', 'birth_year' => '1944', 'fields' => 'Distributed computing, Operating Systems	', 'books__book_id' => '3', 'books__title' => 'Computer Networks'],
                ['id'=>4, 'author' => 'Andrew S. Tanenbaum', 'nationality' => 'Dutch / American', 'birth_year' => '1944', 'fields' => 'Distributed computing, Operating Systems	', 'books__book_id' => '4', 'books__title' => 'Modern Operating Systems']
            ];
        }
    
        // Add other methods here
        public function getAuthor() {
            return $this->author;
        }
    
    
    }
?>