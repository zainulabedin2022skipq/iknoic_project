<title>Contact</title>
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
                        User Feedback
                    </h1>

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
                            <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Contact</a>
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
                                                <th>Product Id</th>
                                                <th>User Name</th>
                                                <th>Feedback</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($user_feedback as $value)
                                            <tr >
                                                <td>{{ $value->id }}</td>
                                                <td>{{ $value->product_id }}</td>
                                                <td >{{ $value->user_name }}</td>
                                                <td >{{ $value->user_feedback }}</td>
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
