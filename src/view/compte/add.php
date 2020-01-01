<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Gestion Banque</title>

  <!-- Custom fonts for this template-->
  <link href="public/template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

 

  <link href="public/template/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
        <i class="fa fa-university" aria-hidden="true"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Gestion Banque</div>
      </a>
      
      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="accueil.php">
        <i class="fa fa-home" aria-hidden="true"></i>
          <span>Accueil</span></a>
         
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fa fa-users" aria-hidden="true"></i>
          <span>Gestion des Clients</span>
        </a>
        
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="ajoutClient">Ajout Client</a>
            <a class="collapse-item" href="clients">Liste des Client</a>
            
          </div>
        </div>

      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-money-bill-alt "></i>
          <span>Gestion des Comptes</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="#">Ajout des Comptes</a>
                <a class="collapse-item" href="comptes">Liste des Comptes</a>
          </div>
        </div>
      </li>

      
     

      

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          
          <!-- Topbar Search -->
          

          <!-- Topbar Navbar -->
        

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            
<div class="nav navbar-primary">
<div class="nav navbar-default">
       
        
    <div class="container">
            
        </div>
        <div class="container">
            <div class="panel panel-primary">
                <div class="panel-heading"><h1>Formulaire d'Ajout de Comptes</h1></div>
                <div class="panel-body">
                    <form action="compteController" method="POST">
                    
                        
                        <div class="form-group">
                            <label class="control-label" for="numero">Numéro Compte</label>
                            <input class="form-control" type="text" name="numero" id="numero" placeholder="Entrer le numéro de compte" value="<?php $numero?>"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="solde">Solde</label>
                            <input class="form-control"  type="number" name="solde" id="solde" placeholder="Entrer le solde" value="<?php $solde?>"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="client">Client</label>
                            <select class="form-control" type="text" name="client" id="client">
                                <option value="0">Faites Votre choix</option>
                                <?php
                                require_once '../../model/clientdb.php';
                                $list = listeClient();
                                foreach ($list as $key => $value) {
                                    echo"<option value=\"$value[0]\">$value[0]  $value[1] $value[2]</option>";
                                 }
                                 ?>
                            </select>
                        </div>
                        <div class="form-group">
                        <input class="btn btn-success" type="submit" name="envoyer" id="envoyer" value="Envoyer"/>
                        <input class="btn btn-danger" type="reset" name="annuler" id="annuler" value="Annuler"/>
                        </div>
                    </form>
                </div>
                <div class="panel-footer"></div>
            </div>
        </div>
    </div>
    </div>
            
          </div>

         
          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                
                
              </div>
            </div>

            <!-- Pie Chart -->
            
          </div>

          <!-- Content Row -->
          <div class="row">

            
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="public/template/vendor/jquery/jquery.min.js"></script>
  <script src="public/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="public/template/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="public/template/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="public/template/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="public/template/js/demo/chart-area-demo.js"></script>
  <script src="public/template/js/demo/chart-pie-demo.js"></script>

</body>

</html>
