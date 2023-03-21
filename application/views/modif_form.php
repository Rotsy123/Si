<?php 
  $this->load->view('templates/header');
  $this->load->view('templates/nav');
?>
<body>
    <center>
    <form method="POST" action="<?php echo base_url("Service/modification")?>">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Modification du compte</h4>
                  <p class="card-description">
                    Add classes like <code>.form-control-lg</code> and <code>.form-control-sm</code>.
                  </p>
                  <input type="hidden" value=<?php echo $comptes['numerocompte']?>>
                  <div class="form-group">
                    <label>Numero de Compte</label>
                    <input type="text" class="form-control form-control-lg" placeholder="Username" aria-label="Username" name="numerocompte" value = "<?php echo $comptes['numerocompte']?>">
                  </div>
                  <div class="form-group">
                    <label>Nom de Compte</label>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username"  name="nomcompte" value = "<?php echo $comptes['nomcompte']?>">
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Enregistrer les modifications" class="btn btn-success btn-rounded btn-fw" />  
                  </div>
                </div>
            </div>
        </div>
    </form>
    </center>
</body>
<?php  
  $this->load->view('templates/footer') ;
?>