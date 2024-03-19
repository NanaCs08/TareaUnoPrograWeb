<?php 
    class PublisherModel {
        private $publisher;
    
        public function __construct() {
            $this->publisher = [
                ['id'=>1, 'publisher' => 'John Wiley & Sons', 'country' => 'United States', 'founded' => '1807', 'genere' => 'Academic', 'books__book_id' => '1', 'books__title' => 'Operating System Concepts'],
                ['id'=>2, 'publisher' => 'John Wiley & Sons', 'country' => 'United States', 'founded' => '1807', 'genere' => 'Academic', 'books__book_id' => '2', 'books__title' => 'Database System Concepts'],
                ['id'=>3, 'publisher' => 'Pearson Education', 'country' => 'United Kingdom', 'founded' => '1844', 'genere' => 'Education', 'books__book_id' => '3', 'books__title' => 'Computer Networks'],
                ['id'=>4, 'publisher' => 'Pearson Education', 'country' => 'United Kingdom', 'founded' => '1844', 'genere' => 'Education', 'books__book_id' => '4', 'books__title' => 'Modern Operating Systems']
            ];
        }
    
        // Add other methods here
        public function getPublisher() {
            return $this->publisher;
        }
    
    
    }
?>