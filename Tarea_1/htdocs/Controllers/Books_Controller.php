<?php 
    require('Models/Books_Model.php');
    require 'mustache.php-main/src/Mustache/Autoloader.php';
    Mustache_Autoloader::register();
    
    class Books_Controller{
        public function index() {
            $bookModel = new BooksModel();
            $books = $bookModel->getBooks();
    
            // Crea una nueva instancia de Mustache
            $mustache = new Mustache_Engine;
    
            // Carga la plantilla de la vista
            $template = file_get_contents('Views/Books_View.php');
    
            // Renderiza la plantilla con los datos de los libros
            echo $mustache->render($template, ['Books' => $books]);
        }
    }
?>