<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slide;


class SlideController extends Controller
{
    public function index()
    {
    	$slide = Slide::all();
    	return view('admin.slide.index',[
    		'slide'=>$slide
    	]);

    }

    public function getAdd()
    {
    	return view('admin.slide.add');
    }

    public function postAdd(Request $request)
    {
    	$this->validate($request,[
    		'name' => 'required',
            'content' => 'required',
            'images' => 'required',
            'images' => 'image'
    	],[
    		'name.required' => 'Bạn chưa nhập tên slide',
            'content.required' => 'Bạn chưa nhập nội dung',
            'images.required' => 'Bạn phải upload hình ảnh cho slide',
            'images.image' => 'Bạn chưa chọn đúng định dạng hình ảnh'
    	]);

    	$slide = new Slide;
    	$slide->name = $request->name;
    	$slide->content = $request->content;
        if ($request->has('link')) {
            $slide->link = $request->link;
        }

        if ($request->hasFile('images')) 
        {
            $file = $request->file('images');
            // $ext = $file->getClientOriginalExtension();
            // if($ext != 'jpg' && $ext != 'png' && $ext != 'jpeg' && $ext != 'bmp')
            // {
            //     return redirect('admin/slide/add')->with('loi','Bạn chỉ được chọn file có đuôi là jpg,png,jpeg,bmp');
            // }
            $img = $file->getClientOriginalName();
            $images = str_random(6)."_".$img;
            // while(file_exists("public/upload/slide/".$images))
            // {
            //     $images = str_random(6)."_".$img;
            // }
            $file->move("public/upload/slide",$images);
            $slide->images = $images;
        }
        else
        {
            $slide->images = "";

        }


    	$slide->save();
    	return redirect('admin/slide/add')->with('thongbao','Thêm thành công');

    }

    public function getEdit($id)
    {
        $slide = Slide::find($id);
    	return view('admin.slide.edit',[
            'slide'=>$slide
        ]);
    }

    public function postEdit(Request $request,$id)
    {
        $this->validate($request,[
            'name' => 'required',
            'content' => 'required',
            'images' => 'image'
        ],[
            'name.required' => 'Bạn chưa nhập tên slide',
            'content.required' => 'Bạn chưa nhập nội dung',
            'images.image' => 'Bạn chưa chọn đúng định dạng hình ảnh'
        ]);

        $slide = Slide::find($id);
        $slide->name = $request->name;
        $slide->content = $request->content;
        if ($request->has('link')) {
            $slide->link = $request->link;
        }

        if ($request->hasFile('images')) 
        {
            $file = $request->file('images');
            // $ext = $file->getClientOriginalExtension();
            // if($ext != 'ext' && $ext != 'png' && $ext != 'jpeg' && $ext != 'bmp')
            // {
            //     return redirect('admin/slide/edit/'.$id)->with('loi','Bạn chỉ được chọn file có đuôi là jpg,png,jpeg,bmp');
            // }
            $img = $file->getClientOriginalName();
            $images = str_random(6)."_".$img;
            // while(file_exists("public/upload/slide/".$images))
            // {
            //     $images = str_random(6)."_".$img;
            // }
            // unlink("public/upload/slide/".$slide->Hinh);
            $file->move("public/upload/slide",$images);
            $slide->images = $images;
        }
        
        $slide->save();
        return redirect('admin/slide/edit/'.$id)->with('thongbao','Sửa thành công');
    	
    }

    public function getDelete($id)
    {
    	$slide = Slide::find($id);
    	$slide->delete();
    	return redirect('admin/slide')->with('thongbao','Xóa thành công');
    	
    }

    public function postDeleteAll(Request $request)
    {
        Slide::destroy($request->id);
        return redirect('admin/slide')->with('thongbao','Xóa thành công');
    }
}
