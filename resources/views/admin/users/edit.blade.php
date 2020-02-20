@extends('admin.dashboards.master')
@section('content')
    <!-- Page Content -->
<main class="main">
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit
                        <small>user</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    <form action="{{route('users.update',$user->id)}}" method="POST">
                        <input type="hidden" name="_method" value="put" /> 
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" value="{{$user->name}}" name="name" placeholder="" />
                            @if ($errors->has('name'))
                                <div class="alert alert-danger">
                                    <strong>{{$errors->first('name')}}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input  class="form-control" value="{{$user->phone}}" name="phone" placeholder="" />
                            @if ($errors->has('phone'))
                                <div class="alert alert-danger">
                                    <strong>{{$errors->first('phone')}}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" value="{{$user->email}}" class="form-control" name="email" placeholder="" />
                            @if ($errors->has('email'))
                                <div class="alert alert-danger">
                                    <strong>{{$errors->first('email')}}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <label class="radio-inline">
                                <input  @if($user->is_active == App\Models\User::INACTIVE) checked @endif
                                name="is_active" value="{{App\Models\User::INACTIVE}}" type="radio"> Inactive
                            </label>
                            <label class="radio-inline">
                                <input @if ($user->is_active == App\Models\User::ACTIVE) checked @endif 
                                name="is_active" value="{{App\Models\User::ACTIVE}}" type="radio"> Active
                            </label>
                        </div>
                        <button type="submit" class="btn btn-default">Update</button>
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