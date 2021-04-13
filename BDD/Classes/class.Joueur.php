<?php

class Joueur {
    public $id = 0;
    public $pseudo = null;
    public $nom = null;
    public $prenom = null;
    public $datenaissance = 0;
    public $adressemail = null;
    public $mdp = null;
    public $confirmationmdp = null;

    /**
     * Joueur constructor.
     * @param int $id
     * @param null $pseudo
     * @param null $nom
     * @param null $prenom
     * @param int $datenaissance
     * @param null $adressemail
     * @param null $mdp
     * @param null $confirmationmdp
     */
    public function __construct($id, $pseudo, $nom, $prenom, $datenaissance, $adressemail, $mdp, $confirmationmdp)
    {
        $this->id = $id;
        $this->pseudo = $pseudo;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->datenaissance = $datenaissance;
        $this->adressemail = $adressemail;
        $this->mdp = $mdp;
        $this->confirmationmdp = $confirmationmdp;
    }


    public function inscription(){
        echo '3';
        $pdo = new PDO('mysql:host=localhost;port=8889;dbname=quaeludo','root','root');
        echo '4';
        $req = $pdo->prepare("INSERT INTO JOUEUR(Pseudo, NOM, Prenom, DateNaissance, AdresseMail, Mdp, ConfirmationMdp) VALUES (:pseudo, :nom, :prenom, :datenaissance, :adressemail, :mdp, :confirmationmdp)");
        echo '5';
        $req->execute(
            array(
                ":pseudo" => $this->pseudo,
                ":nom" => $this->nom,
                ":prenom" => $this->prenom,
                ":datenaissance" => $this->datenaissance,
                "adressemail" => $this->adressemail,
                ":mdp" => $this->mdp,
                ":confirmationmdp" => $this->confirmationmdp
            )
        );
        echo '6';

    }
}