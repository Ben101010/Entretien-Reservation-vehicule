@extends("layouts.master")

@section("styles")

@endsection

@section("content")
    <!-- Title -->
    <div class="row heading-bg  bg-primary">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-light">Création de nouvelles Factures</h5>
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
    <form action={{ route('marques.store') }} method = "POST">

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
                        <h6 class="panel-title txt-dark"> <u>Nouveau Libelle</u> </h6>
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
                                            <label class="control-label mb-10" for="exampleInputuname_1">Libelle Facture</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="icon-user"></i></div>
                                                <input type="text" name="libellefacture" class="form-control" placeholder="libelle" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label mb-10" for="exampleInputuname_1">Montant TTC</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="icon-user"></i></div>
                                                <input type="text" name="libellefacture" class="form-control" placeholder="libelle" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label mb-10" for="exampleInputuname_1">Nom du Garage</label>
                                            <select class="form-control">
                                                <option>----</option>
                                                <option></option>
                                                <option></option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label mb-10" for="exampleInputuname_1">Adresse du Garage</label>
                                            <select class="form-control">
                                                <option>----</option>
                                                <option></option>
                                                <option></option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label mb-10" for="exampleInputuname_1">Libelle maintenance</label>
                                            <select class="form-control">
                                                <option>----</option>
                                                <option></option>
                                                <option></option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label mb-10" for="exampleInputuname_1">Vehicule</label>
                                            <select class="form-control">
                                                <option>----</option>
                                                <option></option>
                                                <option></option>
                                            </select>
                                        </div>


                                        <button type="submit" class="btn btn-success mr-10">Enregistrer</button>
                                        <a  href="{{ route('Factures.liste') }}" class="btn btn-default">Retourner à la liste des factures</a>
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
