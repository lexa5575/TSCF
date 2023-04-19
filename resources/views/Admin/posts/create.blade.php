@extends('Admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Post</h1>
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
                    <h4 class="mb-3">Добавить Пост</h4>
                    <form action="{{route('admin.post.store')}}" method="post" class="w-100"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="title" class="form-control" placeholder="Your name"
                                       value="{{old('title')}}">
                                @error('title')
                                <div class="text-danger">Ошибка</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <textarea id="summernote" name="content">{{old('content')}}</textarea>
                                @error('content')
                                <div class="text-danger">Ошибка</div>
                                @enderror
                            </div>
                            <div class="form-group w-50">
                                <label for="exampleInputFile">Добавить превтю</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="preview_image">
                                        <label class="custom-file-label">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Загрузка</span>
                                    </div>
                                </div>
                                @error('preview_image')
                                <div class="text-danger">Ошибка</div>
                                @enderror
                            </div>
                            <div class="form-group w-50">
                                <label for="exampleInputFile">Добавить изображение</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="main_image">
                                        <label class="custom-file-label">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Загрузка</span>
                                    </div>
                                </div>
                                @error('main_image')
                                <div class="text-danger">Ошибка</div>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- select -->
                                    <div class="form-group">
                                        <label>Выберите категорию</label>
                                        <select class="form-control" name="category_id">
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}"
                                                    {{$category->id == old('$category_id') ? ' selected' : '' }}>
                                                    {{$category->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Tеги</label>
                                        <select class="select2" name="tag_ids[]" multiple="multiple" data-placeholder="Выберите теги" style="width: 100%;" data-select2-id="7" tabindex="-1" aria-hidden="true">
                                            @foreach($tags as $tag)

                                                <option value="{{$tag->id}}">{{$tag->title}}</option>

                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                        <!-- /.card-body -->


                    </form>
                </div>

                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
