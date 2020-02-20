@extends('admin.dashboards.master')
@section('content')
    <!-- Page Content -->
<main class="main">
    <div id="page-wrapper">
        <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"> Create
                            <small>products</small>
                        </h1>
                    <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Product Category</label>
                            @foreach($productType as $item)
                                <label class="radio-inline">
                                    <input name="product_type_id" value="{{ $item->id }}" type="radio">{{ $item->name }}
                                </label>
                            @endforeach
                            @if ($errors->has('product_type_id'))
                                <div class="alert alert-danger">
                                    <strong>{{$errors->first('product_type_id')}}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" value="{{ old('name') }}" name="name" placeholder="Please Enter Name" />
                            @if ($errors->has('name'))
                                <div class="alert alert-danger">
                                    <strong>{{$errors->first('name')}}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" min="0" value="{{ old('price') }}" class="form-control" name="price" placeholder="Please Enter Price" />
                            @if ($errors->has('price'))
                                <div class="alert alert-danger">
                                    <strong>{{$errors->first('price')}}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Code</label>
                            <input type="text" min="0" value="{{ old('code') }}" class="form-control" name="code" placeholder="Please Enter Code" />
                            @if ($errors->has('code'))
                                <div class="alert alert-danger">
                                    <strong>{{$errors->first('code')}}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Quantity</label>
                            <input type="text" min="0" value="{{ old('quantity') }}" class="form-control" name="quantity" placeholder="Please Enter Quantity" />
                            @if ($errors->has('quantity'))
                                <div class="alert alert-danger">
                                    <strong>{{$errors->first('quantity')}}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Up Image Product</label>
                            <input type="file" accept="image/*" value="{{ old('image') }}" name="image">
                            @if ($errors->has('image'))
                                <div class="alert alert-danger">
                                    <strong>{{$errors->first('image')}}</strong>
                                </div>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-default">Create</button> 
                    <form>
                    </div>
                </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
</main>
    <!-- /#page-wrapper -->
@endsection