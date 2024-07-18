@extends('admin.home.layout.master')

@section('page-title')
  Add Blog
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
          <span> Add Blog</span>
        </h4>

            <form name="createProduct" id="createProduct" method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
              @csrf
              <div class="col-md-12">
                    <div class="row" @error('blog_title') has-error @enderror>
                      <div class="col-md-6">
                        <div class="row">
                          <div class="col-md-12">
                            <label for="" class="mb-2">Blog Title</label>
                            <input name="blog_title" id="blog_title" type="text" value="{{ old('blog_title') }}" class="form-control" placeholder="Blog Title">
                            @error('blog_title')
                          <div style="color:red;text-transform: capitalize;font-size: 10px;">{{ $message }}</div>
                          @enderror
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row" @error('Blog_category') has-error @enderror>
                      <div class="col-md-6">
                        <div class="row">
                          <div class="col-md-12">
                            <label for="" class="mt-2 mb-2">Blog Category</label>
                            <select name="Blog_category" id="Blog_category" class="form-control">
                              <option value="none" {{ old('Blog_category') == 'none' ? 'selected' : '' }}>-- Select Category --</option>
                              <option value="A" {{ old('Blog_category') == 'A' ? 'selected' : '' }}>A</option>
                              <option value="B" {{ old('Blog_category') == 'B' ? 'selected' : '' }}>B</option>
                              <option value="C" {{ old('Blog_category') == 'C' ? 'selected' : '' }}>C</option>
                            </select>
                            {{-- <select name="Blog_category" value="{{ old('Blog_category') }}" id="Blog_category" class="form-control">
                            <option  value="none">-- Select Category --</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                          </select> --}}

                            {{-- <label for="" class="mb-2 mt-2">Blog Category</label><br>
                            <input name="category" id="category" type="text" value="{{ old('category') }}" class="form-control" placeholder="Blog Category"> --}}
                            @error('Blog_category')
                            <div style="color:red;text-transform: capitalize;font-size: 10px;">{{ $message }}</div>
                            @enderror
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row" @error('blog_tags') has-error @enderror>
                      <div class="col-md-6">
                        <div class="row">
                          <div class="col-md-12">
                            <label for="" class="mb-2 mt-2">Blog Tags</label><br>
                            <input type="text" value="{{ old('blog_tags') }}" placeholder="Tags" name="blog_tags" id="blog_tags" class="form-control" data-role="tagsinput">
                           {{--  <input name="price" id="price" type="text" value="{{ old('price') }}" class="form-control" placeholder="Tags"> --}}
                            @error('blog_tags')
                            <div style="color:red;text-transform: capitalize;font-size: 10px;">{{ $message }}</div>
                            @enderror
                          </div>
                        </div>
                      </div>
                    </div>

                      <div class="row" @error('description') has-error @enderror>
                      <div class="col-md-6">
                        <div class="row">
                          <div class="col-md-12">
                            <label for="" class="mb-2 mt-2">Description</label><br>
                            <textarea name="description" id="description" rows="8" class="form-control" placeholder="Descriptions">{{ old('description') }}</textarea>
                            @error('description')
                            <div style="color:red;text-transform: capitalize;font-size: 10px;">{{ $message }}</div>
                            @enderror
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row" @error('image') has-error @enderror>
                      <div class="col-md-6">
                        <div class="row">
                          <div class="col-md-12">
                            <label for="" class="mb-2 mt-2">Image</label><br>
                            <input type="file" value="{{ old('image') }}" name="image" id="image">
                            @error('image')
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