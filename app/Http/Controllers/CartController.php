<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImages;
use App\Helper\Cart;
use App\Models\User;
use App\Models\Orders;
use App\Models\OrderDetail;
use App\Models\Customer;
use App\Models\CustomerOrders;
use App\Models\CustomerOrderDetail;
use Illuminate\Support\Facades\Auth;
use Session;


class CartController extends Controller
{

   public function shopping($id,Cart $cart)
   {
    $pro = Product::find($id)->toArray();
    $cart->add($pro);
    return redirect()->back();
   }

   public function cart()
   {
    return view('pages.cart',[
        'carts' => new Cart()
    ]);
   }

   public function cartRemove($id,Cart $cart)
   {
    $cart->remove($id);
    return redirect()->back();
   }

   public function cartUpdate(Request $request,Cart $cart)
   {
    $cart->update($request->all());
    return redirect()->back();
   }

   public function getOrderCheck()
    {
        return view('pages.order_check',[
            'carts' => new Cart()
        ]);  
    }

    public function postOrderCheck(Request $request)
    {
      if (Auth::user()) 
      {
        $order = new Orders;
        $order->user_id = Auth::user()->id;
        $order->note = $request->note;
        $order->save();

        $cart = new Cart();
        foreach ($cart->items as $items) 
            {
                $order_detail = new OrderDetail;
                $order_detail->order_id = $order->id;
                $order_detail->product_id = $items['id'];
                $order_detail->quantity = $items['quantity'];
                $order_detail->price = $items['price'];

                $order_detail->save();
            }
        session::forget('cart');
        return redirect()->back()->with('thongbao','Đặt hàng thành công');
        }  
    }

    public function getOrderHistory()
    {
        $order = Orders::orderBy('id','ASC')->get();
        return view('pages.order_history',[
            'order' => $order,
            'carts' => new Cart()
        ]);
    }

    public function getOrderHisDetail($id) {
        $order = Orders::find($id);
        $order_detail = OrderDetail::where('order_id',$id)->get();
        return view('pages.orderhis_detail',[
            'order' => $order,
            'order_detail' => $order_detail,
            'carts' => new Cart()
        ]);
    }
}
