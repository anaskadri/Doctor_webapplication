<?php
session_start ();
ini_set('session.cookie_domain', substr($_SERVER['SERVER_NAME'],strpos($_SERVER['SERVER_NAME'],"."),100));

// id_patient
include ('php/bd_connexion.php');
$id_patient = $_GET['id_patient'];
$patient=$bdd->query("SELECT * FROM patient WHERE id_patient=$id_patient");
$infos_patient=$patient->fetch();
?>
<?php include ('php/liste/liste_motif.php'); ?>
<?php include ('php/liste/liste_traitement.php'); ?>
<?php include ('php/liste/liste_examen.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo $infos_patient['nom_patient'].' '.$infos_patient['prenom_patient'] ?></title>

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
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="#" class="site_title"><i class="fa fa-ge"></i> <span>Cabinet</span></a>
                        </div>

                        <div class="clearfix"></div>

                        <!-- menu profile quick info -->
                        <div class="profile clearfix">
                            <div class="profile_info">
                                <span>Bienvenu,</span>
                                <h2><?php echo $_SESSION['nom_medecin'].' '.$_SESSION['prenom_medecin']; ?></h2>
                            </div>
                        </div>
                        <!-- /menu profile quick info -->

                        <br>

                        <!-- sidebar menu -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section">
                                <ul class="nav side-menu">
                                    <li><a href="medecin.php"><i class="fa fa-home"></i>Accueil</a></li>

                                    <li class=""><a><i class="fa fa-print"></i> Imprimable <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu" style="display: none;">
                                            <li class=""><a>Certificat<span class="fa fa-chevron-down"></span></a>
                                                <ul class="nav child_menu" style="display: none;">
                                                    <li class=""><a href="certificat_aptitude.php">Certificat d’aptitude Physique</a>
                                                    </li>
                                                    <li><a href="certificat_virginite.php">Certificat de virginité</a>
                                                    </li>
                                                    <li><a href="certificat_medical.php">Certificat medical</a>
                                                    </li>
                                                    <li><a href="certificat_agression.php">Certificat médico-légale</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            
                                            <li class=""><a>Bilan<span class="fa fa-chevron-down"></span></a>
                                                <ul class="nav child_menu" style="display: none;">
                                                    <li class=""><a href="bilan_grossesse.php">Bilan de grossesse</a>
                                                    </li>
                                                    <li><a href="bilan_general.php">Bilan general</a>
                                                    </li>
                                                    <li><a href="bilan_hormonal.php">Bilan hormonal</a>
                                                    </li>
                                                    <li><a href="bilan_coeliaque.php">Bilan maladie coeliaque</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            
                                            <li class=""><a>Facture<span class="fa fa-chevron-down"></span></a>
                                                <ul class="nav child_menu" style="display: none;">
                                                    <li class=""><a href="facture1.php">Facture 1</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    
                                    <li><a href="gestion_siteweb.php"><i class="fa fa-cog"></i>Gestion du siteweb</a></li>
                                </ul>

                            </div>
                        </div>
                        <!-- /sidebar menu -->
                    </div>
                </div>
                <!-- top navigation -->
                <div class="top_nav">
                    <div class="nav_menu">
                        <nav>
                            <div class="nav toggle">
                                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                            </div>

                            <ul class="nav navbar-nav navbar-right">
                                <li class="">
                                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <?php echo $_SESSION['nom_medecin'].' '.$_SESSION['prenom_medecin']; ?><span class=" fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                                        <li><a href="php/logout.php"><i class="fa fa-sign-out pull-right"></i>Déconnexion</a></li>
                                        <li><a href="mdp.php"><i class="fa fa-key pull-right"></i>Change du mot de passe</a></li>
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
                            <form action="php/ajout/ajout_motif.php" method="post" id="form_motif"></form>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Motif ATCD</h2>

                                        <div class="clearfix"></div>
                                      </div>
                                    <div class="x_content">
                                        <div class="col-md-5 xdisplay_inputx form-group has-feedback">
                                            <input type="text" class="form-control has-feedback-left" id="single_cal1" placeholder="date_motif" name="date_motif" aria-describedby="inputSuccess2Status2" form="form_motif" required>
                                            <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                            <span id="inputSuccess2Status2" class="sr-only">(success)</span>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <textarea class="resizable_textarea form-control" placeholder="Motif ATCD" name="motif" form="form_motif" style="margin: 0px 14.25px 0px 0px; height: 100px; width: 420px;" required></textarea>
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-12" style="margin-top: 10px;">
                                            <input name="id_patient" value="<?php echo $id_patient; ?>" form="form_motif" hidden=""/>
                                            <button type="submit" class="btn btn-dark" form="form_motif">Enregistrer</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6 col-sm-6 col-xs-">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Historique Motif ATCD</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content" style="display:none;">
                                        <table id="datatable1" class="table table-striped table-bordered table1">
                                            <thead>
                                                <tr>
                                                    <th>Motifs ATCD</th>
                                                    <th>Date</th>
                                                    <th></th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php
                                                    while ($liste_motifs=$motifs->fetch())
                                                    {
                                                        echo'<tr>
                                                                <td>'.$liste_motifs['motif_txt'].'</td>
                                                                <td>'.$liste_motifs['date'].'</td>
                                                                
                                                                <td><button type="button" class="btn btn-danger" style="padding:0;"><a href="php/supprimer/sup_motif.php?id_motif='.$liste_motifs['id_motif'].'&id_patient='.$id_patient.'" style="color:black;padding: 10px;">Supprimer</a></button>
                                                                </td>
                                                            </tr>';
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                                            
                        <div class="row">
                            <form action="php/ajout/ajout_examen.php" method="post" id="form_examen"></form>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Examen</h2>

                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <div class="col-md-5 xdisplay_inputx form-group has-feedback">
                                            <input type="text" class="form-control has-feedback-left" id="single_cal2" placeholder="date_examen" name="date_examen" aria-describedby="inputSuccess2Status2" form="form_examen" required>
                                            <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                            <span id="inputSuccess2Status2" class="sr-only">(success)</span>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <textarea class="resizable_textarea form-control" placeholder="Examen" name="examen" form="form_examen" style="margin: 0px 14.25px 0px 0px; height: 100px; width: 420px;" required></textarea>
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-12" style="margin-top: 10px;">
                                            <input name="id_patient" value="<?php echo $id_patient; ?>" form="form_examen" hidden=""/>
                                            <button type="submit" class="btn btn-dark" form="form_examen">Enregistrer</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Historique examen</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content" style="display:none;">
                                        <p class="text-muted font-13 m-b-30">

                                        </p>
                                        <table id="datatable2" class="table table-striped table-bordered table2">
                                            <thead>
                                                <tr>
                                                    <th>Examen</th>
                                                    <th>Date</th>
                                                    <th></th>
                                                </tr>
                                            </thead>


                                            <tbody>
                                                <?php
                                            while ($liste_examen=$examen->fetch()){
                                            echo'
                                            <tr>
                                                <td>'.$liste_examen['examen_txt'].'</td>
                                                <td>'.$liste_examen['date'].'</td>
                                                <td><button type="button" class="btn btn-danger" style="padding:0;"><a href="php/supprimer/sup_examen.php?id_examen='.$liste_examen['id_examen'].'&id_patient='.$id_patient.'" style="color:black;padding: 10px;">Supprimer</a></button>
                                                </td>
                                            </tr>';
                                            }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <form action="php/ajout/ajout_traitement.php" method="post" id="form_traitement"></form>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Traitement</h2>

                                        <div class="clearfix"></div>
                                      </div>
                                    <div class="x_content">
                                        <div class="col-md-5 xdisplay_inputx form-group has-feedback">
                                            <input type="text" class="form-control has-feedback-left" id="single_cal3" placeholder="date_traitement" name="date_traitement" aria-describedby="inputSuccess2Status2" form="form_traitement" required>
                                            <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                            <span id="inputSuccess2Status2" class="sr-only">(success)</span>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <textarea class="resizable_textarea form-control" placeholder="Traitement" name="traitement" form="form_traitement" style="margin: 0px 14.25px 0px 0px; height: 100px; width: 420px;" required></textarea>
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-12" style="margin-top: 10px;">
                                            <input name="id_patient" value="<?php echo $id_patient; ?>" form="form_traitement" hidden=""/>
                                            <button type="submit" class="btn btn-dark" form="form_traitement">Enregistrer</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Historique traitement</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content" style="display:none;">
                                        <p class="text-muted font-13 m-b-30">

                                        </p>
                                        <table id="datatable3" class="table table-striped table-bordered table3">
                                            <thead>
                                                <tr>
                                                    <th>Traitement</th>
                                                    <th>Date</th>
                                                    <th></th>
                                                </tr>
                                            </thead>


                                            <tbody>
                                                <?php
                                            while ($liste_traitement=$traitement->fetch()){
                                            echo'
                                            <tr>
                                                <td>'.$liste_traitement['traitement_txt'].'</td>
                                                <td>'.$liste_traitement['date'].'</td>
                                                <td><button type="button" class="btn btn-danger" style="padding:0;"><a href="php/supprimer/sup_traitement.php?id_traitement='.$liste_traitement['id_traitement'].'&id_patient='.$id_patient.'" style="color:black;padding: 10px;">Supprimer</a></button>
                                                </td>
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
        <!-- bootstrap-daterangepicker -->
        <script src="../vendors/moment/min/moment.min.js"></script>
        <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
        <script>
            $(document).ready(function() {
                $('#datatable1').DataTable({
                     dom: 'Bfrtip',
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ]
                });
            } );
            $(document).ready(function() {
                $('#datatable2').DataTable({
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ]
                });
            } );
            $(document).ready(function() {
                $('#datatable3').DataTable({
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ]
                });
            } );
        </script>
        
        <!-- Custom Theme Scripts -->
        <script src="../build/js/custom.min.js"></script>

    </body>

    </html>
