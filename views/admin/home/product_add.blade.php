@extends('admin.home.layout.master')

@section('page-title')
  Add Blog
@endsection

@section('main-content')
<style>
  .bootstrap-tagsinput {
    width: 100%;
  }

  .bootstrap-tagsinput .tag {
    background-color: #5f61e6; 
    color: white;
    margin-right: 2px;
    padding: 2px 5px;
    border-radius: 8px;
  }
</style>
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

                    <div class="row" @error('category_id') has-error @enderror>
                      <div class="col-md-6">
                        <div class="row">
                          <div class="col-md-12">
                            <label for="" class="mt-2 mb-2">Blog Category</label>
                            <select name="category_id" id="category_id" class="form-control">
                              <option value="none" {{ old('category_id') == 'none' ? 'selected' : '' }}>-- Select Category --</option>
                              @foreach( $categories as $category )
                              <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->title }}</option>
                              @endforeach
                            </select>
                            @error('category_id')
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
                            <input type="text" value="{{ old('blog_tags') }}" placeholder="Tags" name="blog_tags" id="blog_tags" class="form-control tag" data-role="tagsinput">
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