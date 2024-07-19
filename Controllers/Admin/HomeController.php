<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Tag;
use File;



class HomeController extends Controller
{
	public function index()
	{
		
   		return view('admin.home.index');
	}
	public function CRM()
	{
   		return view('admin.home.crm');
	}
	public function productList()
	{	
		$products = Product::latest('id')->simplePaginate(8);
   		return view('admin.home.product_list')
				->with(compact('products'));
	}
	public function addProduct()
	{
		$categories = Category::get();
   		return view('admin.home.product_add')
				->with(compact('categories'));
	}

	public function productStore(Request $request)
	{
		$request->validate([
        'blog_title' => 'required|string|max:255',
        'category_id' => 'required',
        'blog_tags' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'required' // Validate the image file
    ]);

		 $fileName = null;
        if (request()->hasFile('image')) {
            $file = request()->file('image');
            $fileName = md5($file->getClientOriginalName()) . time() . "." . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $fileName);
        }

		Product::create([

			'blog_title' => $request->blog_title,
			'category_id' => $request->category_id,
			'description' => $request->description,
			'image' => $fileName,
			'status' => 'DEACTIVE'

		]);

		Tag::create([

			
			'tag_name' => $request->blog_tags,
			

		]);
		
		return redirect()->back()->with('status' , 'New Record Add Successfully..!!');
	}

	public function editProduct($id)
	{
		  $product = Product::findOrFail($id);
			return view('admin.home.product_edit')
				   ->with(compact('product'));
	}

	public function Productupdate(Request $request , $id)
	{
		$request->validate([
        'blog_title' => 'required|string|max:255',
        'category_id' => 'required|string|max:255',
        'blog_tags' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'required' // Validate the image file
    ]);
		
	   $product = Product::findOrFail($id);
	   $currentImage = $product->image;
	   $fileName = null;
        if (request()->hasFile('image')) {
            $file = request()->file('image');
            $fileName = md5($file->getClientOriginalName()) . time() . "." . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $fileName);
        }
	   $product->update([
			
			'blog_title' => $request->blog_title,
			'category_id' => $request->category_id,
			'blog_tags' => $request->blog_tags,
			'description' => $request->description,
			'image' => ($fileName) ? $fileName : $currentImage,
			'status' => 'DEACTIVE'
	   ]);
	    if ($fileName)
         File::delete('./uploads/' . $currentImage);
	   return redirect()->to('admin/product-list')->with('status' , 'Record Updated Successfully..!!');
	}

	public function categoryList()
	{
		
   		return view('admin.home.category_list');
	}
	public function Login()
	{
   		return view('admin.home.auth-login-basic');
	}
	public function register()
	{
   		return view('admin.home.auth-register-basic');
	}
	
	public function logout()
	{
   		return view('admin.home.logout');
	}
	public function delete($id)
	{	
		$product = Product::findOrFail($id);
		$product->delete();
		return redirect()->back();
	}
	public function status($id)
	{	
		$product = Product::findOrFail($id);
		$newStatus = ($product->status == 'DEACTIVE') ? 'ACTIVE' : 'DEACTIVE';
		$product->update([
			'status' => $newStatus
		]);
		return redirect()->back();
	}
}
