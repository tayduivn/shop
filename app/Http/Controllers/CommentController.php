<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Product;

use Illuminate\Support\Facades\Auth;


class CommentController extends Controller
{
    public function index()
    {
        return view('admin.comment.index',[
            'comment' =>Comment::all()
        ]);
    }

    public function CommentDelete($id)
    {
        $comment = Comment::find($id);
        $comment->delete();
        return redirect('admin/comment')->with('thongbao','Xóa comment thành công');
    }

    public function CommentDeleteAll(Request $request)
    {
        Comment::destroy($request->id);
        return redirect('admin/comment')->with('thongbao','Xóa comment thành công');
    }

    public function getDelete($id,$product_id)
    {
    	$comment = Comment::find($id);
    	$comment->delete();
    	return redirect('admin/product/edit/'.$product_id)->with('thongbao','Xóa comment thành công');
    	
    }

    public function postDeleteAll($product_id,Request $request)
    {
        // Comment::destroy($request->id);
        // return redirect('admin/product/edit/'.$product_id)->with('thongbao','Xóa comment thành công');
    }

    public function postUserComment($id,Request $request)
    {
    	$product_id = $id;
    	$product = Product::find($id);
    	$comment = new Comment;
    	$comment->product_id = $product_id;
    	$comment->user_id = Auth::user()->id;
    	$comment->content = $request->content;
    	$comment->save();
    	return redirect("product/$id/".$product->slug)->with('thongbao','Bạn đã gửi bình luận thành công');
    	
    }
}
