<title>Admin & User</title>
<base href="/public">
@include('dashboard/header');
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>
                        Admin & Users
                    </h1>
                    <div class="mt-5"> @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif</div>
                    <div class="mt-5"> @if(session()->has('delete'))
                        <div class="alert alert-success">
                            {{ session()->get('delete') }}
                        </div>
                    @endif</div>
                    <div class="mt-5"> @if(session()->has('updata'))
                        <div class="alert alert-success">
                            {{ session()->get('update') }}
                        </div>
                    @endif</div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- ./row -->
    <div class="row mt-4">
        <div class="col-12 col-sm-12">
            <div class="card card-tabs">
                <div class="card-header p-0 pt-1">
                    <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Admin & User</a>
                        </li>

                    </ul>
                </div>
                <div class="tab-content" id="custom-tabs-one-tabContent">
                    <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class=" table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead class="col-xs-12">
                                            <tr>
                                                <th>Id</th>
                                                <th>User Name</th>
                                                <th>User Email</th>
                                                <th>Status</th>
                                                {{-- <th>Long Deatil</th> --}}
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($user as $value)
                                            <tr >
                                                <td>{{ $value->id }}</td>

                                                <td>{{ $value->name }}</td>

                                                <td class="text-primary">{{ $value->email }}</td>

                                                @if ($value->level=="admin")
                                                <td class="bg-danger">{{ $value->level }}</td>
                                                @else
                                                <td class="bg-success">{{ $value->level }}</td>
                                                @endif

                                                {{-- <td>{{ $latest_news->latest_news_long_detail }}</td> --}}
                                                <td>
                                                    <div class="btn-group" role="group">
                                                        <a href="" class="btn btn-warning btn-xs"> <i class="fa fa-eye"></i>&nbsp; View</a>&nbsp;&nbsp;
                                                        <a href="/dashboard/edit_user/{{ $value->id }}" class="btn btn-info btn-xs"><i class="fa fa-edit"></i>&nbsp;Edit</a>&nbsp;&nbsp;
                                                        <a href="/dashboard/delete_user/{{ $value->id }}" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
@include('dashboard/footer');
