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
                                                    <li class=""><a href="certificat_aptitude.php">Certificat d???aptitude Physique</a>
                                                    </li>
                                                    <li><a href="certificat_virginite.php">Certificat de virginit??</a>
                                                    </li>
                                                    <li><a href="certificat_medical.php">Certificat medical</a>
                                                    </li>
                                                    <li><a href="certificat_agression.php">Certificat m??dico-l??gale</a>
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
                                        <li><a href="php/logout.php"><i class="fa fa-sign-out pull-right"></i>D??connexion</a></li>
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
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="x_panel">
                                    <div class="x_content">

                                        <form class="form-horizontal form-label-left" novalidate="" action="#" id="certificat">
                                            <span class="section">Certificat d???aptitude Physique</span>

                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Attestateur <span class="required">*</span>
                                                    </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input class="form-control col-md-7 col-xs-12" id="attestateur_nom" placeholder="Nom de l'attestateur" required="required" type="text">
                                                    <input class="form-control col-md-7 col-xs-12" id="attestateur_prenom" placeholder="Pr??nom de l'attestateur" required="required" type="text">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Patient <span class="required">*</span>
                                                     </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input class="form-control col-md-7 col-xs-12" id="nom_patient" placeholder="Nom du patient" required="required" type="text">
                                                    <input class="form-control col-md-7 col-xs-12" id="prenom_patient" placeholder="Pr??nom du patient" required="required" type="text">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Date de naissance <span class="required">*</span>
                                                    </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="col-md-13 xdisplay_inputx form-group has-feedback">
                                                        <input type="text" class="form-control has-feedback-left" id="single_cal1" placeholder="Date de naissance" aria-describedby="inputSuccess2Status2" style="padding-left:55px;" name="date_naissance">
                                                        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                                        <span id="inputSuccess2Status2" class="sr-only">(success)</span>
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
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Date de la certificat <span class="required">*</span>
                                                    </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="col-md-13 xdisplay_inputx form-group has-feedback">
                                                        <input type="text" class="form-control has-feedback-left" id="single_cal2" placeholder="Date de naissance" aria-describedby="inputSuccess2Status2" style="padding-left:55px;" name="date_naissance">
                                                        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
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

                            <div class="col-md-6 col-sm-6 col-xs-6" id="content" style="display:none;">
                                    <center><h1>Certificat d???aptitude Physique</h1></center>
                                    <div id="certificat_body">
                                        <strong>Je soussigne, Docteur</strong> <div class="attestateur_nom" style="display:inline;margin-left:10px;margin-right:10px;"></div><div class="attestateur_prenom" style="display:inline;margin-left:10px;margin-right:10px;"></div><br/>
                                        
                                        <strong>Certifie avoir examin?? le nomm?? : Mr(Mme)</strong> <div class="patient_nom" style="display:inline;margin-left:10px;margin-right:10px;"></div><div class="patient_prenom" style="display:inline;margin-left:10px;margin-right:10px;"></div><br/> 

                                        <strong>Date de naissance :</strong> <div class="single_cal1" style="display:inline;margin-left:10px;margin-right:10px;"></div><br/> 

                                        <strong>CIN :</strong> <div class="cin" style="display:inline;margin-left:10px;margin-right:10px;"></div><br/> 

                                         <strong>Que l???examen clinique ce jour montre qu???il (elle) est indemne de toute maladie contagieuse et apte physiquement.</strong><br/> 

                                        <center style="margin-top: 50px;"><strong>Fait ?? K??nitra, le</strong> <div class="single_cal2" style="display:inline;margin-left:10px;margin-right:10px;"></div></center> 

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

        <script src="../vendors/jszip/dist/jszip.min.js"></script>
        <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
        <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>
        <!-- bootstrap-daterangepicker -->
        <script src="../vendors/moment/min/moment.min.js"></script>
        <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
        <script type="text/javascript">
            $('#single_cal3').datepicker({
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
                
                var value5 = $("#single_cal1").val();
                $('.single_cal1').text(""+value5);
                
                var value6 = $("#cin").val();
                $('.cin').text(""+value6);
                
                var value7 = $("#single_cal2").val();
                $('.single_cal2').text(""+value7);
                 
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
                    myWindow.document.write('<style>.no-print{display:none;} h1{margin-top:50px;} #certificat_body{font-size: 20pt;margin-top: 100px;line-height: 50pt;}</style></head><body >');
                    myWindow.document.write(data);
                    myWindow.document.write('</body></html>');

                    myWindow.print();
                    myWindow.close();

                    return true;
                }
            </script>
        <!-- Custom Theme Scripts -->
        <script src="../build/js/custom.min.js"></script>

    </body>

    </html>
