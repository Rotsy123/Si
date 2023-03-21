<?php 
  $this->load->view('templates/header');
  $this->load->view('templates/nav');
?>
<body class="hold-transition sidebar-mini" style="margin-top:60px">
<div class="card">
    <div class="card-body">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Jour</th>
        <th>Numero Piece</th>
        <th>Reference Piece</th>
        <th>Numero compte</th>
        <th>Libelle</th>
        <th>Devise</th>
        <th>Parite</th>
        <th>Quantite</th>
        <th>Montant de devise</th>
        <th>Debit</th>
        <th>Credit</th>

      </tr>
    </thead>
    <tbody>
      <?php for($i =0; $i<12; $i++) { ?>
      <tr>
        <td>1.</td>
        <td>Update software</td>
        <td>
          <div class="select">
            <select>
              <option>BOA</option>
              <option>BNI</option>
            </select>
          </div>
        </td>
        <td><span class="badge bg-danger">55</span></td>
        <td>Achat kiraro</td>
        <td>
          <div class="select">
            <select>
              <option>Euros</option>
              <option>Dollars</option>
              <option>Livres</option>
            </select>
          </div>
        </td>
        <td></td>
        <td>50</td>
        <td>1700000</td>
        <td>1700000</td>
        
      </tr>
      <tr>
      <?php } ?>
    </tbody>
  </table>
</div>
</div>
</div>
</body>
<?php  
  $this->load->view('templates/footer') ;
?>