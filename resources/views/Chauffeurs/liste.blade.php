@extends("layouts.master")

@section("styles")

@endsection

@section("content")
    <!-- Title -->
    <div class="row heading-bg  bg-red">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-light">Gestion des Chauffeurs</h5>
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
                        <h6 class="panel-title txt-dark"><u>Liste des chauffeurs</u></h6>
                    </div>
                    <div class="pull-right">
                        <a href="{{ route('chauffeurs.create') }}" class="btn btn-default btn-rounded">Nouveau Chauffeur</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">

                        <div class="table-wrap">
                            <div class="table-responsive">
                                <div id="datable_1_wrapper" class="dataTables_wrapper"><div class="dataTables_length" id="datable_1_length"><label>Show <select name="datable_1_length" aria-controls="datable_1" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div><div id="datable_1_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="datable_1"></label></div><table id="datable_1" class="table table-hover display  pb-30 dataTable" role="grid" aria-describedby="datable_1_info">
                                    <thead>
                                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending" style="width: 90px;">#</th><th class="sorting_asc" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 210px;">Nom</th><th class="sorting_asc" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="lastName: activate to sort column descending" style="width: 210px;">Prenom</th><th class="sorting_asc" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 210px;">Téléphone</th><th class="sorting" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" aria-label="Number: activate to sort column ascending" style="width: 210px;">Numero CNI</th><th class="sorting" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 500px;">Action</th></tr>
                                    </thead>
                                    <tfoot>
                                        <tr><th rowspan="1" colspan="1">#</th><th rowspan="1" colspan="1">Nom</th><th rowspan="1" colspan="1">Prenom</th><th rowspan="1" colspan="1">Téléphone</th><th rowspan="1" colspan="1">Numéro CNI</th><th rowspan="1" colspan="1">Action</th></tr>
                                    </tfoot>
                                    @foreach ($chauffeurs as $chauffeur)

                                    <tbody>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">{{ $loop->index + 1 }}</td>
                                            <td>{{ $chauffeur->nom }}</td>
                                            <td>{{ $chauffeur->prenom }}</td>
                                            <td>{{ $chauffeur->telChauffeur }}</td>
                                            <td>{{ $chauffeur->cniChauffeur }}</td>
                                            <td>
                                                <button class="btn btn-info btn-anim"><i class="fa fa-pencil-square-o"></i><span class="btn-text">Modifier</span></button>
                                                <button class="btn btn-danger btn-anim"><i class="fa fa-trash-o"></i><span class="btn-text">Supprimer</span></button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>

                                </table><div class="dataTables_info" id="datable_1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div><div class="dataTables_paginate paging_simple_numbers" id="datable_1_paginate"><a class="paginate_button previous disabled" aria-controls="datable_1" data-dt-idx="0" tabindex="0" id="datable_1_previous">Previous</a><span><a class="paginate_button current" aria-controls="datable_1" data-dt-idx="1" tabindex="0">1</a><a class="paginate_button " aria-controls="datable_1" data-dt-idx="2" tabindex="0">2</a><a class="paginate_button " aria-controls="datable_1" data-dt-idx="3" tabindex="0">3</a><a class="paginate_button " aria-controls="datable_1" data-dt-idx="4" tabindex="0">4</a><a class="paginate_button " aria-controls="datable_1" data-dt-idx="5" tabindex="0">5</a><a class="paginate_button " aria-controls="datable_1" data-dt-idx="6" tabindex="0">6</a></span><a class="paginate_button next" aria-controls="datable_1" data-dt-idx="7" tabindex="0" id="datable_1_next">Next</a></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
