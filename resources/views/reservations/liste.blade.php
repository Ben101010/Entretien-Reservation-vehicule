@extends("layouts.master")

@section("styles")

@endsection

@section("content")
    <!-- Title -->
    <div class="row heading-bg  bg-primary">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-light">Gestion des entreprises</h5>
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
                        <h6 class="panel-title txt-dark"> <u>Liste des reservations</u></h6>
                    </div>
                    <div class="pull-right">
                        <a href="{{ route('reservations.create') }}" class="btn btn-default btn-rounded"><i class="icon-user-follow mr-10"></i>Nouvelle reservation</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">

                        <div class="table-wrap table-striped">
                            <div class="table-responsive">
                                <div id="datable_1_wrapper" class="dataTables_wrapper"><div class="dataTables_length" id="datable_1_length"></div><table id="datable_1" class="table table-hover display  pb-30 dataTable" role="grid" aria-describedby="datable_1_info">
                                    <thead>
                                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending" style="width: 90px;">#</th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 210px;">Client</th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="localisation: activate to sort column descending" style="width: 210px;">J-reservation</th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Numéro: activate to sort column descending" style="width: 210px;">Debut-Reservation</th>
                                            <th class="sorting" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 210px;">Fin Reservation</th>
                                            <th class="sorting" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 210px;">Coût Reservation</th>
                                            <th class="sorting" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 210px;">Status</th>
                                            <th class="sorting" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 500px;">Action</th></tr>
                                    </thead>
                                    <tfoot>
                                        <tr><th rowspan="1" colspan="1">#</th>
                                            <th rowspan="1" colspan="1">Client</th>
                                            <th rowspan="1" colspan="1">J-Reservation</th>
                                            <th rowspan="1" colspan="1">Debut-Reservation</th>
                                            <th rowspan="1" colspan="1">Fin-Reservation</th>
                                            <th rowspan="1" colspan="1">Coût Resrvation</th>
                                            <th rowspan="1" colspan="1">Status</th>
                                            <th rowspan="1" colspan="1">Action</th></tr>
                                    </tfoot>


                                    <tbody>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1"></td>
                                            <td></td>
                                            <td></td>
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

@section('scripts')
    <script>
    $(document).ready( function () {
            $('#datable_1').dataTable();
        } );
    </script>

@endsection
