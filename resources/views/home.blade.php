@extends('layouts.back')

@section('subtitle')
Dashboard
@endsection
@section('content')
<!-- Content -->
<section class="section-wrap">
    <div class="container">
         <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="{{ route('articles.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-bell fa-fw fa-sm text-white-50"></i> Add New Article</a>
        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Articles</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$articles->count()}}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Categories</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$categories->count()}}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pages
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$pages->count()}}</div>
                                    </div>
                                    <div class="col">
                                        <div class="progress progress-sm mr-2">
                                            <div class="progress-bar bg-info" role="progressbar"
                                                style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Comments</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$comments->count()}}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Forms -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h5 class="m-0 font-weight-bold text-primary">New Articles</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th> 
                                <th>Judul</th>
                                <th>Created</th>
                                <th>Komentar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($articles->take(2) as $item)
                            <tr>
                                <td><img src="{{asset($item->images)}}" alt="" width="40px"></td>
                                <td><a href="{{route('articles.show', $item->id)}}">{{$item->title}}</a></td>
                                <td>{{ Carbon\Carbon::parse($item->created_at)->format('d-M-Y')}}</td>
                                <td><span class="badge badge-success">{{$item->comment->count()}}</span></td>
                            </tr>
                            @endforeach 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h5 class="m-0 font-weight-bold text-primary">Pages</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover" id="dataTable1" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>#</th> 
                                        <th>Judul</th>
                                        <th>Created</th>
                                        <th>Komentar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($articles->take(2) as $item)
                                    <tr>
                                        <td><img src="{{asset($item->images)}}" alt="" width="40px"></td>
                                        <td><a href="{{route('articles.show', $item->id)}}">{{$item->title}}</a></td>
                                        <td>{{ Carbon\Carbon::parse($item->created_at)->format('d-M-Y')}}</td>
                                        <td><span class="badge badge-success">{{$item->comment->count()}}</span></td>
                                    </tr>
                                    @endforeach 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h5 class="m-0 font-weight-bold text-primary">Category</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover" id="dataTable2" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> <!-- end content -->
@endsection
@push('styles')
<link href="{{ asset('templates/satu/css/all.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{ asset('templates/satu/css/sb-admin-2.min.css')}}" rel="stylesheet">
<link href="{{ asset('templates/satu/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endpush
@push('scripts')
<script src="{{ asset('templates/satu/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('templates/satu/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('templates/satu/js/sb-admin-2.min.js')}}"></script>
<script>
$(document).ready(function() {
  $('#dataTable').DataTable();
});

$(document).ready(function() {
  $('#dataTable1').DataTable();
});

$(document).ready(function() {
  $('#dataTable2').DataTable();
});
</script>
@endpush