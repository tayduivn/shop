<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImages;
use App\Models\Comment;
use App\Models\Attributes;
use App\Models\ProductAttribute;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;


class ProductController extends Controller
{
    // Hiển thị danh sách sản phẩm
    public function index()
    {
    	$product = Product::orderBy('id','DESC')->get();
        $category = Category::all();
    	return view('admin.product.index',[
    		'product'=>$product,
            'category' => $category
    	]);
    }

    // Thêm sản phẩm
    public function getAdd()
    {
        $cat = Category::all();
    	return view('admin.product.add',[
            'cat' => $cat,
            'colors' => Attributes::where('type','color')->get(),
            'sizes' => Attributes::where('type','size')->get(),
            'materials' => Attributes::where('type','material')->get()
        ]);
    }

    public function postAdd(Request $request)
    {
    	$this->validate($request,[
    		'category' => 'required',
            'name' => 'required|min:3|max:100',
            'price' => 'required',
            'images' => 'image'

    	],[
    		'category.required' => 'Bạn chưa chọn danh mục',
            'name.required' => 'Bạn chưa nhập tên sản phẩm',
    		'name.min' => 'Tên sản phẩm phải có độ dài từ 3 đến 100 ký tự',
    		'name.max' => 'Tên sản phẩm phải có độ dài từ 3 đến 100 ký tự',
            'price.required' => 'Bạn chưa nhập giá cho sản phẩm',
            'images.image' => 'Bạn chưa chọn đúng định dạng hình ảnh'
    	]);

    	$product = new Product;
    	$product->name = $request->name;
    	$product->slug = changeTitle($request->name);
    	$product->category_id = $request->category;
        $product->price = $request->price;
        $product->sale_price = $request->sale_price;
        $product->content = $request->content;
        $product->status = $request->status;
        $product->hot_sale = $request->hot_sale;
        $product->view = 0;
        
        $list_attr_id = '';
        if(isset($_POST['list_attr_id']) && !empty($_POST['list_attr_id']))
        {
            foreach ($_POST['list_attr_id'] as $key=>$value) 
            {
                $list_attr_id .= '|'.$value.'|';
            }
        }
        $product->list_attr_id = $list_attr_id;

        // Thêm ảnh gốc sản phẩm
        if ($request->hasFile('images')) 
        {
            $file = $request->file('images');
            // $ext = $file->getClientOriginalExtension();
            // if($ext != 'jpg' && $ext != 'png' && $ext != 'jpeg' && $ext != 'bmp')
            // {
            //     return redirect('admin/product/add')->with('loi','Bạn chỉ được chọn file có đuôi là jpg,png,jpeg,bmp');
            // }
            $img = $file->getClientOriginalName();
            $images = str_random(6)."_".$img;
            // while(file_exists("public/upload/product/main_img".$images))
            // {
            //     $images = str_random(6)."_".$img;
            // }
            $file->move("public/upload/product/main_img",$images);
            $product->images = $images;
        }
        else
        {
            $product->images = "";
        }
    	$product->save();

        // Thêm ảnh phụ sản phẩm
        $product_id = $product->id;
        if (Input::hasFile('other_images')) 
        {
            foreach (Input::file('other_images') as $other_file) 
            {
                if (isset($other_file))
                {
                    $other_name = $other_file->getClientOriginalName();
                    $other_file->move("public/upload/product/other_img/",$other_file->getClientOriginalName());
                    ProductImages::create([
                        'link' => $other_name,
                        'product_id' => $product_id
                    ]);
                }
            }
        }

    	return redirect('admin/product/add')->with('thongbao','Thêm thành công');
    }

    // Sửa sản phẩm
    public function getEdit($id)
    {
        $cat = Category::all();
    	$product = Product::find($id);
    	return view('admin.product.edit',[
            'product'=>$product,
            'category'=>$cat,
            'colors' => Attributes::where('type','color')->get(),
            'sizes' => Attributes::where('type','size')->get(),
            'materials' => Attributes::where('type','material')->get()
        ]);
    }

    public function postEdit(Request $request,$id)
    {
    	$product = Product::find($id);
        $this->validate($request,[
            'category' => 'required',
            'name' => 'required|min:3|max:100',
            'price' => 'required',
            'images' => 'image'
        ],[
            'category.required' => 'Bạn chưa chọn danh mục',
            'name.required' => 'Bạn chưa nhập tên sản phẩm',
            'name.min' => 'Tên sản phẩm phải có độ dài từ 3 đến 100 ký tự',
            'name.max' => 'Tên sản phẩm phải có độ dài từ 3 đến 100 ký tự',
            'price.required' => 'Bạn chưa nhập giá cho sản phẩm',
            'images.image' => 'Bạn chưa chọn đúng định dạng hình ảnh'

        ]);

    	$product->name = $request->name;
        $product->slug = changeTitle($request->name);
        $product->category_id = $request->category;
        $product->price = $request->price;
        $product->sale_price = $request->sale_price;
        $product->content = $request->content;
        $product->status = $request->status;
        $product->hot_sale = $request->hot_sale;
        #
        $list_attr_id = '';
        if(isset($_POST['list_attr_id']) && !empty($_POST['list_attr_id'])){
            foreach ($_POST['list_attr_id'] as $k=>$v) {
                $list_attr_id .= '|'.$v.'|';
            }
        }
        $product->list_attr_id = $list_attr_id;

        //Sửa ảnh gốc của sản phẩm
        if ($request->hasFile('images')) 
        {
            $file = $request->file('images');
            $img = $file->getClientOriginalName();
            $images = str_random(6)."_".$img;
            $file->move("public/upload/product/main_img",$images);
            // unlink("public/upload/product/".$product->images);
            $product->images = $images;
        }
        $product->save();


        //Sửa ảnh phụ của sản phẩm

        if (Input::hasFile('other_images')) 
        {
            foreach (Input::file('other_images') as $img_id => $other_file) 
            {
                if (isset($other_file))
                {
                    $other_file->move("public/upload/product/other_img/",$other_file->getClientOriginalName());
                    $other_name = $other_file->getClientOriginalName();

                    ProductImages::where('id',$img_id)->update([
                        'link' => $other_name
                    ]);
                }
            }
        }
        //Thêm ảnh phụ cho sản phẩm

        $product_id = $product->id;
        if (Input::hasFile('new_images')) 
        {
            foreach (Input::file('new_images') as $new_file) 
            {
                if (isset($new_file))
                {
                    $new_file->move("public/upload/product/other_img/",$new_file->getClientOriginalName());
                    $new_name = $new_file->getClientOriginalName();

                    ProductImages::create([
                        'link' => $new_name,
                        'product_id' => $product_id
                    ]);
                }
            }
        }

        return redirect()->back()->with('thongbao','Sửa thành công');
    }

    public function getDelete($id)
    {
    	$product = Product::find($id);
    	$product->delete();
    	return redirect('admin/product')->with('thongbao','Xóa thành công');
    }

    public function postDeleteAll(Request $request)
    {
        Product::destroy($request->id);
        return redirect('admin/product')->with('thongbao','Xóa thành công');
    }


    public function getDeleteImages($id)
    {
        $product_img = ProductImages::find($id);
        $product_img->delete();
        return redirect()->back()->with('thongbao','Xóa thành công');
        
    }

    // Thuộc tính cho sản phẩm

    public function attributeList()
    {
        $attribute = Attributes::all();
        return view('admin.product.attribute',[
            'attribute' => $attribute
        ]);
    }

    public function attributegetAdd()
    {
        $attribute = Attributes::all();
        return view('admin.product.attribute_add',[
            'attribute' => $attribute
        ]);
    }

    public function attributepostAdd(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'type' => 'required'
        ],[
            'name.required' => 'Bạn chưa nhập tên thuộc tính',
            'name.required' => 'Bạn chưa nhập kiểu thuộc tính'
        ]);

        $attr = new Attributes;
        $attr->name = $request->name;
        $attr->type = $request->type;
        $attr->value = $request->value;
        $attr->save();

        return redirect('admin/product/attribute_add')->with('thongbao','Thêm thành công');
    }

    public function attributegetEdit($id)
    {
        $attribute = Attributes::find($id);
        return view('admin.product.attribute_edit',[
            'attribute' => $attribute
        ]);
    }

    public function attributepostEdit(Request $request,$id)
    {
        $attribute = Attributes::find($id);
        $this->validate($request,[
            'name' => 'required',
            'type' => 'required'
        ],[
            'name.required' => 'Bạn chưa nhập tên thuộc tính',
            'name.required' => 'Bạn chưa nhập kiểu thuộc tính'
        ]);

        $attribute->name = $request->name;
        $attribute->type = $request->type;
        $attribute->value = $request->value;
        $attribute->save();

        return redirect('admin/product/attribute_edit/'.$id)->with('thongbao','Sửa thành công');
    }

    public function attributeDelete($id)
    {
        $attribute = Attributes::find($id);
        $attribute->delete();
        return redirect('admin/product/attribute')->with('thongbao','Xóa thành công'); 
    }

    public function attributeDeleteAll(Request $request)
    {
        Attributes::destroy($request->id);
        return redirect('admin/product/attribute')->with('thongbao','Xóa thành công');
    }
}
