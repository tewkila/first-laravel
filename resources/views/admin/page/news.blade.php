@extends('admin.layout.admin')
@section('body')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">News</h3>
                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <a href="{{route('news')}}"><button type="button" class="btn btn-light "> <i style="color: #000; text-decoration: none;" class="fas fa-edit"></i></button></a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0" style="height: 550px;">
                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>სათაური</th>
                                    <th>სორტირება</th>
                                    <th>Updated at</th>
                                    <th>Edit</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($post as $postitem)
                                    <tr>
                                        <td>{{ $postitem->id }}</td>
                                        <td>{{ $postitem->title }}</td>
                                        <td>{{ $postitem->sort }}</td>
                                        <td>{{ $postitem->updated_at }}</td>
                                        <td>
                                            <a href="{{route('news.edit', ['postId'=>$postitem->id])}}"><button type="button" class="btn btn-primary"> <i style="color: #FFFFFF; text-decoration: none;"  class="fas fa-tools"></i></button></a>
                                            <a href="{{route('post.delete', ['postId'=>$postitem->id])}}"><button type="button" class="btn btn-danger"><i style="color: #FFFFFF; text-decoration: none;"  class="fas fa-trash-alt"></i></button></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

    <!-- /.content -->


@endsection
