<?php 
  $this->load->view('templates/header');
  $this->load->view('templates/nav');
?>
<body class="hold-transition sidebar-mini" style="margin-top: 100px;">
<div class="card">
    <div class="card-body">
  <style>
    .card-body{
      margin-left: 20%;
      margin-right: 20%;
    }
    .card-header{
      margin-left:15%;
      margin-right:15%;
    }
    .card-footer{
      margin-left:20%;
      margin-right:20%;
    }
  </style>
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Insertion des Exercices</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="exercice.html">
      <div class="card-body">
        <div class="form-group">
          <label for="debut">Date de debut de l'exercice</label>
          <input type="date" class="form-control" id="debut" placeholder="debut">
        </div>
        <div class="form-group">
          <label for="fin">Date Fin de l'exercice</label>
          <input type="date" class="form-control" id="fin" placeholder="fin">
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
  </div>
  </div>
  <!-- /.card -->
<?php  
  $this->load->view('templates/footer') ;
?>