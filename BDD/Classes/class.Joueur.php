<?php

class Joueur {
    public $id = 0;
    public $nom = null;
    public $prenom = null;
    public $image = null;
    public $adressemail = null;
    public $datenaissance = 0;
    public $categoriepref = null;

    /**
     * Joueur constructor.
     * @param int $id
     * @param null $nom
     * @param null $prenom
     * @param null $image
     * @param null $adressemail
     * @param int $datenaissance
     * @param null $categoriepref
     */
    public function __construct($id, $nom, $prenom, $image, $adressemail, $datenaissance, $categoriepref)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->image = $image;
        $this->adressemail = $adressemail;
        $this->datenaissance = $datenaissance;
        $this->categoriepref = $categoriepref;
    }

        // Test push

}