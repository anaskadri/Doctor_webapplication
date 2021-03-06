<?php
session_start ();
ini_set('session.cookie_domain', substr($_SERVER['SERVER_NAME'],strpos($_SERVER['SERVER_NAME'],"."),100));

include ('php/liste/liste_patient.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cabinet Dr Malki</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    
    <!-- edit the colors -->
    <link href="css/edit_colors.css" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body" style="background-color:#3c6c7b;">
        <div class="main_container">
            <div class="col-md-3 left_col" style="background-color:#3c6c7b;">
                <div class="left_col scroll-view" style="background-color:#3c6c7b;">
                    <div class="navbar nav_title" style="border: 0;background-color:#3c6c7b;">
                        <a href="secretaire.php" class="site_title"><i class="fa fa-ge"></i> <span>Cabinet</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_info">
                <span>Bienvenu,</span>
                <h2><?php echo $_SESSION['nom_secretaire'].' '.$_SESSION['prenom_secretaire']; ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i>Accueil</a></li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

                    
                </div>
            </div>

            <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu" style="background-color:#3c6c7b;">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <?php echo $_SESSION['nom_secretaire'].' '.$_SESSION['prenom_secretaire']; ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="php/logout.php"><i class="fa fa-sign-out pull-right"></i>D??connexion</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="clearfix"></div>
                    
                    <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">

                    <form class="form-horizontal form-label-left" novalidate="" action="php/ajout/ajout_patient.php" method="post">
                      <span class="section">Ajouter un patient</span>

                      <div class="item form-group bad">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nom <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" name="nom" placeholder="Nom" required="required" type="text">
                        </div>
                      <div class="alert">Veuillez inserer ici</div></div>
                        
                      <div class="item form-group bad">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Prenom <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" name="prenom" placeholder="Pr??nom" required="required" type="text">
                        </div>
                      <div class="alert">Veuillez inserer ici</div></div>
                        
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Date de naissance <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="col-md-13 xdisplay_inputx form-group has-feedback">
                             <input type="text" class="form-control has-feedback-left" id="single_cal2" placeholder="Date de naissance" aria-describedby="inputSuccess2Status2" style="padding-left:55px;" name="date_naissance">
                             <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                             <span id="inputSuccess2Status2" class="sr-only">(success)</span>
                          </div>
                        </div>
                      <div class="alert">Veuillez inserer ici</div></div>
                        
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Cin 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" name="cin" placeholder="Cin" type="text">
                        </div>
                     </div>
                        
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Telephone 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" name="telephone" placeholder="T??l??phone" type="text">
                        </div>
                      </div>
                        
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Mutuel 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" name="mutuel" placeholder="Mutuel" type="text">
                        </div>
                      </div>
                        
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Adresse 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" name="adresse" placeholder="Adresse" type="text">
                        </div>
                      </div>
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          
                          <button id="send" type="submit" class="btn btn-dark">Valider</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
                    
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Liste des patients</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <p class="text-muted font-13 m-b-30">
                                    
                                    </p>
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>Prenom</th>
                                                <th>Date de naissance</th>
                                                <th>Telephone</th>
                                                <th>Cin</th>
                                                <th>Mutuel</th>
                                                <th>adresse</th>
                                                <th>Date d'inscription</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            <?php
                                                while ($liste_patient=$patient->fetch()){
                                                echo'
                                                <tr>
                                                    <td>'.$liste_patient['nom_patient'].'</td>
                                                    <td>'.$liste_patient['prenom_patient'].'</td>
                                                    <td>'.$liste_patient['date_naissance'].'</td>
                                                    <td>'.$liste_patient['telephone_patient'].'</td>
                                                    <td>'.$liste_patient['cin_patient'].'</td>
                                                    <td>'.$liste_patient['mutuel_patient'].'</td>
                                                    <td>'.$liste_patient['adresse_patient'].'</td>
                                                    <td>'.$liste_patient['date_inscription'].'</td>
                                                </tr>';
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page content -->
        </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>
    <!-- validator -->
    <script src="../vendors/validator/validator.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

</body>

</html>
