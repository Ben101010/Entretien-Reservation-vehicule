@extends("layouts.master")

@section("styles")

@endsection

@section("content")
    <!-- Title -->
    <div class="row heading-bg  bg-primary">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-light">Création de nouvelle pièce</h5>
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

        <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark"><u>Ajouter une pièce</u></h6>
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
                                            <label class="control-label mb-10" for="exampleInputuname_1">Nom de la pièce</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="icon-user"></i></div>
                                                <input type="text" name="nom" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label mb-10" for="exampleInputEmail_1">Nom Fournisseur</label>
                                            <select class="form-control" name="fournisseur" >
                                                <option selected disable>--Selectionner--</option>
                                                    @foreach ($fournisseurs as $fournisseur)
                                                            <option value="$fournisseur->id">{{ $fournisseur->nom }}</option>
                                                    @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label mb-10" for="exampleInputEmail_1">Type de maintenance</label>
                                            <select class="form-control" name="maintenance" >
                                                <option selected disable>--Selectionner--</option>
                                                    @foreach ($maintenances as $maintenance)
                                                            <option value="$maintenance->id">{{ $maintenance->libelleMaintenance }}</option>
                                                    @endforeach
                                            </select>
                                        </div>

                                        <button type="submit" class="btn btn-success mr-10">Enregistrer</button>
                                        <a  href="{{ route('PieceDefectueuse.liste') }}" class="btn btn-default">Liste des pièces</a>
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
