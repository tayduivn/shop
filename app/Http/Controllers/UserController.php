<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
    	$user = User::all();
    	return view('admin.user.index',[
    		'user'=>$user
    	]);

    }

    public function getAdd()
    {
    	return view('admin.user.add');
    }

    public function postAdd(Request $request)
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

    	$user = new User;
    	$user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->note = $request->note;
        $user->gender = $request->gender;
        $user->level = $request->level;
    	
    	$user->save();
    	return redirect('admin/user/add')->with('thongbao','Thêm thành công');

    }

    public function getEdit($id)
    {
        $user = User::find($id);
    	return view('admin.user.edit',[
            'user'=>$user
        ]);
    }

    public function postEdit(Request $request,$id)
    {
        $this->validate($request,[
            'name' => 'required|min:2'
        ],[
            'name.required' => 'Bạn chưa nhập tên người dùng',
            'name.min' => 'Tên người dùng phải có ít nhất 2 ký tự'
        ]);

        $user = User::find($id);
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->note = $request->note;
        $user->gender = $request->gender;
        $user->level = $request->level;

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
           $user->password = bcrypt($request->password); 
        }
        $user->save();
        return redirect('admin/user/edit/'.$id)->with('thongbao','Sửa thành công');
    	
    }

    public function getDelete($id)
    {
    	$user = User::find($id);
    	$user->delete();
    	return redirect('admin/user')->with('thongbao','Xóa thành công');
    	
    }

    public function postDeleteAll(Request $request)
    {
        User::destroy($request->id);
        return redirect('admin/user')->with('thongbao','Xóa thành công');
    }


    public function getloginAdmin()
    {
        return view('admin.login');
    }

    public function postloginAdmin(Request $request)
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

        if(Auth::attempt($request->only('email','password'),$request->has('remember')))
        {
            return redirect('admin');
        }
        else
        {
            return redirect('admin/login')->with('thongbao','Bạn nhập sai email hoặc mật khẩu');
        }

    }

    public function getlogoutAdmin()
    {
        Auth::logout();
        return redirect('admin/login');
    }
}
