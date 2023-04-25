@extends('Personal.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Categories</h1>
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
                    <h4 class="mb-3">Добавить Категорию</h4>
                    <form action="{{route('personal.comment.update', $comment->id)}}" method="post" class="w-50">
                        @csrf
                        @method('patch')
                        <div class="card-body">
                            <div class="form-group">
                                <label>Name</label>
                                <textarea class="form-control" name="message" cols="30" rows="10">{{$comment->message}}</textarea>
                                @error('message')
                                <div class="text-danger">Ошибка</div>
                                @enderror
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="ml-3">
                            <button type="submit" class="btn btn-primary">Reload</button>
                        </div>
                    </form>
                </div>

                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
