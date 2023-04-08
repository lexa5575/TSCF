@extends('Admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex">
                        <h1 class="m-0">{{$category->title}}</h1>
                        <a href="{{route('admin.category.edit', $category->id)}}"><i class="fa-solid fa-pen fa-beat-fade ml-3"></i></a>
                        <form action="{{route('admin.category.delete', $category->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <th>
                                <button type="submit" class="border-0 bg-transparent ml-3">
                                    <i class="fa-solid fa-trash fa-bounce text-danger"
                                       role="button"></i>
                                </button>
                            </th>
                        </form>
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

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <tbody>
                                    <tr>
                                        <th>id</th>
                                        <th>{{ $category -> id }}</th>

                                    </tr>
                                    <tr>
                                        <th>Name</th>
                                        <th>{{ $category -> title }}</th>

                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                    <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->

@endsection
