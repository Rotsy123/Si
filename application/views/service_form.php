<?php 
  $this->load->view('templates/header');
  $this->load->view('templates/nav');
?>
<body>
    <div class="card">
    <div class="card-body">
        <h4 class="card-title">Plan de compte general</h4>
        <p class="card-description">
        Add class <code>.table</code>
        </p>
        <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th>Nom du compte</th>
                <th>Numero de compte</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($table as $compte): ?>
                <tr>
                    <td><?php echo $compte['nomcompte'] ?></td>
                    <td><?php echo $compte['numerocompte'] ?></td>
                    <td>
                        <a href ="<?php echo base_url("Service/modif")?>?numerocompte=<?php echo $compte['numerocompte']?>"><label class="badge badge-info">Modifier</label></a>
                    </td>
                    <td>
                        <a href ="<?php echo base_url("Service/supprimer")?>?numerocompte=<?php  echo $compte['numerocompte']?>"><label class="badge badge-danger">Supprimer</label></a>
                    </td>
                </tr>
            <?php endforeach; ?>
            
            </tbody>
        </table>
        </div>
    </div>
</div>
</body>
<?php  
  $this->load->view('templates/footer') ;
?>