@extends('admin.home.layout.master')

@section('page-title')
  Add Product
@endsection

@section('main-content')
  <div class="content-wrapper">
     <div class="container-xxl flex-grow-1 container-p-y">
      <div class="row">
        <div class="col-md-6">
          @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
          @endif
        </div>
      </div>
        <h4 class="py-3 mb-4">
          <span> Add Product</span>
        </h4>

            <form name="createProduct" id="createProduct" method="POST" action="{{ route('product.store') }}">
              @csrf
              <div class="col-md-12">
                    <div class="row" @error('product_name') has-error @enderror>
                      <div class="col-md-6">
                        <div class="row">
                          <div class="col-md-12">
                            <label for="" class="mb-2">Product Name</label>
                            <input name="name" id="name" type="text" value="{{ old('product_name') }}" class="form-control" placeholder="Product Name">
                            @error('product_name')
                          <div style="color:red;text-transform: capitalize;font-size: 10px;">{{ $message }}</div>
                          @enderror
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row" @error('category') has-error @enderror>
                      <div class="col-md-6">
                        <div class="row">
                          <div class="col-md-12">
                            <label for="" class="mb-2 mt-2">Category</label><br>
                            <input name="category" id="category" type="text" value="{{ old('category') }}" class="form-control" placeholder="Category Name">
                            @error('category')
                            <div style="color:red;text-transform: capitalize;font-size: 10px;">{{ $message }}</div>
                            @enderror
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row" @error('price') has-error @enderror>
                      <div class="col-md-6">
                        <div class="row">
                          <div class="col-md-12">
                            <label for="" class="mb-2 mt-2">Price</label><br>
                            <input name="price" id="price" type="text" value="{{ old('price') }}" class="form-control" placeholder="Price">
                            @error('price')
                            <div style="color:red;text-transform: capitalize;font-size: 10px;">{{ $message }}</div>
                            @enderror
                          </div>
                        </div>
                      </div>
                    </div>

                      <div class="row" @error('quantity') has-error @enderror>
                      <div class="col-md-6">
                        <div class="row">
                          <div class="col-md-12">
                            <label for="" class="mb-2 mt-2">Quantity</label><br>
                            <input name="quantity" id="quantity" type="text" value="{{ old('quantity') }}" class="form-control" placeholder="Quantity">
                            @error('quantity')
                            <div style="color:red;text-transform: capitalize;font-size: 10px;">{{ $message }}</div>
                            @enderror
                          </div>
                        </div>
                      </div>
                    </div>
                <br>
                <div class="form-actions">
                  <button id="submit" class="btn btn-primary" style="background-color: #979af4;" type="submit"><i class="fa fa-save">&nbsp;&nbsp;</i> Save </button>
                  &nbsp;&nbsp;<a href="{{ route('add.product') }}" style="background-color: #979af4;" class="btn btn-primary" type="button"><i class="fa fa-times">&nbsp;&nbsp;</i> Cancel </a>
                </div>
              </div>
            </form>

     </div>
  </div>
          <!-- / Content -->
@endsection