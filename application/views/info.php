<?php 
  $this->load->view('templates/header');
  $this->load->view('templates/nav');
?>
<body style="margin-top: 100px;">
    <div class="row">
        <div class = "col-md-8 grid-margin stretch-card">
            <div class= "card-body" style="background-color:lightskyblue">
                <h4 class="card-title">Les entites de votre Societe</h4>
                <img src="<?php echo site_url('assets/images/faces/'.$info[0]['logo']); ?>" alt="profile"/>
                <h1> <?php echo $info[0]['nomsociete'];?> </h1>
                <p> <?php echo $info[0]['statusentreprise'];?> </p>
            </div>
                <div class="card-body">
                  <h4 class="card-title">Dirigeant: <?php echo $info[0]['dirigeant'];?></h4>
                  <p class="card-description">
                    Adresse Phusique: <code>&lt;<?php echo $info[0]['adressephysique'];?>&gt;</code>
                  </p>
                  <p class="card-description">
                    Adresse d'exploitation: <code>&lt;<?php echo $info[0]['adresseexploitation'];?>&gt;</code>
                  </p>
                </div>
                <div class="col-md-4 grid-margin grid-margin-md-0 stretch-card">
                    <div class="card-body">
                        <h4 class="card-title">Identification de l'Entreprise</h4>
                        <p class="card-description">
                            Devise de la tenue de compte  <i class="ti-stats-up text-success"></i><code> <h3> <?php echo $info[0]['tenuecompte'];?> </h3></code>                     
                        </p>
                        <ul class="list-star">
                            <li><cite title="Source Title"> Numero d'identification fiscale: </cite><?php echo $info[0]['identificationfiscal'];?></li>
                            <li><cite title="Source Title"> Numero de Statique: </cite><?php echo $info[0]['numstatistique'];?></li>
                            <li><cite title="Source Title"> Numero de registre: </cite> <?php echo $info[0]['numregistre'];?></li>
                        </ul>
                    </div>
              </div>
            </div>
                <div class="card-body">
                  <blockquote class="blockquote blockquote-primary">
                    <p>Les exercices existants</p>
                    <?php foreach ( $devise as $row) { ?>
                        <footer class="blockquote-footer"><?php echo $row['debut']; ?> <cite title="Source Title"> jusqu'au </cite><?php echo $row['fin']; ?> </footer>
                    <?php } ?>
                </blockquote>
                <a href="<?php echo site_url('Service/exercice') ;?>" ><button type="button" class="btn btn-outline-primary btn-fw"> Ajouter un nouveau exercice </button></a>
                </div>
        </div>
    
</body>
c