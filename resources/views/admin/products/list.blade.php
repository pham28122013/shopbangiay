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
                    <a href="{{route('products.create')}}">
                        <button class="btn btn-sm btn-primary   rounded-0 new-users">
                            Add new Product
                        </button>
                    </a>
                </div>
                <!-- /.col-lg-12 -->
                <div style="clear: both;"></div>
                <div class="col-lg-12">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>	
                                <strong>{{ $message }}</strong>
                        </div>
                    @elseif ($message = Session::get('failed'))
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>	
                                <strong>{{ $message }}</strong>
                        </div>
                    @endif
                </div>
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr align="center">
                            <th>ID</th>
                            <th>Category</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Code</th>
                            <th>Quantity</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                            <tr class="text-center">
                                <th scope="row">{{$product->id}}</th>
                                <td>{{$product->type->name}}</td>
                                <td>{{$product->name}}</td>
                                <td><?php echo number_format($product->price)?> VNĐ</td>
                                <td>{{$product->code}}</td>
                                <td>{{$product->quantity}}</td> 
                                <td><img width="80px" src="{{ asset(config('define.product_images_path') .$product->images->first()->url) }}"></td>
                                <td class="d-flex align-items-center justify-content-around boder border-bottom-none">
                                <a href="{{route('products.show', $product->id)}}">
                                        <button class="btn btn-sm btn-primary   rounded-0">
                                        Show
                                        </button>
                                    </a>
                                    <a href="{{route('products.edit', $product->id)}}">
                                        <button class="btn btn-sm btn-warning   rounded-0">
                                        Edit
                                        </button>
                                    </a>
                                    <form action="{{route('products.destroy', $product->id)}}" method="post">
                                        <input type="hidden" name="_method" value="delete" /> {{csrf_field()}}
                                        <button class="btn btn-sm btn-danger   rounded-0">
                                        Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-center">{{ $products->links() }}</div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
</main>
    <!-- /#page-wrapper -->
@endsection