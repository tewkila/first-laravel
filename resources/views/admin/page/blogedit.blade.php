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
                        <form method="POST" action="{{route('post.edit.post', ['postId'=>$postedit->id])}}">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputTitle">Title</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="exampleInputTitle" name="title" placeholder="Title" value="{{ $postedit->title }}">
                                    @error('title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputSort">sort</label>
                                    <input type="number" class="form-control @error('sort') is-invalid @enderror" id="exampleInputSort" name="sort" placeholder="Sort" value="{{ $postedit->sort }}">
                                    @error('sort')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input @error('img') is-invalid @enderror" id="exampleInputFile" name="img">
                                            @error('img')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputMenuItem">Menu Item</label>
                                    <input type="text" class="form-control @error('menu_item') is-invalid @enderror" id="exampleInputMenuItem" name="menu_item" placeholder="Menu item" value="{{ $postedit->menu_item }}">
                                    @error('menu_item')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="exampleInputDescription">Description</label>
                                        <textarea class="form-control @error('description') is-invalid @enderror" rows="3" placeholder="Enter ..." name="description"></textarea>
                                        @error('text')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                     <div class="form-group">
                                        <label for="customSwitch3">Status</label>
                                        <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                            <input type="checkbox" class="custom-control-input" id="customSwitch3" name="status" @if($postedit->status==1) checked @endif >
                                            <label class="custom-control-label" for="customSwitch3"></label>
                                        </div>
                                        @error('status')
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

                    <!-- /.card -->


                </div>
                <!--/.col (left) -->
                <!-- right column -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
@endsection
