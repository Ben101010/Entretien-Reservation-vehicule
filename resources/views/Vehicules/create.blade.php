@extends("layouts.master")

@section("styles")
<!-- Bootstrap Colorpicker CSS -->
<link href="{{ asset('vendors/bower_components/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section("content")
    <!-- Title -->
    <div class="row heading-bg  bg-primary">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-light">Gestion des VEHICULES</h5>
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


<form action={{ route('Vehicules.store') }} method = "POST">

        @csrf

    <div class="row">
        <div class="text-align center col-8 text-color white">
            @if (session()->has('success'))
                <div class="alert alert-success ">
                    <p>
                        <h3>{{ session()->get('success') }}</h3>
                    </p>
                </div>
            @endif
        </div>

        <div class="col-md-10">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark"><u>Ajouter un vehicule</u></h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <div class="form-wrap">
                                    <form>
                                        <div class="form-group col-md-6">
                                            <label class="control-label mb-10" for="exampleInputuname_1">Marque</label>
                                            <select class="form-control" name="marque" >
                                                <option selected disable>--Selectionner--</option>
                                                    @foreach ($marques as $marque)
                                                            <option value="$marque->id">{{ $marque->libelleMarque }}</option>
                                                    @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label mb-10" for="exampleInputEmail_1">Modèle</label>
                                            <select class="form-control" name="modele">
                                                <option selected disable>--Selectionner--</option>
                                                    @foreach ($modeles as $modele )
                                                        <option value="$modele->id">{{ $modele->libelleVehicule }}</option>
                                                    @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label mb-10" for="exampleInputuname_1">Immatriculation</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="icon-user"></i></div>
                                                <input type="text" name="immatriculationVehicule" class="form-control" id="exampleInputuname_1" required>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label mb-10" for="exampleInputuname_1">Energie</label>
                                            <select class="form-control" name="energie">
                                                <option selected disabled>--Selectionner--</option>
                                                <option value="essence">Essence</option>
                                                <option value="diesel">Diesel</option>
                                                <option value="electrique">Electrique</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label mb-10" for="exampleInputuname_1">Couleur</label>
                                            <div  class="colorpicker input-group colorpicker-component">
                                                <input type="text" value="#00AABB" class="form-control" />
                                                <span class="input-group-addon"><i></i></span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label mb-10" for="exampleInputEmail_1">Type Transmission</label>
                                            <select class="form-control" name="typeTransmission">
                                                <option selected disabled>--Selectionner--</option>
                                                <option value="manuel">Manuel</option>
                                                <option value="automatique">Automatique</option>
                                            </select>
                                        </div>

                                        <button type="submit" class="btn btn-success mr-10">Enregistrer</button>
                                        <a  href="{{ route('Vehicules.liste') }}" class="btn btn-default">Liste des vehicules</a>
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

@section('scripts')


@endsection
