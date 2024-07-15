<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;


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
   		return view('admin.home.product_add');
	}

	public function productStore(Request $request)
	{
		$request->validate([

			'product_name' => 'required',
			'category' => 'required',
			'price' => 'required|numeric',
			'quantity' => 'required|numeric'
			
		]);

		$randomId = mt_rand(20, 100);
		Product::create([

			'product_id' => $randomId,
			'product_name' => $request->name,
			'category' => $request->category,
			'price' => $request->price,
			'quantity' => $request->quantity,
			'status' => 'DEACTIVE',

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
		$randomId = mt_rand(20, 100);
	   $product = Product::findOrFail($id);
	   $product->update([
		  	'product_id' => $randomId,
			'product_name' => $request->name,
			'category' => $request->category,
			'price' => $request->price,
			'quantity' => $request->quantity,
			'status' => 'DEACTIVE',
	   ]);
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
	public function profileSetting()
	{
   		return view('admin.home.account_setting');
	}
	public function profile()
	{
   		return view('admin.home.pages-profile-user');
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
