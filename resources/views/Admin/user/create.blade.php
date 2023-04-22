@extends('Admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">

                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <div class="col-12">
                    <h4 class="mb-3">Добавить пользователя</h4>
                    <form action="{{route('admin.user.store')}}" method="post" class="col-4">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Your name">
                                @error('name')
                                <div class="text-danger">Ошибка</div>
                                @enderror
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Your email">
                                @error('email')
                                <div class="text-danger">Ошибка</div>
                                @enderror
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>password</label>
                                <input type="text" name="password" class="form-control" placeholder="Your password">
                                @error('password')
                                <div class="text-danger">Ошибка</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Выберите роль</label>
                            <select class="form-control" name="role">
                                @foreach($roles as  $id => $role)
                                    <option value="{{$id}}"
                                        {{$id == old('$role_id') ? ' selected' : '' }}>
                                        {{$role}}</option>
                                @endforeach
                            </select>
                            @error('role')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="ml-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
