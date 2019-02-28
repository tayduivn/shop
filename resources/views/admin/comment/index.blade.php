@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Bình luận
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->

                    @if(session('thongbao'))
                        <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{session('thongbao')}}
                        </div>
                    @endif

                    <form action="admin/comment/delete_all" method="POST" role="form">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr align="center">
                                    <th class="text-center"><input type="checkbox" name="checked_id" id="checked_all"></th>
                                    <th class="text-center">STT</th>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Nội dung</th>
                                    <th class="text-center">Người bình luận</th>
                                    <th class="text-center">Sản phẩm bình luận</th>
                                    <th class="text-center">Ngày đăng</th>
                                    <th class="text-center">Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<?php 
                            	$i =1; ?>
                            	@foreach($comment as $cm)
                                <tr class="odd gradeX" align="center">
                                    <td><input type="checkbox" class="item-check" name="id[]" value="{{$cm->id}}"></td>
                                    <td>{{$i++}}</td>
                                    <td>{{$cm->id}}</td>
                                    <td>{{$cm->content}}</td>
                                    <td>{{$cm->user->name}}</td>
                                    <td>{{$cm->product->name}}</td>
                                    <td>{{$cm->created_at}}</td>
                                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/comment/delete/{{$cm->id}}" onclick="return confirm('Bạn có chắc xóa không?')"> Xóa</a></td>
                                </tr>
                                @endforeach
                  
                            </tbody>
                        </table>
                        {{csrf_field()}}
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc xóa không?')">Xóa</button>
                    </form>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@stop()