<h1>Exercice 2</h1>

<p>Vous êtes chargé(e) de créer un projet orienté objet permettant de gérer des livres et leurs auteurs respectifs.Les livres sont caractérisés par un titre, un nombre de pages, une année de parution, un prix et un auteur. Un auteur comporte un nom et un prénom.Une méthode toString() sera appréciée dans chacune de vos classes.Vous implémenterez une méthode afficherBibliographie() qui permettra d'afficher la bibliographie complète d'un auteur. </p>

<h2>Résultat</h2>

<?php


spl_autoload_register(function ($class_name) {
    require_once $class_name.'.php';
});

$SK=new Auteur("Stephen", "King");
$L1=new Livre($SK, "Ca", "1986", "1138", "20");
$L2=new Livre ($SK, "Simetierre", "1983", "374", "15");
$L3=new Livre ($SK, "Le Fléau", "1978", "823", "14");
$L4=new Livre ($SK, "Shining", "1977", "447", "16");
$SK->afficherBibliographie();

?>