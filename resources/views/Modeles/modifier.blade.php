@extends("layouts.master")

@section("styles")

@endsection

@section("content")
    <!-- Title -->
    <div class="row heading-bg  bg-primary">
        <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
            <h5 class="txt-light">Création d'un modèle de Véhicule</h5>
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

    <form action={{ route('modeles.update', ['id'=> $modele->id]) }} method = "POST">

        @csrf

        <div class="row">
            <div class="text-align center col-8 text-color white">
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        <p>
                            <h5>{{ session()->get('success') }}</h5>
                        </p>
                    </div>
                @endif
            </div>

         <div class="col-md-8">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark"><u>Modifier le modèle</u></h6>
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
                                            <label class="control-label mb-10" for="exampleInputuname_1">Modèle du véhicule</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="icon-user"></i></div>
                                                <input type="text" name="libelleVehicule" class="form-control" id="exampleInputuname_1" value="{{$modele->libelleVehicule}}" required>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-success mr-10">Modifier</button>
                                        <a  href="{{ route('modeles.liste') }}" class="btn btn-default">Retourner à la liste des modèles</a>
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
