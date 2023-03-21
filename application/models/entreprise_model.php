<?php
    if(!defined('BASEPATH')) exit('No direct script access allowed');
    class entreprise_model extends CI_Model {
        private $id; 
        private $nom;
        private $adresse_physique;
        private $adresse_exploitation;
        private $dirigeant;
        private $creation;
        private $identification;
        private $numstat;
        private $numregistre;
        private $status;
        private $idExercice;
      
        function insert(){
            $sql="update comptes set numerocompte='%s',
            nomcompte='%s' where
            numerocompte='%s'";
            $sql = sprintf($sql, $numerocompte,$nomcompte,$indice);
            $this->db->query($sql);
        }
        public function __construct($nom, $adresse_physique, $adresse_exploitation, $dirigeant, $creation, $identification, $numstat, $numregistre, $status, $idExercice) {
          $this->nom = $nom;
          $this->adresse_physique = $adresse_physique;
          $this->adresse_exploitation = $adresse_exploitation;
          $this->dirigeant = $dirigeant;
          $this->creation = $creation;
          $this->identification = $identification;
          $this->numstat = $numstat;
          $this->numregistre = $numregistre;
          $this->status = $status;
          $this->idExercice = $idExercice;
        }
      
        public function getId() {
          return $this->id;
        }
      
        public function getNom() {
          return $this->nom;
        }
      
        public function getAdressePhysique() {
          return $this->adresse_physique;
        }
      
        public function getAdresseExploitation() {
          return $this->adresse_exploitation;
        }
      
        public function getDirigeant() {
          return $this->dirigeant;
        }
      
        public function getCreation() {
          return $this->creation;
        }
      
        public function getIdentification() {
          return $this->identification;
        }
      
        public function getNumStat() {
          return $this->numstat;
        }
      
        public function getNumRegistre() {
          return $this->numregistre;
        }
      
        public function getStatus() {
          return $this->status;
        }
      
        public function getIdExercice() {
          return $this->idExercice;
        }
    }
?>