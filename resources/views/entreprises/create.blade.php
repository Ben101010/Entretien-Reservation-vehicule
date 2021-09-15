@extends("layouts.master")

@section("styles")

@endsection

@section("content")
    <!-- Title -->
    <div class="row heading-bg  bg-primary">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-light">Création d'entreprise</h5>
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

    <form action={{ route('entreprises.store') }} method = "POST">

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

         <div class="col-md-10">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark"><u>Créer une entreprise</u></h6>
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
                                            <label class="control-label mb-10" for="exampleInputuname_1">Désignation</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="icon-user"></i></div>
                                                <input type="text" name="designEntreprise" class="form-control" placeholder="désignation" required>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label mb-10" for="exampleInputuname_1">Adresse</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="icon-user"></i></div>
                                                <input type="adress" name="localEntreprise" class="form-control" placeholder="adresse" required>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label mb-10" for="exampleInputuname_1">Numero Compte Contribuable</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="icon-user"></i></div>
                                                <input type="text" name="nccEntreprise" class="form-control" placeholder="numero" required>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label mb-10" for="exampleInputuname_1">Email</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="icon-user"></i></div>
                                                <input type="email" name="emailEntreprise" class="form-control" placeholder="numero" required>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label mb-10" for="exampleInputuname_1">Téléphone1</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="icon-user"></i></div>
                                                <input type="text" name="telEntreprise1" class="form-control" placeholder="(00225)0000000000" required>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label mb-10" for="exampleInputuname_1">Téléphone2</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="icon-user"></i></div>
                                                <input type="text" name="telEntreprise2" class="form-control" placeholder="(00225)0000000000" required>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-success mr-10">Enregistrer</button>
                                        <a  href="{{ route('entreprises.liste') }}" class="btn btn-default">Liste des entreprises</a>
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
