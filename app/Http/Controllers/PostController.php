<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    public function index()
    {
    	$post = Post::all();
    	return view('admin.post.index',[
    		'post'=>$post
    	]);

    }

    public function getAdd()
    {
    	return view('admin.post.add');
    }

    public function postAdd(Request $request)
    {
    	$this->validate($request,[
    		'name' => 'required',
            'content' => 'required'
    	],[
    		'name.required' => 'Bạn chưa nhập tên tin tức',
            'content.required' => 'Bạn chưa nhập nội dung tin tức'
    	]);

    	$post = new Post;
    	$post->name = $request->name;
        $post->slug = changeTitle($request->name);
    	$post->content = $post->content;
        
        if ($request->hasFile('images')) 
        {
            $file = $request->file('images');
            $img = $file->getClientOriginalName();
            $images = str_random(6)."_".$img;
            $file->move("public/upload/post",$images);
            $post->images = $images;
        }
        else
        {
            $post->images = "";
        }
    	$post->save();
    	return redirect('admin/post/add')->with('thongbao','Thêm thành công');

    }

    public function getEdit($id)
    {
        $post = Post::find($id);
    	return view('admin.post.edit',[
            'post'=>$post
        ]);
    }

    public function postEdit(Request $request,$id)
    {
        $this->validate($request,[
            'name' => 'required',
            'content' => 'required'
        ],[
            'name.required' => 'Bạn chưa nhập tên tin tức',
            'content.required' => 'Bạn chưa nhập nội dung'
        ]);

        $post = Post::find($id);
        $post->name = $request->name;
        $post->slug = changeTitle($request->name);
        $post->content = $request->content;
        
        if ($request->hasFile('images')) 
        {
            $file = $request->file('images');
            $img = $file->getClientOriginalName();
            $images = str_random(6)."_".$img;
            $file->move("public/upload/post",$images);
            // unlink("public/upload/post/".$product->images);
            $post->images = $images;
        }
        $post->save();
        return redirect('admin/post/edit/'.$id)->with('thongbao','Sửa thành công');
    	
    }

    public function getDelete($id)
    {
    	$post = Post::find($id);
    	$post->delete();
    	return redirect('admin/post')->with('thongbao','Xóa thành công');
    	
    }

    public function postDeleteAll(Request $request)
    {
        Post::destroy($request->id);
        return redirect('admin/post')->with('thongbao','Xóa thành công');
    }
}
