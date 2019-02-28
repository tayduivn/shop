@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Đơn hàng người dùng
                            <small>Danh sách</small>
                        </h1>

                        <a href="admin/orders" class="btn btn-primary pull-right ExlExport" style="margin-bottom: 10px">Xuất file excel</a>
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th class="text-center">Mã đơn hàng</th>
                                <th class="text-center">Tên khách hàng</th>
                                <th class="text-center">Ngày đặt hàng</th>
                                <th class="text-center">Tổng số lượng</th>
                                <th class="text-center">Tổng số tiền</th>
                                <th class="text-center">Trạng thái</th>
                                <th class="text-center">Xem</th>
                                <th class="text-center">Xoá</th>
                            </tr>
                        </thead>
                        <tbody class="noExcel">
                            @foreach($order as $od)
                            <tr class="odd gradeX" align="center">
                                <td>SHOP_{{$od->id}}</td>
                                <td>{{$od->user->name}}</td>
                                <td>{{$od->created_at}}</td>
                                <td>
                                    <?php 
                                    $totalqty = 0;
                                    $order_detail = DB::table('order_detail')->where('order_id',$od->id)->get();
                                    foreach ($order_detail as $odt) 
                                    {
                                        $totalqty += $odt->quantity;
                                    }
                                    ?>
                                     {{$totalqty}} sản phẩm
                                </td>
                                <td>
                                    <?php 
                                    $total = 0;
                                    $order_detail = DB::table('order_detail')->where('order_id',$od->id)->get();
                                    foreach ($order_detail as $odt) 
                                    {
                                        $total += $odt->price*$odt->quantity;
                                    }
                                    ?>
                                     {{number_format($total)}}  Đ
                                </td>
                                <td>
                                    @if($od->status == 3)
                                    <span class="label label-danger">Đã hủy</span>
                                    @elseif($od->status == 2)
                                    <span class="label label-success">Đã giao hàng</span>
                                    @elseif($od->status == 1)
                                    <span class="label label-primary">Đang giao hàng</span>
                                    @elseif($od->status == 0)
                                    <span class="label label-warning">Chưa giao hàng </span>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <a href="admin/order_detail/{{$od->id}}">Xem</a>
                                </td>
                                <td class="text-center">
                                    <a href="admin/orders_delete/{{$od->id}}">Xóa</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@stop()

@section('script')
<script type="text/javascript">
    $(document).ready(function (){
        $(".ExlExport").click(function (){
            $("#dataTables-example").table2excel({
                exclude: ".noExcel",
                name: "Data",
                filename: "Orders"
            });
        });
    });
    
</script>
@endsection