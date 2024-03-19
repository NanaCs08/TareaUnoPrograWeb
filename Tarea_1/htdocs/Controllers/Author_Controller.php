<?php 
    require('Models/Author_Model.php');
    require 'mustache.php-main/src/Mustache/Autoloader.php';
    Mustache_Autoloader::register();
    
    class Author_Controller{
        public function index() {
            $authorModel = new AuthorModel();
            $author = $authorModel->getAuthor();
    
            // Crea una nueva instancia de Mustache
            $mustache = new Mustache_Engine;
    
            // Carga la plantilla de la vista
            $template = file_get_contents('Views/Author_View.php');
    
            // Renderiza la plantilla con los datos de los libros
            echo $mustache->render($template, ['Author' => $author]);
        }
    }
?>