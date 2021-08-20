@extends("layouts.master")

@section("styles")

@endsection

@section("content")
    <!-- Title -->
    <div class="row heading-bg  bg-primary">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-light">Gestion des Pièces Defectueuses</h5>
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
        <div class="col-sm-12">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark"><u>Liste des pièces Défectueuses</u></h6>
                    </div>
                    <div class="pull-right">
                        <a href="{{ route('PieceDefectueuse.create') }}" class="btn btn-default btn-rounded"><i class="icon-user-follow mr-10"></i>Nouvelle Pièce</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">

                        <div class="table-wrap">
                            <div class="table-responsive">
                                <div id="datable_1_wrapper" class="dataTables_wrapper"><div class="dataTables_length" id="datable_1_length"></div><div id="datable_1_filter" class="dataTables_filter"><label>Recherche:<input type="search" class="" placeholder="" aria-controls="datable_1"></label></div><table id="datable_1" class="table table-hover display  pb-30 dataTable" role="grid" aria-describedby="datable_1_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending" style="width: 20px;">#</th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 100px;">Nom de pièce</th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="localisation: activate to sort column descending" style="width: 100px;">Nom du fornisseur</th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="localisation: activate to sort column descending" style="width: 150px;">Libellé de la maintenance</th>
                                            <th class="sorting" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 150px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr><th rowspan="1" colspan="1">#</th>
                                            <th rowspan="1" colspan="1">Nom de pièce</th>
                                            <th rowspan="1" colspan="1">Nom du fournisseur</th>
                                            <th rowspan="1" colspan="1">libellé de la maintenance</th>
                                            <th rowspan="1" colspan="1">Action</th>
                                        </tr>
                                    </tfoot>

                                    <tbody>
                                        <tr role="row" class="odd">
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <button class="btn btn-info btn-anim"><i class="fa fa-pencil-square-o"></i><span class="btn-text">Modifier</span></button>
                                                <button class="btn btn-danger btn-anim"><i class="fa fa-trash-o"></i><span class="btn-text">Supprimer</span></button>
                                            </td>
                                        </tr>

                                    </tbody>

                                </table><div class="dataTables_info" id="datable_1_info" role="status" aria-live="polite"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
