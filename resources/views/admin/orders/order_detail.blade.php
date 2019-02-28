@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Đơn hàng người dùng
                            <small>Chi tiết đơn hàng</small>
                        </h1>
                        <div class="col-md-6">
                            <h2>Thông tin đơn hàng</h2>
                            <?php 
                            $total = 0;
                            $totalqty = 0;
                            ?>
                            @foreach($order_detail as $od)
                            <?php $total += $od->price*$od->quantity; $totalqty += $od->quantity; ?>
                            @endforeach

                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Mã đơn hàng</th>
                                        <th>SHOP_{{$order->id}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Ngày đặt</td>
                                        <th>{{$order->created_at}}</th>
                                    </tr>
                                    <tr>
                                        <td>Tổng số lượng</td>
                                        <th>{{$totalqty}} sản phẩm</th>
                                    </tr>
                                    <tr>
                                        <td>Tổng số tiền</td>
                                        <th>{{number_format($total)}} Đ</th>
                                    </tr>
                                    <tr>
                                        <td>Trạng thái</td>
                                        <th>
                                            @if($order->status == 3)
                                            <span class="label label-danger">Đã hủy</span>
                                            @elseif($order->status == 2)
                                            <span class="label label-success">Đã giao hàng</span>
                                            @elseif($order->status == 1)
                                            <span class="label label-primary">Đang giao hàng</span>
                                            @elseif($order->status == 0)
                                            <span class="label label-warning">Chưa giao hàng </span>
                                            @endif 
                                        </th>
                                    </tr>
                                    <tr>
                                        <td>Xử lý đơn hàng</td>
                                        <th>
                                            <form action="admin/orders_status/{{$order->id}}" method="POST" role="form">
                                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                <select name="status" id="input" class="form-control">
                                                    <option value="">--|Xử lý đơn hàng</option>
                                                    <option value="0">Chưa giao hàng</option>
                                                    <option value="1">Đang giao hàng</option>
                                                    <option value="2">Đã nhận hàng</option>
                                                    <option value="3">Đã hủy</option> 
                                                </select>
                                                <button type="submit" class="btn btn-primary" style>Xử lý đơn hàng</button>
                                            </form>
                                        </th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="col-md-6">
                            <h2>Thông tin người mua</h2>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Họ tên</th>
                                        <th>{{$order->user->name}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Email</td>
                                        <td>{{$order->user->email}}</td>
                                    </tr>
                                    <tr>
                                        <td>Địa chỉ</td>
                                        <td>{{$order->user->address}}</td>
                                    </tr>
                                    <tr>
                                        <td>Điện thoại</td>
                                        <td>{{$order->user->phone}}</td>
                                    </tr>
                                    <tr>
                                        <td>Giới tính</td>
                                        <td>
                                            @if($order->user->gender == 1)
                                            {{"Nam"}}
                                            @else
                                            {{"Nữ"}}
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ghi chú</td>
                                        <td>{{$order->note}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <br>
                        <br>

                        <h2>Chi tiết đơn hàng</h2>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>STT</th>
                                <th>Ảnh</th>
                                <th>Tên sản phẩm</th>
                                <th>Đơn giá</th>
                                <th>Số lượng</th>
                                <th>Tổng số tiền</th>
                            </tr>
                            <?php 
                            $i = 1;
                            
                             ?>
                            @foreach($order_detail as $od)
                            <tr>
                                <th>{{$i++}}</th>
                                <th>
                                    <img src="public/upload/product/main_img/{{$od->product->images}}" width="100">
                                </th>
                                <th>{{$od->product->name}}</th>
                                <th>{{$od->price}}</th>
                                <th>{{$od->quantity}}</th>
                                <th>{{number_format($od->price*$od->quantity)}} Đ</th>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@stop()