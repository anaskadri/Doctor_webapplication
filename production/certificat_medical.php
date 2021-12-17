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
                                            <span class="section">Certificat medical</span>

                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Attestateur <span class="required">*</span>
                                                    </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input class="form-control col-md-7 col-xs-12" id="attestateur_nom" placeholder="Nom de l'attestateur" required="required" type="text">
                                                    <input class="form-control col-md-7 col-xs-12" id="attestateur_prenom" placeholder="Prénom de l'attestateur" required="required" type="text">
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
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Date certificat <span class="required">*</span>
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
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Cin <span class="required">*</span>
                                                    </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input class="form-control col-md-7 col-xs-12" id="cin" placeholder="Cin" required="required" type="text">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Adresse <span class="required">*</span>
                                                    </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="col-md-13 xdisplay_inputx form-group has-feedback">
                                                        <input type="text" class="form-control col-md-7 col-xs-12" id="adresse" placeholder="Adresse" aria-describedby="inputSuccess2Status2" id="adress">
                                                        <span id="inputSuccess2Status2" class="sr-only">(success)</span>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Arret 1 <span class="required">*</span>
                                                    </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="col-md-13 xdisplay_inputx form-group has-feedback">
                                                        <input type="text" class="form-control col-md-7 col-xs-12" id="nbr_jours_arret" placeholder="nbr arrêt" aria-describedby="inputSuccess2Status2" id="heure">
                                                        <span id="inputSuccess2Status2" class="sr-only">(success)</span>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Debut complication 1 <span class="required">*</span>
                                                    </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="col-md-13 xdisplay_inputx form-group has-feedback">
                                                        <input type="text" class="form-control has-feedback-left" id="single_cal1" placeholder="debut date de complication" aria-describedby="inputSuccess2Status2" style="padding-left:55px;" name="date_naissance">
                                                        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                                        <span id="inputSuccess2Status2" class="sr-only">(success)</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Fin complication 1 <span class="required">*</span>
                                                    </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="col-md-13 xdisplay_inputx form-group has-feedback">
                                                        <input type="text" class="form-control has-feedback-left" id="single_cal2" placeholder="Fin date de complication" aria-describedby="inputSuccess2Status2" style="padding-left:55px;" name="date_naissance">
                                                        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                                        <span id="inputSuccess2Status2" class="sr-only">(success)</span>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Prolongation <span class="required">*</span>
                                                    </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="col-md-13 xdisplay_inputx form-group has-feedback">
                                                        <input type="text" class="form-control col-md-7 col-xs-12" id="nbr_prolongation" placeholder="nbr Prolongation" aria-describedby="inputSuccess2Status2" id="heure">
                                                        <span id="inputSuccess2Status2" class="sr-only">(success)</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Debut complication 2 <span class="required">*</span>
                                                    </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="col-md-13 xdisplay_inputx form-group has-feedback">
                                                        <input type="text" class="form-control has-feedback-left" id="single_cal3" placeholder="Debut complication 2" aria-describedby="inputSuccess2Status2" style="padding-left:55px;" name="date_naissance">
                                                        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                                        <span id="inputSuccess2Status2" class="sr-only">(success)</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Fin complication 2 <span class="required">*</span>
                                                    </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="col-md-13 xdisplay_inputx form-group has-feedback">
                                                        <input type="text" class="form-control has-feedback-left" id="single_cal4" placeholder="Fin complication 2" aria-describedby="inputSuccess2Status2" style="padding-left:55px;" name="date_naissance">
                                                        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                                        <span id="inputSuccess2Status2" class="sr-only">(success)</span>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Date debut du travail <span class="required">*</span>
                                                    </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <div class="input-group date" id="myDatepicker2">
                                                            <input type="text" id="date_debut_travail" placeholder="Date debut du travail" class="form-control">
                                                            <span class="input-group-addon">
                                                               <span class="glyphicon glyphicon-calendar"></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Cas d'urgence <span class="required">*</span>
                                                    </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="col-md-13 xdisplay_inputx form-group has-feedback">
                                                        <input type="text" class="form-control col-md-7 col-xs-12" id="hopital_urgence" placeholder="Cas d'urgence" aria-describedby="inputSuccess2Status2" id="heure">
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
                                    <div style="font-size: 15pt">Dr Fatima MALKI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;KENITRA, le<div class="date_certificat" style="display:inline;margin-left:10px;margin-right:10px;"></div><br/>Médecine Générale, Echographie<br/>161, Av Med 5,1er étage, app2, Kenitra<br/>Tel : 0537360991</div>
                                    <center><h1>Certificat medical</h1></center><br/>
                                    <div id="certificat_body">
                                        <strong>Je soussigne, Docteur</strong> <div class="attestateur_nom" style="display:inline;margin-left:10px;margin-right:10px;"></div><div class="attestateur_prenom" style="display:inline;margin-left:10px;margin-right:10px;"></div><br/>
                                        
                                        <strong>Certifie avoir examiné le (la) nommé(e) :</strong> <div class="patient_nom" style="display:inline;margin-left:10px;margin-right:10px;"></div><div class="patient_prenom" style="display:inline;margin-left:10px;margin-right:10px;"></div><br/> 

                                        <strong>CIN :</strong> <div class="cin" style="display:inline;margin-left:10px;margin-right:10px;"></div><br/> 
                                        
                                        <strong>Adresse :</strong> <div class="adresse" style="display:inline;margin-left:10px;margin-right:10px;"></div><br/> 

                                        <div style="text-align:justify;"><strong>1- Nécessite un traitement avec arrêt de travail de<div class="nbr_jours_arret" style="display:inline;margin-left:10px;margin-right:10px;"></div>jours, Sauf complications du<div class="single_cal1" style="display:inline;margin-left:10px;margin-right:10px;"></div>au<div class="single_cal2" style="display:inline;margin-left:10px;margin-right:10px;"></div><br/>2- Nécessite une prolongation d’arrêt de travail de<div class="nbr_prolongation" style="display:inline;margin-left:10px;margin-right:10px;"></div>jours, Sauf complications du<div class="single_cal3" style="display:inline;margin-left:10px;margin-right:10px;"></div>au<div class="single_cal4" style="display:inline;margin-left:10px;margin-right:10px;"></div>jours <br/>3- Lui permet de reprendre son travail à dater du<div class="date_debut_travail" style="display:inline;margin-left:10px;margin-right:10px;"></div><br/>4- Nécessite le transport d’urgence en ambulance à l’hôpital<div class="hopital_urgence" style="display:inline;margin-left:10px;margin-right:10px;"></div></strong></div>

                                        <center><p><strong>Signature</strong></p></center>
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
                var value1 = $("#attestateur_nom").val();
                $('.attestateur_nom').text(""+value1);
                
                var value2 = $("#attestateur_prenom").val();
                $('.attestateur_prenom').text(""+value2);
                
                var value3 = $("#nom_patient").val();
                $('.patient_nom').text(""+value3);
                
                var value4 = $("#prenom_patient").val();
                $('.patient_prenom').text(""+value4);
                
                var value5 = $("#cin").val();
                $('.cin').text(""+value5);
                
                var value6 = $("#adresse").val();
                $('.adresse').text(""+value6);
                
                var value7 = $("#nbr_jours_arret").val();
                $('.nbr_jours_arret').text(""+value7);
                 
                var value8 = $("#single_cal1").val();
                $('.single_cal1').text(""+value8);
                
                var value9 = $("#single_cal2").val();
                $('.single_cal2').text(""+value9);
                
                var value10 = $("#nbr_prolongation").val();
                $('.nbr_prolongation').text(""+value10);
                
                var value11 = $("#single_cal3").val();
                $('.single_cal3').text(""+value11);
                
                var value12 = $("#single_cal4").val();
                $('.single_cal4').text(""+value12);
                
                var value13 = $("#date_debut_travail").val();
                $('.date_debut_travail').text(""+value13);
                
                var value14 = $("#hopital_urgence").val();
                $('.hopital_urgence').text(""+value14);
                
                var value15 = $("#date_certificat").val();
                $('.date_certificat').text(""+value15);
                
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
