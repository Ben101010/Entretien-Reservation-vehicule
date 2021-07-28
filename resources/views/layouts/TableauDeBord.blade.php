<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from hencework.com/theme/kenny/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Dec 2020 15:01:10 GMT -->
<head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Reservation et Entretient de véhicule</title>
	<meta name="description" content="Reservation et Entretient de véhicule." />
	<meta name="keywords" content="web app, application" />
	<meta name="author" content="hencework"/>

	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

	<!-- Morris Charts CSS -->
    <link href="{{ asset('vendors/bower_components/morris.js/morris.css')}}" rel="stylesheet" type="text/css"/>

	<!-- Data table CSS -->
	<link href="{{ asset('vendors/bower_components/datatables/media/css/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>

	<link href="{{ asset('vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css')}}" rel="stylesheet" type="text/css">

	<!-- Custom CSS -->
	<link href="{{ asset('dist/css/style.css')}}" rel="stylesheet" type="text/css">

    @yield("styles")

    @livewireStyles
</head>

<body>
	<!-- Preloader -->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!-- /Preloader -->
    <div class="wrapper slide-nav-toggle">
			<!-- Top Menu Items -->
			<nav class="navbar navbar-inverse navbar-fixed-top">
				<a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block mr-20 pull-left" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
				<a href="#">
                    <span style="font-size:2.5em;"> Réservation & Entretien de Véhicule</span>
                </a>
				<ul class="nav navbar-right top-nav pull-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><img src="{{ asset('dist/img/user1.png')}}" alt="user_auth" class="user-auth-img img-circle"/><span class="user-online-status"></span></a>
						<ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
							<li>
								<a href="#"><i class="fa fa-fw fa-user"></i> Mon profile</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-fw fa-gear"></i> Paramètre</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#"><i class="fa fa-fw fa-power-off"></i> Deconnexion</a>
							</li>
						</ul>
					</li>
				</ul>
			</nav>
			<!-- /Top Menu Items -->

			<!-- Left Sidebar Menu -->
			<div class="fixed-sidebar-left">
				<ul class="nav navbar-nav side-nav nicescroll-bar">
                    <li>
                        <a class="active" href="{{ route('Dashbord') }}">Tableau de Bord</a>
                    </li>

					<li>
						<a  class="active" href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard_dr"><i class="icon-picture mr-10"></i>Gestion des marques <i class="fa fa-fw fa-angle-down"></i></span></a>
						<ul id="dashboard_dr" class="collapse collapse-level-1">
							<li>
								<a class="active" href="{{ route('marques.liste') }}">Liste des marques</a>
							</li>

							<li>
								<a href="{{ route('marques.create') }}">Nouvelle marque</a>
							</li>
						</ul>
					</li>

                    <li>
						<a  class="active" href="javascript:void(0);" data-toggle="collapse" data-target="#form_dr"><i class="icon-picture mr-10"></i>Gestion des modèles <i class="fa fa-fw fa-angle-down"></i></span></a>
						<ul id="form_dr" class="collapse collapse-level-1">
							<li>
								<a class="active" href="{{ route('modeles.liste') }}">Liste des modèles</a>
							</li>
							<li>
								<a href="{{ route('modeles.create') }}">Nouveau modèle</a>
							</li>
						</ul>
					</li>

                    <li>
						<a  class="active" href="javascript:void(0);" data-toggle="collapse" data-target="#contact_dr"><i class="icon-picture mr-10"></i>Gestion des employés <i class="fa fa-fw fa-angle-down"></i></span></a>
						<ul id="contact_dr" class="collapse collapse-level-1">
							<li>
								<a class="active" href="{{ route('employes.liste') }}">Liste des employés</a>
							</li>
							<li>
								<a href="{{ route('employes.create') }}">Nouveau employés</a>
							</li>
						</ul>
					</li>

                    <li>
						<a  class="active" href="javascript:void(0);" data-toggle="collapse" data-target="#table_dr"><i class="icon-picture mr-10"></i>Gestion Chauffeurs <i class="fa fa-fw fa-angle-down"></i></span></a>
						<ul id="table_dr" class="collapse collapse-level-1">
							<li>
								<a class="active" href="{{ route('chauffeurs.liste') }}">Liste des chauffeurs</a>
							</li>
							<li>
								<a href="{{ route('chauffeurs.create') }}">Nouveau Chauffeur</a>
							</li>
						</ul>
					</li>

                    <li>
						<a  class="active" href="javascript:void(0);" data-toggle="collapse" data-target="#icon_dr"><i class="icon-picture mr-10"></i>Gestion des Garages <i class="fa fa-fw fa-angle-down"></i></span></a>
						<ul id="icon_dr" class="collapse collapse-level-1">
							<li>
								<a class="active" href="{{ route('garages.liste') }}">Liste des garages</a>
							</li>
							<li>
								<a href="{{ route('garages.create') }}">Nouveau garage</a>
							</li>
						</ul>
					</li>

                    <li>
						<a  class="active" href="javascript:void(0);" data-toggle="collapse" data-target="#chart_dr"><i class="icon-picture mr-10"></i>Gestion particuliers <i class="fa fa-fw fa-angle-down"></i></span></a>
						<ul id="chart_dr" class="collapse collapse-level-1">
							<li>
								<a class="active" href="{{ route('particuliers.liste') }}">Liste des particuliers</a>
							</li>
							<li>
								<a href="{{ route('particuliers.create') }}">Nouveau particulier</a>
							</li>
						</ul>
					</li>

                    <li>
						<a  class="active" href="javascript:void(0);" data-toggle="collapse" data-target="#invoice_dr"><i class="icon-picture mr-10"></i>Gestion d'Entreprise <i class="fa fa-fw fa-angle-down"></i></span></a>
						<ul id="invoice_dr" class="collapse collapse-level-1">
							<li>
								<a class="active" href="{{ route('entreprises.liste') }}">Liste des Entreprises</a>
							</li>
							<li>
								<a href="{{ route('entreprises.create') }}">Nouvelle Entreprise</a>
							</li>
						</ul>
					</li>

				</ul>
			</div>
			<!-- /Left Sidebar Menu -->





            <!-- Main Content -->
		<div class="page-wrapper">
            <div class="container-fluid">

				<!-- Title -->
				<div class="row heading-bg  bg-yellow">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						<h5 class="txt-light">STATISTIQUE</h5>
					</div>
				</div>
				<!-- /Title -->


			<!-- Row -->
				<div class="row">
					<div class="col-lg-3 col-md-4 col-sm-5 col-xs-12">
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box bg-red">
										<div class="row ma-0">
											<div class="col-xs-5 text-center pa-0 icon-wrap-left">
												<i class="fa fa-car txt-light"></i>
											</div>
											<div class="col-xs-7 text-center data-wrap-right">
												<h6 class="txt-light"><strong>NOMBRE DE RESERVATION DE VÉHICULE</strong></h6>
												<span class="txt-light counter counter-anim">35</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box bg-yellow">
										<div class="row ma-0">
											<div class="col-xs-5 text-center pa-0 icon-wrap-left">
												<i class="fa fa-user txt-light"></i>
											</div>
											<div class="col-xs-7 text-center data-wrap-right">
												<h6 class="txt-light"><strong>NOMBRE DE CLIENTS</strong></h6>
												<span class="txt-light counter">8</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box bg-red">
										<div class="row ma-0">
											<div class="col-xs-5 text-center pa-0 icon-wrap-left">
												<i class="fa fa-car txt-light"></i>
											</div>
											<div class="col-xs-7 text-center data-wrap-right">
												<h6 class="txt-light"><strong>VÉHICULE DISPONIBLE</strong></h6>
												<span class="txt-light counter counter-anim">35</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				<!-- Bordered Table -->
					<div class="col-lg-9 col-md-8 col-sm-7 col-xs-12">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Status des Projets</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="table-wrap">
										<div class="table-responsive">
										  <table class="table table-hover table-bordered mb-0">
											<thead>
											  <tr>
												<th>Évènements</th>
												<th>Progression</th>

												</tr>
											</thead>
											<tbody>

											  <tr>
												<td>CMVM Digitisation of paper records</td>
												<td><div class="progress progress-xs mb-0 ">
													<div class="progress-bar progress-bar-danger" style="width: 35%"></div>
												  </div></td>
											  </tr>

											  <tr>
												<td>Data management plans</td>
												<td><div class="progress progress-xs mb-0 ">
													<div class="progress-bar progress-bar-warning" style="width: 50%"></div>
												  </div></td>
											  </tr>

											  <tr>
												<td>REF readiness</td>
												<td><div class="progress progress-xs mb-0 ">
													<div class="progress-bar progress-bar-success" style="width: 100%"></div>
												  </div></td>
											  </tr>

											  <tr>
												<td>Storage Strategy</td>
												<td><div class="progress progress-xs mb-0 ">
													<div class="progress-bar progress-bar-primary" style="width: 70%"></div>
												  </div></td>
											  </tr>

											  <tr>
												<td>Network Infrastructure strategy</td>
												<td><div class="progress progress-xs mb-0 ">
													<div class="progress-bar progress-bar-primary" style="width: 85%"></div>
												  </div></td>
											 </tr>

											  <tr>
												<td>Flexible Server hosting</td>
												<td><div class="progress progress-xs mb-0 ">
													<div class="progress-bar progress-bar-warning" style="width: 50%"></div>
												  </div></td>
											  </tr>

											   <tr>
												<td>Virtual Desktop software access</td>
												<td><div class="progress progress-xs mb-0 ">
													<div class="progress-bar progress-bar-warning" style="width: 50%"></div>
												  </div></td>
											    </tr>
											</tbody>
										  </table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Bordered Table -->
				</div>
				<!-- Row -->

        <div>
			<!-- Footer -->
			<footer class="footer container-fluid pl-30 pr-30">
				<div class="row">
					<div class="col-sm-5">
						<a href="index.html" class="brand mr-30"><img src="dist/img/logo-sm.png" alt="logo"/></a>
					</div>
					<div class="col-sm-7 text-right">
						<p>2021 &copy; Réservation et Entretien de Véhicule</p>
					</div>
				</div>
			</footer>
			<!-- /Footer -->

		</div>
        <!-- /Main Content -->

     <!-- /#wrapper -->

	 <!-- JavaScript -->

     <!-- jQuery -->
     <script src="{{ asset('vendors/bower_components/jquery/dist/jquery.min.js') }} "></script>

     <!-- Bootstrap Core JavaScript -->
     <script src="{{ asset('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }} "></script>

	 <!-- Data table JavaScript -->
	 <script src="{{ asset('vendors/bower_components/datatables/media/js/jquery.dataTables.min.js') }} "></script>

	 <!-- Slimscroll JavaScript -->
	 <script src="{{ asset('dist/js/jquery.slimscroll.js') }} "></script>

	 <!-- simpleWeather JavaScript -->
	 <script src="{{ asset('vendors/bower_components/moment/min/moment.min.js') }} "></script>
	 <script src="{{ asset('vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js') }} "></script>
	 <script src="{{ asset('dist/js/simpleweather-data.js') }} "></script>

	 <!-- Progressbar Animation JavaScript -->
	 <script src="{{ asset('vendors/bower_components/waypoints/lib/jquery.waypoints.min.js') }} "></script>
	 <script src="{{ asset('vendors/bower_components/Counter-Up/jquery.counterup.min.js') }} "></script>

	 <!-- Fancy Dropdown JS -->
	 <script src="{{ asset('dist/js/dropdown-bootstrap-extended.js') }} "></script>



	 <!-- Morris Charts JavaScript -->
     <script src="{{ asset('vendors/bower_components/raphael/raphael.min.js') }} "></script>
     <script src="{{ asset('vendors/bower_components/morris.js/morris.min.js') }} "></script>
     <script src="{{ asset('dist/js/morris-data.js') }} "></script>

	 <script src="{{ asset('vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js') }} "></script>

	 <!-- Init JavaScript -->
	 <script src="{{ asset('dist/js/init.js') }} "></script>

     @yield("scripts")

    @livewireScripts

</body>


<!-- Mirrored from hencework.com/theme/kenny/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Dec 2020 15:04:45 GMT -->
</html>
