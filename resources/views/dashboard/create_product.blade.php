<title>All Product</title>
<base href="/public">
@include('dashboard/header');
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>
                        Product
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
                            <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add Product</a>
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
                                                <th>Product Picture</th>
                                                <th>Product Name</th>
                                                <th>Product Price</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($product as $value)
                                            <tr>
                                                <td>{{ $value->id }}</td>
                                                <td> <img height="100px" width="200px" src="all_product\{{ $value->product_picture }}" alt="" srcset=""></td>
                                                <td>{{ $value->product_name }}</td>
                                                <td>{{ $value->product_price }}</td>
                                                <td>
                                                    <div class="btn-group" role="group">
                                                        <button href="" class="btn btn-warning btn-xs"> <i class="fa fa-eye"></i>&nbsp; View</button>&nbsp;&nbsp;

                                                         {{-- <button type="button" data-id="{{ $value->id }}" data-bs-toggle="modal" data-bs-target="#myModal" class="btn btn-info btn-xs edit-button"><i class="fa fa-edit"></i>&nbsp;Edit</button>&nbsp;&nbsp; --}}

                                                         <button  class="btn btn-primary edit-button" data-bs-toggle="modal" data-bs-target="#edit-modal" data-id="{{ $value->id }}" data-action="/dashboard/edit_product/{{ $value->id }}">Edit</button>

                                                        <button class="btn btn-danger btn-xs delete-product" data-id="{{ $value->id }}"><i class="fa fa-trash"></i></button>

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
                    <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                        <div class="col-md-12">
                            <div class="card ">
                        <form action="/store_product" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-6 p-3">
                                            <label for="exampleInputPassword1">Product Name :</label>
                                            <input type="text" name="product_name" class="form-control" id="exampleInputePassword1" placeholder="Enter Product Name">
                                        </div>
                                        <div class="col-sm-6 p-3">
                                            <label for="">Product detail :</label>
                                            <input type="text" class="form-control" name="product_detail" placeholder="Enter Product Detail">
                                        </div>
                                        <div class="col-sm-6 p-3">
                                            <label for="">Product Price :</label>
                                            <input type="number" class="form-control" name="product_price" placeholder="Enter Product Price">
                                        </div>
                                        <div class="col-sm-4 p-3">
                                            <label for="exampleInputPassword1">Product1 Picture :</label>
                                            <input type="file" name="product_picture" class="form-control" id="exampleInputPassword1">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
</div>
@include('dashboard/footer');

