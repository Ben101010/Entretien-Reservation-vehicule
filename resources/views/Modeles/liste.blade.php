@extends("layouts.master")

@section("styles")

@endsection

@section("content")
    <!-- Title -->
    <div class="row heading-bg  bg-primary">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-light">Gestion des modèles</h5>
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
                        <h6 class="panel-title txt-dark"><u>Listes des modèles de Véhicule</u></h6>
                    </div>
                    <div class="pull-right">
                        <a href="{{ route('modeles.create') }}" class="btn btn-default btn-rounded"><i class="icon-user-follow mr-10"></i>Nouveau modèle</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">

                        <div class="text-align center col-8 text-color">
                            @if (session()->has('successDelete'))
                                <div class="alert alert-danger">
                                    <p>
                                        <h5>{{ session()->get('successDelete') }}</h5>
                                    </p>
                                </div>
                            @endif
                        </div>

                        <div class="table-wrap">
                            <div class="table-responsive">
                                <div id="datable_1_wrapper" class="dataTables_wrapper"><div class="dataTables_length" id="datable_1_length"></div><table id="datable_1" class="table table-hover display  pb-30 dataTable" role="grid" aria-describedby="datable_1_info">
                                    <thead>
                                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending" style="width: 90px;">#</th><th class="sorting_asc" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Marque: activate to sort column descending" style="width: 210px;">Le modèle du véhicule</th><th class="sorting" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 500px;">Action</th></tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($modeles as $modele)
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">MO{{ $loop->index + 1 }}</td>
                                                <td>{{ $modele->libelleVehicule }}</td>
                                                <td>
                                                    <a href="{{ route('modeles.modifier', ['id'=>$modele->id]) }}" class="btn btn-info btn-anim"><i class="fa fa-pencil-square-o"></i><span class="btn-text">Modifier</span></a>
                                                    <a href="{{ route('modeles.delete', ['id'=>$modele->id]) }}" class="btn btn-danger btn-anim"><i class="fa fa-trash-o"></i><span class="btn-text">Supprimer</span></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th rowspan="1" colspan="1">#</th>
                                            <th rowspan="1" colspan="1">La modèle du Véhicule</th>
                                            <th rowspan="1" colspan="1">Action</th>
                                        </tr>
                                    </tfoot>

                                </table><div class="dataTables_info" id="datable_1_info" role="status" aria-live="polite"></div><div class="dataTables_paginate paging_simple_numbers" id="datable_1_paginate"><a class="paginate_button previous disabled" aria-controls="datable_1" data-dt-idx="0" tabindex="0" id="datable_1_previous"></div> <center>{{$modeles->links()}}</center></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('scripts')
    <script>
    $(document).ready( function () {
            $('#datable_1').dataTable();
        } );
    </script>

@endsection
