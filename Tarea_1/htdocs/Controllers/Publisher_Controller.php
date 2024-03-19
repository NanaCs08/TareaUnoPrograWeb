<?php 
    require('Models/Publisher_Model.php');
    require 'mustache.php-main/src/Mustache/Autoloader.php';
    Mustache_Autoloader::register();
    
    class Publisher_Controller{
        public function index() {
            $publisherModel = new PublisherModel();
            $publisher = $publisherModel->getPublisher();
    
            // Crea una nueva instancia de Mustache
            $mustache = new Mustache_Engine;
    
            // Carga la plantilla de la vista
            $template = file_get_contents('Views/Publisher_View.php');
    
            // Renderiza la plantilla con los datos de los libros
            echo $mustache->render($template, ['Publisher' => $publisher]);
        }
    }
?>