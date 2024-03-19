<?php 
    class BooksModel {
        private $books;
    
        public function __construct() {
            $this->books = [
                ['id'=>1, 'title' => 'Operating System Concepts', 'edition' => '9th', 'copyrigh' => '2012', 'language' => 'ENGLISH', 'pages' => '976', 'author' => 'Abraham Silberschatz', 'author_id' => 1, 'publisher' => 'John Wiley & Sons', 'publisher_id' => 1],
                ['id'=>2, 'title' => 'Database System Concepts', 'edition' => '6th', 'copyrigh' => '2010', 'language' => 'ENGLISH', 'pages' => '1376', 'author' => 'Abraham Silberschatz', 'author_id' => 1, 'publisher' => 'John Wiley & Sons', 'publisher_id' => 1],
                ['id'=>3, 'title' => 'Computer Networks', 'edition' => '5th', 'copyrigh' => '2010', 'language' => 'ENGLISH', 'pages' => '960', 'author' => 'Andrew S. Tanenbaum', 'author_id' => 2, 'publisher' => 'Pearson Education', 'publisher_id' => 2],
                ['id'=>4, 'title' => 'Modern Operating Systems', 'edition' => '4th', 'copyrigh' => '2014', 'language' => 'ENGLISH', 'pages' => '1136', 'author' => 'Andrew S. Tanenbaum', 'author_id' => 2, 'publisher' => 'Pearson Education', 'publisher_id' => 2]
            ];
        }
    
        // Add other methods here
        public function getBooks() {
            return $this->books;
        }
    
    
    }
?>