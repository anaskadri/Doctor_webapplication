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
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="x_panel">
                                    <div class="x_content">

                                        <form class="form-horizontal form-label-left" novalidate="" action="#" id="certificat">
                                            <span class="section">Bilan general</span>

                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Patient <span class="required">*</span>
                                                     </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input class="form-control col-md-7 col-xs-12" id="nom_patient" placeholder="Nom du patient" required="required" type="text">
                                                    <input class="form-control col-md-7 col-xs-12" id="prenom_patient" placeholder="Prénom du patient" required="required" type="text">
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
                                            
                                            <div class="form_group">
                                                <label class="control-label col-md-6 col-sm-6 col-xs-12" for="name" style="width: 250px;">NFS <span class="required">*</span>
                                                     </label>
                                                  <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" class="flat" style="position: absolute; opacity: 0;" name="" id="c1"></div>
                                            </div><br/>
                                            
                                            <div class="form_group">
                                                <label class="control-label col-md-6 col-sm-6 col-xs-12" for="name" style="width: 250px;">Fer sérique <span class="required">*</span>
                                                     </label>
                                                  <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" class="flat" style="position: absolute; opacity: 0;" name="" id="c2"></div>
                                            </div><br/>
                                            
                                            <div class="form_group">
                                                <label class="control-label col-md-6 col-sm-6 col-xs-12" for="name" style="width: 250px;">Ferritine <span class="required">*</span>
                                                     </label>
                                                  <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" class="flat" style="position: absolute; opacity: 0;" name="" id="c3"></div>
                                            </div><br/>
                                            
                                            <div class="form_group">
                                                <label class="control-label col-md-6 col-sm-6 col-xs-12" for="name" style="width: 250px;">Transferrine <span class="required">*</span>
                                                     </label>
                                                  <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" class="flat" style="position: absolute; opacity: 0;" name="" id="c4"></div>
                                            </div><br/>
                                            
                                            <div class="form_group">
                                                <label class="control-label col-md-6 col-sm-6 col-xs-12" for="name" style="width: 250px;">Electrophorèse de l’hémoglobine <span class="required">*</span>
                                                     </label>
                                                  <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" class="flat" style="position: absolute; opacity: 0;" name="" id="c5"></div>
                                            </div><br/>
                                            
                                            <div class="form_group">
                                                <label class="control-label col-md-6 col-sm-6 col-xs-12" for="name" style="width: 250px;">Frottis sanguin <span class="required">*</span>
                                                     </label>
                                                  <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" class="flat" style="position: absolute; opacity: 0;" name="" id="c6"></div>
                                            </div><br/>
                                            
                                            <div class="form_group">
                                                <label class="control-label col-md-6 col-sm-6 col-xs-12" for="name" style="width: 250px;">VS <span class="required">*</span>
                                                     </label>
                                                  <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" class="flat" style="position: absolute; opacity: 0;" name="" id="c7"></div>
                                            </div><br/>
                                            
                                            <div class="form_group">
                                                <label class="control-label col-md-6 col-sm-6 col-xs-12" for="name" style="width: 250px;">CRP <span class="required">*</span>
                                                     </label>
                                                  <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" class="flat" style="position: absolute; opacity: 0;" name="" id="c8"></div>
                                            </div><br/>
                                            
                                            <div class="form_group">
                                                <label class="control-label col-md-6 col-sm-6 col-xs-12" for="name" style="width: 250px;">Electrophorèse des protides<span class="required">*</span>
                                                     </label>
                                                  <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" class="flat" style="position: absolute; opacity: 0;" name="" id="c9"></div>
                                            </div><br/>
                                            
                                            <div class="form_group">
                                                <label class="control-label col-md-6 col-sm-6 col-xs-12" for="name" style="width: 250px;">Urée <span class="required">*</span>
                                                     </label>
                                                  <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" class="flat" style="position: absolute; opacity: 0;" name="" id="c10"></div>
                                            </div><br/>
                                            
                                            <div class="form_group">
                                                <label class="control-label col-md-6 col-sm-6 col-xs-12" for="name" style="width: 250px;">Créatinine <span class="required">*</span>
                                                     </label>
                                                  <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" class="flat" style="position: absolute; opacity: 0;" name="" id="c11"></div>
                                            </div><br/>
                                            
                                            <div class="form_group">
                                                <label class="control-label col-md-6 col-sm-6 col-xs-12" for="name" style="width: 250px;">Clearance de la créatinine <span class="required">*</span>
                                                     </label>
                                                  <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" class="flat" style="position: absolute; opacity: 0;" name="" id="c12"></div>
                                            </div><br/>
                                            
                                            <div class="form_group">
                                                <label class="control-label col-md-6 col-sm-6 col-xs-12" for="name" style="width: 250px;">Acide urique <span class="required">*</span>
                                                     </label>
                                                  <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" class="flat" style="position: absolute; opacity: 0;" name="" id="c13"></div>
                                            </div><br/>
                                            
                                            <div class="form_group">
                                                <label class="control-label col-md-6 col-sm-6 col-xs-12" for="name" style="width: 250px;">Kaliémie <span class="required">*</span>
                                                     </label>
                                                  <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" class="flat" style="position: absolute; opacity: 0;" name="" id="c14"></div>
                                            </div><br/>
                                            
                                            <div class="form_group">
                                                <label class="control-label col-md-6 col-sm-6 col-xs-12" for="name" style="width: 250px;">Calcémie <span class="required">*</span>
                                                     </label>
                                                  <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" class="flat" style="position: absolute; opacity: 0;" name="" id="c15"></div>
                                            </div><br/>
                                            
                                            <div class="form_group">
                                                <label class="control-label col-md-6 col-sm-6 col-xs-12" for="name" style="width: 250px;">Chlorures <span class="required">*</span>
                                                     </label>
                                                  <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" class="flat" style="position: absolute; opacity: 0;" name="" id="c16"></div>
                                            </div><br/>
                                            
                                            <div class="form_group">
                                                <label class="control-label col-md-6 col-sm-6 col-xs-12" for="name" style="width: 250px;">Cholestérol total <span class="required">*</span>
                                                     </label>
                                                  <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" class="flat" style="position: absolute; opacity: 0;" name="" id="c17"></div>
                                            </div><br/>
                                            
                                            <div class="form_group">
                                                <label class="control-label col-md-6 col-sm-6 col-xs-12" for="name" style="width: 250px;">HDL <span class="required">*</span>
                                                     </label>
                                                  <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" class="flat" style="position: absolute; opacity: 0;" name="" id="c18"></div>
                                            </div><br/>
                                            
                                            <div class="form_group">
                                                <label class="control-label col-md-6 col-sm-6 col-xs-12" for="name" style="width: 250px;">Triglycérides <span class="required">*</span>
                                                     </label>
                                                  <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" class="flat" style="position: absolute; opacity: 0;" name="" id="c19"></div>
                                            </div><br/>
                                            
                                            <div class="form_group">
                                                <label class="control-label col-md-6 col-sm-6 col-xs-12" for="name" style="width: 250px;">Bilirubine totale <span class="required">*</span>
                                                     </label>
                                                  <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" class="flat" style="position: absolute; opacity: 0;" name="" id="c20"></div>
                                            </div><br/>
                                            
                                            <div class="form_group">
                                                <label class="control-label col-md-6 col-sm-6 col-xs-12" for="name" style="width: 250px;">Bilirubine conjuguée <span class="required">*</span>
                                                     </label>
                                                  <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" class="flat" style="position: absolute; opacity: 0;" name="" id="c21"></div>
                                            </div><br/>
                                            
                                            <div class="form_group">
                                                <label class="control-label col-md-6 col-sm-6 col-xs-12" for="name" style="width: 250px;">SGOT  <span class="required">*</span>
                                                     </label>
                                                  <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" class="flat" style="position: absolute; opacity: 0;" name="" id="c22"></div>
                                            </div><br/>
                                            
                                            <div class="form_group">
                                                <label class="control-label col-md-6 col-sm-6 col-xs-12" for="name" style="width: 250px;">SGPT<span class="required">*</span>
                                                     </label>
                                                  <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" class="flat" style="position: absolute; opacity: 0;" name="" id="c23"></div>
                                            </div><br/>
                                            
                                            <div class="form_group">
                                                <label class="control-label col-md-6 col-sm-6 col-xs-12" for="name" style="width: 250px;">Gamma GT <span class="required">*</span>
                                                     </label>
                                                  <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" class="flat" style="position: absolute; opacity: 0;" name="" id="c24"></div>
                                            </div><br/>
                                            
                                            <div class="form_group">
                                                <label class="control-label col-md-6 col-sm-6 col-xs-12" for="name" style="width: 250px;">PSA <span class="required">*</span>
                                                     </label>
                                                  <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" class="flat" style="position: absolute; opacity: 0;" name="" id="c25"></div>
                                            </div><br/>
                                            
                                            <div class="form_group">
                                                <label class="control-label col-md-6 col-sm-6 col-xs-12" for="name" style="width: 250px;">Agglutinines irréguliers <span class="required">*</span>
                                                     </label>
                                                  <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" class="flat" style="position: absolute; opacity: 0;" name="" id="c26"></div>
                                            </div><br/>
                                            
                                            <div class="form_group">
                                                <label class="control-label col-md-6 col-sm-6 col-xs-12" for="name" style="width: 250px;">25 hydroxy cholécalciférol (D2-D3) <span class="required">*</span>
                                                     </label>
                                                  <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" class="flat" style="position: absolute; opacity: 0;" name="" id="c27"></div>
                                            </div><br/>
                                            
                                            


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
                                <div style="font-size: 15pt;text-align:right;">Kenitra, le<div class="single_cal2" style="display:inline;margin-left:10px;margin-right:10px;"></div></div>
                                    <center><h1>BILAN GENERAL</h1></center>
                                    <div id="certificat_body">
                                        <center><strong>Mme/Mr </strong> <div class="patient_nom" style="display:inline;margin-left:10px;margin-right:10px;"></div><div class="patient_prenom" style="display:inline;margin-left:10px;margin-right:10px;"></div></center><br/>
                                         
                                        <div>NFS<div id="i1" style="display:inline-block;margin-left:5px;"></div></div>
                                        <div>Fer sérique<div id="i2" style="display:inline-block;margin-left:5px;"></div></div>
                                        <div>Ferritine<div id="i3" style="display:inline-block;margin-left:5px;"></div></div>
                                        <div>Transferrine<div id="i4" style="display:inline-block;margin-left:5px;"></div></div>
                                        <div>Electrophorèse de l’hémoglobine<div id="i5" style="display:inline-block;margin-left:5px;"></div></div>
                                        <div>Frottis sanguin<div id="i6" style="display:inline-block;margin-left:5px;"></div></div>
                                        <div>VS<div id="i7" style="display:inline-block;margin-left:5px;"></div></div>
                                        <div>CRP<div id="i8" style="display:inline-block;margin-left:5px;"></div></div>
                                        <div>Electrophorèse des protides<div id="i9" style="display:inline-block;margin-left:5px;"></div></div>
                                        <div>Urée<div id="i10" style="display:inline-block;margin-left:5px;"></div></div>
                                        <div>Créatinine<div id="i11" style="display:inline-block;margin-left:5px;"></div></div>
                                        <div>Clearance de la créatinine<div id="i12" style="display:inline-block;margin-left:5px;"></div></div>
                                        <div>Acide urique<div id="i13" style="display:inline-block;margin-left:5px;"></div></div>
                                        <div>Kaliémie<div id="i14" style="display:inline-block;margin-left:5px;"></div></div>
                                        <div>Calcémie<div id="i15" style="display:inline-block;margin-left:5px;"></div></div>
                                        <div>Chlorures<div id="i16" style="display:inline-block;margin-left:5px;"></div></div>
                                        <div>Cholestérol total<div id="i17" style="display:inline-block;margin-left:5px;"></div></div>
                                        <div>HDL<div id="i18" style="display:inline-block;margin-left:5px;"></div></div>
                                        <div>LDL<div id="i19" style="display:inline-block;margin-left:5px;"></div></div>
                                        <div>Triglycérides<div id="i20" style="display:inline-block;margin-left:5px;"></div></div>
                                        <div>Bilirubine totale<div id="i21" style="display:inline-block;margin-left:5px;"></div></div>
                                        <div>Bilirubine conjuguée<div id="i22" style="display:inline-block;margin-left:5px;"></div></div>
                                        <div>SGOT<div id="i23" style="display:inline-block;margin-left:5px;"></div></div>
                                        <div>SGPT<div id="i24" style="display:inline-block;margin-left:5px;"></div></div>
                                        <div>Gamma GT<div id="i25" style="display:inline-block;margin-left:5px;"></div></div>
                                        <div>PSA<div id="i26" style="display:inline-block;margin-left:5px;"></div></div>
                                        <div>25 hydroxy cholécalciférol (D2-D3)<div id="i27" style="display:inline-block;margin-left:5px;"></div></div>
                                        
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
                
                var value1 = $("#nom_patient").val();
                $('.patient_nom').text(""+value1);
                
                var value2 = $("#prenom_patient").val();
                $('.patient_prenom').text(""+value2);
                
                var value3 = $("#single_cal2").val();
                $('.single_cal2').text(""+value3);
                
                var i;
                for(i=1; i <= 27; i++){
                    if($('#c'+i).is(':checked'))
                        {
                            $('#i'+i).html('<p style="margin:0;">&#x2705;</p>');
                        }
                }
                
                 
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
                    myWindow.document.write('<style>.no-print{display:none;} h1{margin-top:50px;} #certificat_body{font-size: 20pt;margin-top: 50px;line-height: 40pt;}</style></head><body >');
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
