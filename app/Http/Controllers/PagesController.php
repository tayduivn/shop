<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use App\Models\Slide;
use App\Models\Post;
use App\Models\ProductImages;
use App\Models\Attributes;
use App\Models\ProductAttribute;
use Mail;
use View;
use App\Helper\Cart;

use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
	public function __construct()
	{
        $this->middleware(function($request,$next){
            view::share([
                'slide' => Slide::all(),
                'post' => Post::all(),
                'carts' => new Cart()
            ]);
            return $next($request);
        });
	}

    public function home()
    {
        $product = Product::all();
        $hotsale_product = Product::where('hot_sale',1)->take(8)->get();
        $latest_product = Product::where('status',1)->orderBy('id','DESC')->take(8)->get();
    	return view('main.home',[
            'product' => $product,
            'hotsale_product' => $hotsale_product,
            'latest_product' => $latest_product
        ]);
    }

    public function intro()
    {
        return view('main.intro');
    }

    public function getcontact()
    {
    	return view('main.contact');
    }

    public function getpost($id)
    {
        $posts = Post::find($id);
        return view('main.post',[
            'posts' => $posts
        ]);
    }

    public function postcontact()
    {
        Mail::send('emails.blank',$data,function($msg){
            $msg->from('PH1808LM1@gmail.com','PH1808LM1');
            $msg->to('donaldvuong303@gmail.com','DonaldVuong')->subject('Đây là email từ Baby Shop');
        });
    }

    public function category($id, Request $request)
    {
        $data = ['name' => 'PH1808LM1'];
        $category = Category::find($id);
        $product = Product::where('category_id',$id);
        // Sắp xếp sản phẩm
        if ($request->order) {
            $order = explode('-', $request->order);
            $product = $product->orderBy($order[0],$order[1]);
        }
        // Custom Phân trang
        $limit = 4;
        if ($request->limit) {
            $limit = $request->limit; 
        }
        // Lọc sản phẩm theo giá
        if ($request->price) {
            $price = explode('-', $request->price);
            $product = $product->where('price','>=',$price[0])->where('price','<=',$price[1]);
        }

        $product = $product->paginate($limit);
        return view('main.shop_grid',[
            'category' => $category,
            'product' => $product
        ]);
    }
    
    public function product($id)
    {
        $product = Product::find($id);
        $images = ProductImages::where('product_id',$product->id)->get();
        $related_product = Product::where('category_id',$product->category_id)->where('id','<>',$id)->take(4)->get();
        return view('pages.product',[
            'product' => $product,
            'images' => $images,
            'related_product' => $related_product,
            'colors' => Attributes::where('type','color')->get(),
            'sizes' => Attributes::where('type','size')->get(),
            'materials' => Attributes::where('type','material')->get()
        ]);

    }

    public function getLoginUser()
    {
        return view('pages.login');
    }

    public function postLoginUser(Request $request)
    {
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required|min:3|max:32'
        ],[
            'email.required' => 'Bạn chưa nhập địa chỉ email',
            'password.required' => 'Bạn chưa nhập mật khẩu',
            'password.min' => 'Mật khẩu phải có từ 3 đến 32 ký tự',
            'password.max' => 'Mật khẩu phải có từ 3 đến 32 ký tự'
        ]);

        if(Auth::attempt([
            'email'=>$request->email,
            'password'=>$request->password
        ]))
        {
            return redirect('home');
        }
        else
        {
            return redirect('loginuser')->with('thongbao','Đăng nhập không thành công');
        }

    }

    public function getLogoutUser()
    {
        Auth::logout();
        return redirect('home');
    }

    public function getFrontUser()
    {
        $frontuser = Auth::user();
        return view('pages.frontuser',[
            'frontuser' =>$frontuser

        ]);
    }

    public function postFrontUser(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|min:2'
        ],[
            'name.required' => 'Bạn chưa nhập tên người dùng',
            'name.min' => 'Tên người dùng phải có ít nhất 2 ký tự'
        ]);

        $frontuser = Auth::user();
        $frontuser->name = $request->name;
        $frontuser->address = $request->address;
        $frontuser->phone = $request->phone;
        $frontuser->gender = $request->gender;

        if($request->changePassword == "on")
        {
            $this->validate($request,[
            'old_password' => 'required|OldPassword',    
            'password' => 'required|min:3|max:32',
            'passwordAgain' => 'required|same:password'
        ],[
            'old_password' => 'Mật khẩu cũ nhập không đúng',
            'old_password.required' => 'Bạn phải nhập mật khẩu cũ',
            'password.required' => 'Bạn chưa nhập mật khẩu',
            'password.min' => 'Mật khẩu phải có từ 3 đến 32 ký tự',
            'password.max' => 'Mật khẩu phải có từ 3 đến 32 ký tự',
            'passwordAgain.required' => 'Bạn chưa nhập lại mật khẩu',
            'passwordAgain.same' => 'Mật khẩu nhập lại không trùng khớp'
        ]);
           $frontuser->password = bcrypt($request->password); 
        }
        $frontuser->save();
        return redirect('frontuser')->with('thongbao','Sửa thành công');
    }

    public function getRegister()
    {
        return view('pages.register');
    }

    public function postRegister(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|min:2',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:3|max:32',
            'passwordAgain' => 'required|same:password'
        ],[
            'name.required' => 'Bạn chưa nhập tên người dùng',
            'name.min' => 'Tên người dùng phải có ít nhất 2 ký tự',
            'email.required' => 'Bạn chưa nhập địa chỉ email',
            'email.email' => 'Bạn chưa nhập đúng định dạng email',
            'email.unique' => 'Email đã tồn tại',
            'password.required' => 'Bạn chưa nhập mật khẩu',
            'password.min' => 'Mật khẩu phải có từ 3 đến 32 ký tự',
            'password.max' => 'Mật khẩu phải có từ 3 đến 32 ký tự',
            'passwordAgain.required' => 'Bạn chưa nhập lại mật khẩu',
            'passwordAgain.same' => 'Mật khẩu nhập lại không trùng khớp'
        ]);

        $frontuser = new User;
        $frontuser->name = $request->name;
        $frontuser->email = $request->email;
        $frontuser->password = bcrypt($request->password);
        $frontuser->address = $request->address;
        $frontuser->phone = $request->phone;
        $frontuser->gender = $request->gender;
        $frontuser->level = 0;
        
        $frontuser->save();
        return redirect('register')->with('thongbao','Chúc mừng bạn đã đăng ký thành công');
    }

    public function search(request $request)
    {
        $key = $request->key;
        $product = Product::where('name','like','%'.$key.'%')->take(20)->paginate(4);
        return view('pages.search',[
            'product' => $product,
            'key' => $key
        ]);
    } 
}
