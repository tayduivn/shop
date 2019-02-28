<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use App\Models\Customer;
use App\Models\ProductImages;
use App\Models\Orders;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    public function getOrders()
    {
        $order = Orders::orderBy('id','ASC')->get();
        return view('admin.orders.index',[
            'order' => $order
        ]);
    }

    public function getOrderDetail($id)
    {
        $order = Orders::find($id);
        $order_detail = OrderDetail::where('order_id',$id)->get();
        return view('admin.orders.order_detail',[
            'order' => $order,
            'order_detail' => $order_detail
        ]);
    }

    public function getOrdersDelete($id)
    {
        $order = Orders::find($id);
        $order->delete();
        return redirect()->back()->with('thongbao','Xóa thành công');
    }

    public function getOrdersStatus($id, Request $request)
    {
        $order = Orders::find($id);
        if (isset($request->status)) 
        {
            $order->status = $request->status;
            $order->save();
            return redirect()->back()->with('thongbao','Xử lý đơn hàng thành công');
        }
        else
        {
            return redirect()->back()->with('error','Bạn chưa chọn xử lý đơn hàng');
        }
        
    }
}
