
@extends('admin.home.layout.master')

@section('page-title')
  Blogs Lists
@endsection

@section('main-content')
  
<div class="content-wrapper">
  
  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
      <div class="col-md-6">
          <a href="{{ route('add.product') }}" class="btn btn-primary" data-toggle="tooltip" title="Create"><i class="fa fa-plus"></i>&nbsp;Add Blog</a>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-md-6">
        @if(session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
        @endif
      </div>
    </div>
    <h4 class="py-3 mb-0">
      Blogs List
    </h4>
    {{-- table --}}
      <div class="card">
        <div class="card-datatable table-responsive">
          @if($products)
          <table class="datatables-products table border-top table table-bordered">
              <thead style="background-color: #979af4;font-style:italic;">
                <tr>
                  <th style="width: 3%;">id</th>
                  <th>Blog Title</th>
                  <th>Category</th>
                  <th class ="text-center">Tags</th>
                  <th class ="text-center">Description</th>
                  <th class ="text-center">Image</th>
                  <th class ="text-center">status</th>
                  <th class ="text-center">actions</th>
                </tr>
              </thead>
              <tbody class = "table-group-divider">

                @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->blog_title }}</td>
                    <td>{{ $product->Blog_category }}</td>
                    <td class ="text-center">{{ $product->blog_Tags }}</td>
                    <td class ="text-center">{{ $product->description }}</td>
                    <td class ="text-center">
                      
                      @if($product->image == 'No Image Found')
                      <img src="/uploads/no-img.jpg" width="80" height="80" alt="No Image Found">
                      @else
                      <img src="/uploads/{{ $product->image }}" width="80" height="80" alt="No Image Found">
                    </td>
                    @endif
                    <td class ="text-center">

                      @if($product->status == 'ACTIVE')
                      <a href="{{ route('product.status' , $product->id) }}"><i class="fa-regular fa-thumbs-up"></i></a>
                      @else
                      <a href="{{ route('product.status' , $product->id) }}"><i class="fa-regular fa-thumbs-down"></i></a>
                      @endif

                    </td>
                    <td class ="text-center">
                      <a href="{{ route('product.edit' , $product->id) }}" title="Edit"> <i class="fa fa-edit"></i></a>&nbsp;&nbsp;&nbsp;
                      <a href="{{ route('product.delete' , $product->id) }}" onclick ="return confirm('Are You Sure..??')" ktitle="Delete"> <i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
          
        </div>
      </div>
      <div class="text-center mt-4">
        {{ $products->links() }}
        </div>
    {{-- End table --}}
      
  </div>
  

</div>

  @else
  <div class ="alert alert-danger">No Records Found</div>
  @endif

@endsection