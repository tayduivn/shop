<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        $data = Category::select('id','name','parent_id')->get()->toArray();
    	return view('admin.category.index',[
            'category' => $category,
            'data' => $data
        ]);

    }

    public function getAdd()
    {
        $data = Category::select('id','name','parent_id')->get()->toArray();
        return view('admin.category.add',[
            'data' => $data
        ]);
    	
    }

    public function postAdd(Request $request)
    {
    	$this->validate($request,[
    		'name' => 'required|min:2|max:100|unique:category,name'

    	],[
    		'name.required' => 'Bạn chưa nhập tên danh mục',
    		'name.min' => 'Tên danh mục phải có độ dài từ 2 đến 100 ký tự',
    		'name.max' => 'Tên danh mục phải có độ dài từ 2 đến 100 ký tự',
    		'name.unique' => 'Tên danh mục đã tồn tại'
    	]);

    	$category = new Category;
    	$category->name = $request->name;
    	$category->slug = changeTitle($request->name);
        $category->parent_id = $request->parent;

    	$category->save();
    	return redirect('admin/category/add')->with('thongbao','Thêm thành công');

    }

    public function getEdit($id)
    {
        $category = Category::findOrFail($id)->toArray();
    	$data = Category::select('id','name','parent_id')->get()->toArray();
    	return view('admin.category.edit',[
            'category'=>$category,
            'data'=>$data
        ]);
    }

    public function postEdit(Request $request,$id)
    {
    	$this->validate($request,[
            'name' => 'required|min:2|max:100|unique:category,name'
        ],[
            'name.required' => 'Bạn chưa nhập tên danh mục',
            'name.min' => 'Tên danh mục phải có độ dài từ 2 đến 100 ký tự',
            'name.max' => 'Tên danh mục phải có độ dài từ 2 đến 100 ký tự',
            'name.unique' => 'Tên danh mục đã tồn tại'
        ]);
        
        $cat = Category::find($id);
    	$cat->name = $request->name;
    	$cat->slug = changeTitle($request->name);
        $cat->parent_id = $request->parent;

    	$cat->save();
    	return redirect('admin/category/edit/'.$id)->with('thongbao','Sửa thành công');
    }

    public function getDelete($id)
    {
        $category = Category::find($id);
        $parent = Category::where('parent_id',$id)->count();
        if ($parent == 0)
        {
            $category->delete();
            return redirect('admin/category')->with('thongbao','Xóa thành công');
        }
        else
        {
            return redirect('admin/category')->with('loi','Xóa thất bại');
        }
    	
    	
    }

    public function postDeleteAll(Request $request)
    {
        Category::destroy($request->id);
        return redirect('admin/category')->with('thongbao','Xóa thành công');
    }
}
