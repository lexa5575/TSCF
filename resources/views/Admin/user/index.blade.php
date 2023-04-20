@extends('Admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Пользователи</h1>
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
                <div class="col-1 mb-3"><a href="{{route('admin.user.create')}}" class="btn btn-block btn-primary">Add</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Name</th>
                                    <th colspan="3">Действие</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <th>{{ $user -> id }}</th>
                                        <th>{{ $user -> name }}</th>
                                        <th><a href="{{route('admin.user.show', $user->id)}}"><i
                                                    class="fa-regular fa-eye"></i></a></th>
                                        <th><a href="{{route('admin.user.edit', $user->id)}}"><i
                                                    class="fa-solid fa-pen fa-beat-fade"></i></a></th>
                                        <form action="{{route('admin.user.delete', $user->id)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <th>
                                                <button type="submit" class="border-0 bg-transparent">
                                                    <i class="fa-solid fa-trash fa-bounce text-danger"
                                                       role="button"></i>
                                                </button>
                                            </th>
                                        </form>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
