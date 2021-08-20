@extends("layouts.master")

@section("styles")

@endsection

@section("content")
    <!-- Title -->
    <div class="row heading-bg  bg-primary">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-light">Création de nouveau Fournisseur</h5>
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

<form action={{ route('employes.store') }} method = "POST">

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
                        <h6 class="panel-title txt-dark"><u>Ajouter un Fournisseur</u></h6>
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
                                                <input type="text" name="nom" class="form-control" placeholder="nom" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label mb-10" for="exampleInputuname_1">Prenom</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="icon-user"></i></div>
                                                <input type="text" name="prenom"  class="form-control" id="exampleInputuname_1" placeholder="prenom" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label mb-10" for="exampleInputuname_1">Téléphone</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="icon-user"></i></div>
                                                <input type="numeric" name="telFournisseur"  class="form-control" id="exampleInputuname_1" placeholder="(00225)0000000000" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label mb-10" for="exampleInputuname_1">Adresse</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="icon-user"></i></div>
                                                <input type="adresse" name="addresseFournisseur"  class="form-control" id="exampleInputuname_1" placeholder="Adresse" required>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success mr-10">Enregistrer</button>
                                        <a  href="{{ route('fournisseurs.liste') }}" class="btn btn-default">Retourner à la liste des forunisseurs</a>
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
