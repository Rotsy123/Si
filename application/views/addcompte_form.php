<?php 
  $this->load->view('templates/header');
  $this->load->view('templates/nav');
?>
<body>
    <center>
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Formulaire des comptes</h4>
                <p class="card-description">
                A simple suggestion engine
                </p>
                <form action="<?php echo site_url("Service/add")?>" method="post">
                <div class="form-group row">
                    
                    <div class="col">
                        <label>Nom de compte</label>
                        <div id="the-basics">
                            <input class="typeahead" type="text" placeholder="Name" name="nom_compte">
                        </div>
                        </div>
                        <div class="col">
                        <label>Numero de compte</label>
                        <div id="bloodhound">
                            <input class="typeahead" type="text" placeholder="Num" name ="num_compte">
                        </div>
                        </div>
                    </div>
                </div>
                <input type="submit" value="Ajouter" class="btn btn-success btn-rounded btn-fw" />     
                </form>
            </div>
        </div>
    </div>
    </center>
</body>
<?php  
  $this->load->view('templates/footer') ;
?>---