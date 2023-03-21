<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Service extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('service_model');
        }
        public function index($error = '') {	
            $data = array(
                'error' => urldecode($error)
            );
            $table = $this->service_model->select();
            $data = array('table'=>$table);
            $this->load->view('service_form',$data);
        }
        public function recherche() {	
            $num = $this->input->post('num_compte') ;
            $table = $this->service_model->recherche($num);
            $data = array('table'=>$table);
            $this->load->view('service_form',$data);
        }
        public function supprimer(){
            $id= $_GET['numerocompte'];
            $supr = $this->service_model->delete($id);
            redirect('Service/index');
        }
        public function modif(){
            $id= $_GET['numerocompte'];
            $comptes = $this->service_model->getComptebyNum($id);
            echo $comptes['numerocompte'];
            $data = array('comptes'=>$comptes);
            $this->load->view('modif_form',$data);
        }
        public function modification(){
            if(isset($_POST['numerocompte']) && isset($_POST['nomcompte'])){
                $numc= $_POST['numerocompte'];
                $nomc = $_POST['nomcompte'];
                $this->service_model->update( $numc, $nomc);
                redirect('Service/index');
            }
        }
        public function addcompte(){
            $this->load->view('addcompte_form');
        }
        public function add(){
            $numc= $_POST['num_compte'];
            $nomc = $_POST['nom_compte'];
            $this->service_model->add($numc,$nomc);
            redirect('Service/index');

        }

        public function infoEntreprise(){
            // $id = $_SESSION['id'];
            $id = 1;
            $info = $this->service_model->info($id);
            $devise = $this->service_model->exercice($info[0]['identreprise']);
            $data = array('info'=>$info,'devise'=>$devise);
            $this->load->view('info',$data);
        }

        public function exercice(){
            $this->load->view('exercice/exercice');
        }
        public function journal(){
            $this->load->view('exercice/journal');
        }
        // fiche de modification
        public function modifInfo(){
            $this->load->view('Fiche');
        }
// Mbola tsy ireto ann AZAFADY
        public function changeInfo(){
            $nom_societe = $_POST['nom_societe'];
            $logo = $_FILES['logo'];
            $nom_dirigeant = $_POST['nom_dirigeant'];
            $adresse = $_POST['adresse'];
            $siege = $_POST['siege'];
            $telephone = $_POST['telephone'];
            $date_creation = $_POST['date_creation'];
            $date_exercice = $_POST['date_exercice'];
            $num_fiscale = $_POST['num_fiscale'];
            $num_statique = $_POST['num_statistique'];
            $num_registre = $_POST['num_registre'];
            $statu = $_POST['status'];
            $devise_ariary = $_POST['devise_ariary'];
            $devise_equivalence = $_POST['devise_equivalence'];
            $this->service_model->insertionfile($logo);
            $this->service_model->update($logo);
            
        }
    }
?>
