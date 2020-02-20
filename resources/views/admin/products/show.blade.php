@extends('admin.dashboards.master')
@section('content')
    <!-- Page Content -->
<main class="main">
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="page-header">LIST
                        <small>products</small>
                    </h1>
                </div>
                <div class="col-lg-6">
                    <a href="">
                        <button class="btn btn-sm btn-primary   rounded-0 new-users">
                            Add new Product
                        </button>
                    </a>
                </div>
                <!-- /.col-lg-12 -->
                <div style="clear: both;"></div>
               
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr align="center">
                            <th>ID</th>
                            <th>Category</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Code</th>
                            <th>Quantity</th>
                            <th>Size</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <th scope="row">{{$product->id}}</th>
                            <td>{{$product->type->name}}</td>
                            <td>{{$product->name}}</td>
                            <td><?php echo number_format($product->price)?> VNĐ</td>
                            <td>{{$product->code}}</td>
                            <td>{{$product->quantity}}</td>
                            <th>{{$product->sizes->first()->size}}</th>
                            <td><img width="80px" src="{{ asset(config('define.product_images_path').$product->images->first()->url) }}"></td>
                            <td class="d-flex align-items-center justify-content-around boder border-bottom-none">
                                <a href="">
                                    <button class="btn btn-sm btn-warning   rounded-0">
                                    Edit
                                    </button>
                                </a>
                                <form action="" method="post">
                                    <input type="hidden" name="_method" value="delete" /> {{csrf_field()}}
                                    <button class="btn btn-sm btn-danger   rounded-0">
                                    Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
</main>
    <!-- /#page-wrapper -->
@endsection