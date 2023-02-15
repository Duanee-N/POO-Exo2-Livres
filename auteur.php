<?php

class Auteur
{
    private $_prenom;
    private $_nom;
    private array $_livres;

    public function __construct($_prenom, $_nom)
    {
        $this->_prenom = $_prenom;
        $this->_nom = $_nom;
        $this->_livres = [];
    }

    public function __toString()
    {
        return "<b> Livres de $this->_prenom $this->_nom </b> <br>";
    }

    public function ajouterLivre(Livre $_livre) 
    { 
        $this->_livres[] = $_livre; 
    }
    public function afficherBibliographie()
    {
        echo $this;
        foreach($this->_livres as $_livre){
            echo "$_livre <br>";
        }
    }
   
}

?>