@extends('admin.layout.admin')
@section('body')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Quick Example</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="{{route('menu.edit.post', ['menuId'=>$menuedit->id])}}">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">სათაური</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="exampleInputTitle" name="title" placeholder="Title" value="{{ $menuedit->title }}">
                                    @error('title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">სორტირება</label>
                                    <input type="number" class="form-control @error('sort') is-invalid @enderror" id="exampleInputSort" name="sort" placeholder="Sort" value="{{ $menuedit->sort }}">
                                    @error('sort')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">ჩამოსაშლელი მენიუ</label>
                                    <select class="custom-select rounded-0 @error('drop_down') is-invalid @enderror" id="exampleInputDropdown" name="drop_down">
                                        <option value="0">choose</option>
                                        @foreach($drop as $dropdown)
                                            <option @if($dropdown->id == $menuedit->drop_down) selected="selected" @endif value="{{$dropdown->id}}">{{$dropdown->title}}</option>
                                        @endforeach
                                    </select>
                                    @error('drop_down')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                    <!-- general form elements -->
                </div>
                <!--/.col (left) -->
                <!-- right column -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
@endsection
