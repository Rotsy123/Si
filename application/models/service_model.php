<?php
    if(!defined('BASEPATH')) exit('No direct script access allowed');
    class service_model extends CI_Model {
        public function select (){
            $sql = "SELECT * FROM comptes ";
            $query = $this->db->query($sql);
            $comptes = array();
            foreach ($query->result_array() as $row) {
                $comptes[] = $row;
            }
            return $comptes;
        }
        public function recherche($num_compte){
            $sql ="SELECT * FROM comptes WHERE numerocompte % ".$num_compte." = 0 ";
            echo $num_compte;
            $query = $this->db->query($sql);
            $comptes = array();
            foreach ($query->result_array() as $row) {
                $comptes[] = $row;
            }
            return $comptes;
        }

        public function getComptebyNum($num){
            $Valiny = array();
            $sql = "SELECT * FROM comptes WHERE numerocompte = %s";
            $sql = sprintf($sql,$num );
            $query = $this->db->query($sql);
            foreach($query->result_array() as $row){
                $Valiny['numerocompte'] = $row['numerocompte'];
                $Valiny['nomcompte']=$row['nomcompte'];
            }
            return $Valiny;
        }

        public function update( $numerocompte, $nomcompte){
            $sql="update comptes set
            nomcompte='%s' where
            numerocompte=%s";
            $sql = sprintf($sql,$nomcompte, $numerocompte);
            $this->db->query($sql);
        }
        public function delete($indice){
            $sql="delete from comptes where numerocompte=%s";
            $sql = sprintf($sql,$indice);
            $this->db->query($sql);
            echo("Suppression reussie");
        }
        public function add($num,$nom){
            $sql="insert into comptes values (%s , '%s')";
            $sql = sprintf($sql,$num,$nom);
            $this->db->query($sql);
            echo("ADD");
        }
        
        public function info($id){
            $data = array();
            $sql = "select * from entreprise where idEntreprise = %s";
            $sql = sprintf($sql,$id);
            $query = $this->db->query($sql);
            foreach($query->result_array() as $row){
                $data [] = $row;
            }
            return $data;
        }

        public function exercice($id){
            $data = array();
            $sql = "select * from exercice where identreprise = %s";
            $sql = sprintf($sql,$id);
            $query = $this->db->query($sql);
            foreach($query->result_array() as $row){
                $data [] = $row;
            }
            return $data;
        }

        function insertfile($name){	
        if($name != null){
            $fichier = basename($name['name']);
            $extensions = array('.png', '.gif', '.jpg', '.jpeg','.csv');
            $extension = strrchr($name['name'], '.');
            $fichier = strtr($fichier,
                'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ',
                'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
            echo $fichier;
            if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
            {
                $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc';
            }
            /*if($taille>$taille_maxi)
            {
            $erreur = 'Le fichier est trop gros...';
            }*/
            if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
            {
                $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
                move_uploaded_file($name['tmp_name'], 'assets/images/'. $fichier);
                return './assets/images/' . $fichier;
            }
        }		
            return null;
	    }	

        function updateInfo($un,$duo,$trio,$quatre,$cinq,$six,$sept,$huit,$neuf,$dix,$onze,$douze,$treize,$quatorze){
            $req = "update set nomsociete='%s', adressephysique='%s',  adresseexploitation='%s',dirigeant='%s',  creation='%s', identificationfiscal = '%s', numstatistique='%s', numregistre='%s', statusentreprise='%s', tenuecompte= '%s', equivalence= %s,logo ='%s' from entreprise where idEntreprise = %s";
            $req = sprintf($req,$un,$duo,$trio,$quatre,$cinq,$six,$sept,$huit,$neuf,$dix,$onze,$douze,$treize,$quatorze);
            $this->db->query($req);
        }

        function getJournal($idE){
            $req = "select * from journal where idEntreprise = %s";
            $req = sprintf($req,$idE);
            $query = $this->db->query($req);
            foreach($query->result_array() as $row){
                $data [] = $row;
            }
            return $data;
        }

        function getBalance($idE){
            $req = "select * from balance where idEntreprise = %s";
            $req = sprintf($req,$idE);
            $query = $this->db->query($req);
            foreach($query->result_array() as $row){
                $data [] = $row;
            }
            return $data;
        }
    }
?>