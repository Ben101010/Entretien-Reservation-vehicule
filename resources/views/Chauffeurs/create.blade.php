@extends("layouts.master")

@section("styles")

@endsection

@section("content")
    <!-- Title -->
    <div class="row heading-bg  bg-primary">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-light">Création de nouvau Chauffeur</h5>
        </div>
        <!-- Breadcrumb -->
        {{-- <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="index.html">Dashboard</a></li>
                <li><a href="#"><span>dashboard</span></a></li>
                <li class="active"><span>analytical</span></li>
            </ol>
        </div> --}}
        <!-- /Breadcrumb -->
    </div>
    <!-- /Title -->

    <form action={{ route('chauffeurs.store') }} method = "POST">

        @csrf

        <div class="row">
            <div class="text-align center col-8 text-color white">
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        <p>
                            <h3>{{ session()->get('success') }}</h3>
                        </p>
                    </div>
                @endif
            </div>


        <div class="col-md-8">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark"><u>Créer un nouveau Chauffeur</u></h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <div class="form-wrap">
                                    <form>
                                        <div class="form-group">
                                            <label class="control-label mb-10" for="exampleInputuname_1">Nom</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="icon-user"></i></div>
                                                <input type="text" name="nom" class="form-control" placeholder="Nom" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label mb-10" for="exampleInputuname_1">Prenom</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="icon-user"></i></div>
                                                <input type="text" name="prenom" class="form-control" placeholder="prenom" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label mb-10" for="exampleInputEmail_1">Téléphone</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="icon-envelope-open"></i></div>
                                                <input type="text" name="telChauffeur" class="form-control" placeholder="+2250000000000"required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label mb-10" for="exampleInputpwd_1">Numero CNI</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="icon-lock"></i></div>
                                                <input type="text" name="cniChauffeur" class="form-control" placeholder="00 000 000000" required>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-success mr-10">Enregistrer</button>
                                        <a  href="{{ route('chauffeurs.liste') }}" class="btn btn-default">Liste des chauffeurs</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
