@extends("layouts.master")

@section("styles")

@endsection

@section("content")
    <!-- Title -->
    <div class="row heading-bg  bg-primary">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-light">Gestion des Maintenances</h5>
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
                        <h6 class="panel-title txt-dark"><u>Liste des Maintenances</u></h6>
                    </div>
                    <div class="pull-right">
                        <a href="{{ route('Maintenances.create') }}" class="btn btn-default btn-rounded"><i class="icon-user-follow mr-10"></i>Nouvelle Maintenance</a>
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
                                        <tr role="row">
                                            <th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending" style="width: 20px;">#</th>
                                            <th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 200px;">Description Maintenance</th>
                                            <th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="localisation: activate to sort column descending" style="width: 200px;">Nom du Garage</th>
                                            <th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="localisation: activate to sort column descending" style="width: 200px;">Vehicule</th>
                                            <th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 200px;">Action</th></tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($maintenances as $maintenance)
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">M{{ $loop->index + 1 }}</td>
                                            <td>{{ $maintenance->libelleMaintenance }}</td>
                                            <td>{{ $maintenance->grge->nom }}</td>
                                            <td>{{ $maintenance->vhcle->immatriculationVehicule }}</td>
                                            <td>
                                                <a href="{{ route('Maintenances.modifier', ['id'=>$maintenance->id]) }}" class="btn btn-info btn-anim"><i class="fa fa-pencil-square-o"></i><span class="btn-text">Modifier</span></a>
                                                <a href="{{ route('Maintenances.delete', ['id'=>$maintenance->id]) }}" class="btn btn-danger btn-anim"><i class="fa fa-trash-o"></i><span class="btn-text">Supprimer</span></a>
                                            </td>
                                        </tr>
                                            @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr><th rowspan="1" colspan="1">#</th>
                                            <th rowspan="1" colspan="1">Description Maintenance</th>
                                            <th rowspan="1" colspan="1">Nom Garage</th>
                                            <th rowspan="1" colspan="1">Vehicule</th>
                                            <th rowspan="1" colspan="1">Action</th></tr>
                                    </tfoot>

                                </table>
                                <div class="dataTables_info" id="datable_1_info" role="status" aria-live="polite"></div>
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
