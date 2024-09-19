<?php
   # variable 
   $_versionPhp = phpversion();
   $lang = ["fr","en","it"];
   $styleCss = "public/css/style.css";
   $_date = date('Y-d-m');
   $_dateyears = date('Y');
   $_years = new DateTime();
    $text = "Informations sur le film Le Joker";
   # classe ref
   class User{
       public $title = "Le Joker";
       static $info = "Informations sur le film Le Joker";
   }
   //public : on cree une instance pour l'utiliser 
   //static : on met directement le nom de la class suivit de :: et le nom de la variable static
   # instance
   $newtitle = new User();

?>