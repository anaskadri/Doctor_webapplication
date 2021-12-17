<?php
session_start ();
ini_set('session.cookie_domain', substr($_SERVER['SERVER_NAME'],strpos($_SERVER['SERVER_NAME'],"."),100));
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
                                <h2>
                                    <?php echo $_SESSION['nom_medecin'].' '.$_SESSION['prenom_medecin']; ?>
                                </h2>
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
                            <div class="col-md-7 col-sm-7 col-xs-7">
                                <div class="x_panel">
                                    <div class="x_content">

                                        <form class="form-horizontal form-label-left" novalidate="" action="#" id="certificat">
                                            <span class="section">Facture1</span>

                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Date du reçue <span class="required">*</span>
                                                    </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <div class="input-group date" id="myDatepicker1">
                                                            <input type="text" id="date_certificat" placeholder="Kenitra le" class="form-control">
                                                            <span class="input-group-addon">
                                                               <span class="glyphicon glyphicon-calendar"></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Patient <span class="required">*</span>
                                                     </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input class="form-control col-md-7 col-xs-12" id="nom_patient" placeholder="Nom du patient" required="required" type="text">
                                                    <input class="form-control col-md-7 col-xs-12" id="prenom_patient" placeholder="Prénom du patient" required="required" type="text">
                                                </div>
                                            </div>
                                            
                                            

                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nature de l’examen  <span class="required">*</span>
                                                    </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input class="form-control col-md-7 col-xs-12" id="examen" placeholder="examen" required="required" type="text">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Prix <span class="required">*</span>
                                                    </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="col-md-13 xdisplay_inputx form-group has-feedback">
                                                        <input type="text" class="form-control col-md-7 col-xs-12" id="prix" placeholder="Prix" aria-describedby="inputSuccess2Status2" id="adress">
                                                        <span id="inputSuccess2Status2" class="sr-only">(success)</span>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Réduction <span class="required">*</span>
                                                    </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="col-md-13 xdisplay_inputx form-group has-feedback">
                                                        <input type="text" class="form-control col-md-7 col-xs-12" id="reduction" placeholder="Réduction" aria-describedby="inputSuccess2Status2" id="adress">
                                                        <span id="inputSuccess2Status2" class="sr-only">(success)</span>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Encaissé(DHS) <span class="required">*</span>
                                                    </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="col-md-13 xdisplay_inputx form-group has-feedback">
                                                        <input type="text" class="form-control col-md-7 col-xs-12" id="encaissement" placeholder="Encaissé(DHS)" aria-describedby="inputSuccess2Status2" id="adress">
                                                        <span id="inputSuccess2Status2" class="sr-only">(success)</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="ln_solid"></div>
                                            <div class="form-group">
                                                <div class="col-md-6 col-md-offset-3">

                                                    <button id="send" type="button" class="btn btn-dark">Valider</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-5 col-sm-5 col-xs-5" id="content" style="display:none;">
                                    <center><h1>Certificat medical</h1></center><br/>
                                    <div style="font-size: 15pt">Dr Fatima MALKI<div class="date_certificat" style="display:inline;margin-left:10px;margin-right:10px;"></div><br/>Médecine Générale, Echographie<br/>161, Av Med 5,1er étage, app2, Kenitra<br/>Tel : 0537360991</div>
                                    <center><h2>Reçue</h2></center><br/>
                                    <div id="certificat_body">
                                        <strong>Date :</strong> <div class="date" style="display:inline;margin-left:10px;margin-right:10px;"></div><br/> 
                                        <strong>Nom et prénom du patient : </strong> <div class="patient_nom" style="display:inline;margin-left:10px;margin-right:10px;"></div><div class="patient_prenom" style="display:inline;margin-left:10px;margin-right:10px;"></div><br/>
                                        
                                        <strong>Certifie avoir examiné le (la) nommé(e) :</strong> <div class="patient_nom" style="display:inline;margin-left:10px;margin-right:10px;"></div><div class="patient_prenom" style="display:inline;margin-left:10px;margin-right:10px;"></div><br/> 

                                        <strong>Nature de l'examen :</strong> <div class="examen" style="display:inline;margin-left:10px;margin-right:10px;"></div><br/> 
                                        
                                        <strong>Prix :</strong> <div class="prix" style="display:inline;margin-left:10px;margin-right:10px;"></div><br/> 
                                        
                                        <strong>Réduction :</strong> <div class="reduction" style="display:inline;margin-left:10px;margin-right:10px;"></div><br/> 
                                        
                                        <strong>Encaissé(DHS) :</strong> <div class="encaissement" style="display:inline;margin-left:10px;margin-right:10px;"></div><br/> 

                                        <center><p><strong>Signature et cachet :</strong></p></center>
                                    </div>
                                    <center><button onclick="myFunction(content)" class="no-print">Imprimer</button></center>
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
        
        <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-datetimepicker -->    
    <script src="../vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>

        <script src="../vendors/jszip/dist/jszip.min.js"></script>
        <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
        <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>
    
        <script type="text/javascript">
            $('#single_cal1').datepicker({
                format: 'dd/mm/yyyy'
            });
            $('#single_cal2').datepicker({
                format: 'dd/mm/yyyy'
            });
            $('#single_cal3').datepicker({
                format: 'dd/mm/yyyy'
            });
            $('#single_cal4').datepicker({
                format: 'dd/mm/yyyy'
            });
        </script>
        <script type="text/javascript">
            function fillValues() {
                
                var value1 = $("#nom_patient").val();
                $('.patient_nom').text(""+value1);
                
                var value2 = $("#prenom_patient").val();
                $('.patient_prenom').text(""+value2);
                
                var value3 = $("#single_cal1").val();
                $('.single_cal1').text(""+value3);
                
                var value3 = $("#examen").val();
                $('.examen').text(""+value3);
                
                var value3 = $("#prix").val();
                $('.prix').text(""+value3);
                
                var value3 = $("#reduction").val();
                $('.reduction').text(""+value3);
                
                var value3 = $("#encaissement").val();
                $('.encaissement').text(""+value3);
                
                
                $("#content").css("display","block");
            }

            $("#send").click(fillValues);

        </script>
        
            <script type="text/javascript">
                function myFunction(elem)
                {
                    Popup($(elem).html());
                }
                function Popup(data)
                {
                    var myWindow = window.open('', 'PRINT', 'height=700,width=900');
                    myWindow.document.write('<html><head><title></title>');
                    myWindow.document.write('<style>.no-print{display:none;} h1{margin-top:0px;} #certificat_body{font-size: 17pt;margin-top: 10px;line-height: 50pt;}</style></head><body >');
                    myWindow.document.write(data);
                    myWindow.document.write('</body></html>');

                    myWindow.print();
                    myWindow.close();

                    return true;
                }
            </script>
        <script>
            $('#myDatepicker2').datetimepicker({
                    format: 'DD/MM/YYYY'
                });
            $('#myDatepicker1').datetimepicker({
                    format: 'DD/MM/YYYY'
                });
        </script>
        <!-- Custom Theme Scripts -->
        <script src="../build/js/custom.min.js"></script>

    </body>

    </html>
