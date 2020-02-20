@extends('admin.dashboards.master')
@section('content')
    <!-- Page Content -->
<main class="main">
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Show
                        <small>users</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div style="clear: both;"></div>
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr align="center">
                            <th>ID</th>
                            <th>Role</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>E-mail</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr class="text-center">
                        <th scope="row">{{$user->id}}</th>
                        <td>     
                            @if ($user->role_id == App\Models\User::ROLE['ADMIN'] ) 
                                    <button class="btn btn-sm btn-danger   rounded-0">Admin</button>
                            @elseif ($user->role_id == App\Models\User::ROLE['SUB_ADMIN'] ) 
                                <button class="btn btn-sm btn-success   rounded-0">Sub Admin</button>
                            @else 
                                <button class="btn btn-sm btn-primary   rounded-0">User</button>
                            @endif                          
                        </td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->phone}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            @if ($user->is_active == App\Models\User::INACTIVE ) 
                                <button class="btn btn-sm btn-danger   rounded-0">Inactive</button>
                            @else 
                                <button class="btn btn-sm btn-success   rounded-0">Active</button>
                            @endif
                        </td>
                        <td class="d-flex align-items-center justify-content-around">
                        <a href="{{route('users.edit',$user->id)}}">
                            <button class="btn btn-sm btn-warning   rounded-0">
                            Edit
                            </button>
                        </a>
                        <form action="{{route('users.destroy',$user->id)}}" method="post">
                            <input type="hidden" name="_method" value="delete" /> 
                            {{csrf_field()}}
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