@extends('admin.home.layout.master')

@section('page-title')
  Edit Product
@endsection

@section('main-content')
<div class="content-wrapper">
  <div class="container-xxl flex-grow-1 container-p-y">
    
     <h4 class="py-3 mb-4">
       <span> Edit Product</span>
     </h4>

         <form name="editProduct" id="editProduct" method="POST" action = "{{ route('product.update' , $product->id) }}">
           @csrf
           @method('put')
           <div class="col-md-12">
                 <div class="row">
                   <div class="col-md-6">
                     <div class="row">
                       <div class="col-md-12">
                         <label for="" class="mb-2">Product Name</label>
                         <input name="name" id="name" type="text" value="{{ $product->product_name }}" class="form-control" placeholder="Product Name">
                       </div>
                     </div>
                   </div>
                 </div>

                 <div class="row">
                   <div class="col-md-6">
                     <div class="row">
                       <div class="col-md-12">
                         <label for="" class="mb-2 mt-2">Category</label><br>
                         <input name="category" id="category" type="text" value="{{ $product->category }}" class="form-control" placeholder="Category Name">
                       </div>
                     </div>
                   </div>
                 </div>

                 <div class="row">
                   <div class="col-md-6">
                     <div class="row">
                       <div class="col-md-12">
                         <label for="" class="mb-2 mt-2">Price</label><br>
                         <input name="price" id="price" type="text" value="{{ $product->price }}" class="form-control" placeholder="Price">
                       </div>
                     </div>
                   </div>
                 </div>

                   <div class="row">
                   <div class="col-md-6">
                     <div class="row">
                       <div class="col-md-12">
                         <label for="" class="mb-2 mt-2">Quantity</label><br>
                         <input name="quantity" id="quantity" type="text" value="{{ $product->quantity }}" class="form-control" placeholder="Quantity">
                       </div>
                     </div>
                   </div>
                 </div>
             <br>
             <div class="form-actions">
               <button id="submit" class="btn btn-primary" style="background-color: #979af4;" type="submit"><i class="fa fa-save">&nbsp;&nbsp;</i> Update </button>
               &nbsp;&nbsp;<a href="{{ route('index') }}" style="background-color: #979af4;" class="btn btn-primary" type="button"><i class="fa fa-times">&nbsp;&nbsp;</i> Cancel </a>
             </div>
           </div>
         </form>

  </div>
</div>
       <!-- / Content -->
@endsection