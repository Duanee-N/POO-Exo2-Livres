<?php

class Livre 
{
    private Auteur $_auteur;
    private $_titre;
    private $_annee;
    private $_nbPages;
    private $_prix;

    public function __construct($_auteur, $_titre, $_annee, $_nbPages, $_prix)
    {
        $this->_auteur = $_auteur;
        $this->_titre = $_titre;
        $this->_annee = $_annee;
        $this->_nbPages = $_nbPages;
        $this->_prix = $_prix;
        $this->_auteur->ajouterLivre($this);
    }

    public function __toString()
    {
        return $this->_titre." (".$this->_annee.") : ".$this->_nbPages." pages / ".$this->_prix." €";
    }
   
}

?>