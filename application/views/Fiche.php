<?php 
  $this->load->view('templates/header');
  $this->load->view('templates/nav');
?>
<body style="margin-top: 100px;">
<div class="row">
<div class="card-body">
    <h4 class="card-title">Formulaire d'entite  d'une société</h4>
        <p class="card-description">Quelques Modification</p>
            <form class="forms-sample" action="inc/Traitement.php" method="post" enctype="multipart/form-data">
            <!-- <input type="hidden"   name="idE" value="<?php echo $data['idEntreprise'];?>"> -->
                <div class="form-group">
                      <label for="exampleInputName1">Nom de la société</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="nom_societe" value="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Nom du dirigeant</label>
                      <input type="email" class="form-control" name="nom_dirigeant" id="exampleInputEmail3" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">Adresse d'exploitation</label>
                      <input type="password" class="form-control" name="adresse" id="exampleInputPassword4" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">Siege</label>
                      <input type="password" class="form-control" name="siege" id="exampleInputPassword4" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">Telephone</label>
                      <input type="password" class="form-control" name="telephone" id="exampleInputPassword4" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">Numero d'identification fiscale</label>
                      <input type="password" class="form-control" name="num_fiscale" id="exampleInputPassword4" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">Numero statistique</label>
                      <input type="password" class="form-control" name="num_statistique" id="exampleInputPassword4" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">Numero registre du commerce</label>
                      <input type="password" class="form-control" name="num_registre" id="exampleInputPassword4" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleSelectGender"> Devise de la tenue de compte ( Ar ) </label>
                        <select class="form-control" id="exampleSelectGender" name="devise_ariary">
                          <option>Euros</option>
                          <option>Ariary</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleSelectGender"> Devise d'equivalence (Ar -> Euro,...) </label>
                        <select class="form-control" id="exampleSelectGender" name="devise_equivalence">
                          <option>Euros</option>
                          <option>Ariary</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label>File upload</label>
                    <div class="form-group" style="background-color: #248AFD ;">
                        <input type="file" name="logo" >
                    </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea1">Status</label>
                      <textarea class="form-control" id="exampleTextarea1" name="status" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
        </form>
    </div>  
</div>
</body>
<?php  
  $this->load->view('templates/footer') ;
?>
