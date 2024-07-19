@extends('layout.master')

@section('page-title')
  Home
@endsection

@section('main-content')

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8  mb-5 mb-lg-0">
                <article class="row mb-5">
    <div class="col-12">
        <div class="post-slider">
            @forelse($images as $image)
            @if($image->image = "No Image Found")
            <img loading="lazy" src="/uploads/no-img.jpg" class="img-fluid" alt="post-thumb">
            @else
            <img loading="lazy" src="/uploads/{{ $product->image }}" class="img-fluid" alt="post-thumb">
            @endif
            @empty
        <div class="alert alert-danger">No Record Found</div>
        @endforelse        
        </div>
        
    </div>
    
                    @forelse($products as $product)
                    <div class="col-12 mx-auto">
                        <h3><a class="post-title" href="{{ route('postElement') }}">{{ $product->blog_title }}</a></h3>
                        <ul class="list-inline post-meta mb-4">
                            <li class="list-inline-item"><i class="ti-user mr-2"></i>
                                <a href="{{ route('author') }}">{{ $product->blog_title }}</a>
                            </li>
                            <li class="list-inline-item">Date : {{ $product->created_at }}</li>
                            @forelse($categories as $category)
                            <li class="list-inline-item">Category : <a href="#!" class="ml-1">{{ $category->title }} </a>
                            </li>
                            @empty
                <div class="alert alert-danger">No Record Found</div>
            @endforelse
                            @forelse($tags as $tag)
                            <li class="list-inline-item">Tags : <a href="#!" class="ml-1">{{ $tag->tag_name }} </a>
                            </li>
                            @empty
                <div class="alert alert-danger">No Record Found</div>
            @endforelse
                        </ul>
                        <p>{{ $product->description }}</p>
                            <a href="{{ route('postElement') }}" class="btn btn-outline-primary">Continue Reading</a>
                    </div>
                    @empty
                <div class="alert alert-danger">No Record Found</div>
            @endforelse
                </article>
                <article class="row mb-5">
                    <div class="col-12">
                        <div class="post-slider">
                            @if($image->image == 'No Image Found')
                            <img loading="lazy" src="/uploads/no-img.jpg" alt="post-thumb">
                            @else
                            <img loading="lazy" src="/uploads/{{ $image->image }}" alt="post-thumb">
                            @endif
                        </div>
                    </div>
                    <div class="col-12 mx-auto">
                        <h3><a class="post-title" href="{{ route('postDetails1') }}">{{ $product->blog_title }}</a></h3>
                        <ul class="list-inline post-meta mb-4">
                            <li class="list-inline-item"><i class="ti-user mr-2"></i><a href="{{ route('author') }}">{{ $product->blog_title }}</a>
                            </li>
                            <li class="list-inline-item">Date : {{ $product->created_at }}</li>
                            @forelse($categories as $category)
                            <li class="list-inline-item">Category : <a href="#!" class="ml-1">{{ $category->title }} </a>
                            </li>
                            @empty
                <div class="alert alert-danger">No Record Found</div>
            @endforelse
                            @forelse($tags as $tag)
                            <li class="list-inline-item">Tags : <a href="#!" class="ml-1">{{ $tag->tag_name }} </a>
                            </li>
                            @empty
                <div class="alert alert-danger">No Record Found</div>
            @endforelse
                        </ul>
                        <p>{{ $product->description }}</p>
                              <a href="{{ route('postDetails1') }}" class="btn btn-outline-primary">Continue Reading</a>
                    </div>
                </article>
                <article class="row mb-5">
                    <div class="col-12">
                        <div class="post-slider">
                            @forelse($images as $image)
                            @if($image->image = "No Image Found")
                            <img loading="lazy" src="/uploads/no-img.jpg" class="img-fluid" alt="post-thumb">
                            @else
                            <img loading="lazy" src="/uploads/{{ $product->image }}" class="img-fluid" alt="post-thumb">
                            @endif
                            @empty
                        <div class="alert alert-danger">No Record Found</div>
                        @endforelse  
                        </div>
                    </div>
                    <div class="col-12 mx-auto">
                        <h3><a class="post-title" href="{{ route('postDetails2') }}">{{ $product->blog_title }}</a></h3>
                        <ul class="list-inline post-meta mb-4">
                            <li class="list-inline-item"><i class="ti-user mr-2"></i><a href="{{ route('author') }}">{{ $product->blog_title }}</a>
                            </li>
                            <li class="list-inline-item">Date : {{ $product->created_at }}</li>
                            @forelse($categories as $category)
                            <li class="list-inline-item">Category : <a href="#!" class="ml-1">{{ $category->title }} </a>
                            </li>
                            @empty
                <div class="alert alert-danger">No Record Found</div>
            @endforelse
                            @forelse($tags as $tag)
                            <li class="list-inline-item">Tags : <a href="#!" class="ml-1">{{ $tag->tag_name }} </a>
                            </li>
                            @empty
                <div class="alert alert-danger">No Record Found</div>
            @endforelse
                        </ul>
                        <p>{{ $product->description }}</p>
                              <a href="{{ route('postDetails1') }}" class="btn btn-outline-primary">Continue Reading</a>
                    </div>
                </article>
                <article class="row mb-5">
                    <div class="col-12">
                        <div class="post-slider">
                             @if($image->image == 'No Image Found')
                            <img loading="lazy" src="/uploads/no-img.jpg" width="690" class="img-fluid" alt="post-thumb">
                            @else
                            <img loading="lazy" src="/uploads/{{ $image->image }}" width="690" class="img-fluid" alt="post-thumb">
                            @endif
                        </div>
                    </div>
                    <div class="col-12 mx-auto">
                        <h3><a class="post-title" href="{{ route('postDetails2') }}">{{ $product->blog_title }}</a></h3>
                        <ul class="list-inline post-meta mb-4">
                            <li class="list-inline-item"><i class="ti-user mr-2"></i><a href="{{ route('author') }}">{{ $product->blog_title }}</a>
                            </li>
                            <li class="list-inline-item">Date : {{ $product->created_at }}</li>
                            @forelse($categories as $category)
                            <li class="list-inline-item">Category : <a href="#!" class="ml-1">{{ $category->title }} </a>
                            </li>
                            @empty
                <div class="alert alert-danger">No Record Found</div>
            @endforelse
                            @forelse($tags as $tag)
                            <li class="list-inline-item">Tags : <a href="#!" class="ml-1">{{ $tag->tag_name }} </a>
                            </li>
                            @empty
                <div class="alert alert-danger">No Record Found</div>
            @endforelse
                        </ul>
                        <p>{{ $product->description }}</p>
                             <a href="{{ route('postDetails2') }}" class="btn btn-outline-primary">Continue Reading</a>
                    </div>
                </article>
                <article class="row mb-5">
                    <div class="col-12">
                        <div class="post-slider">
                            @forelse($images as $image)
                            @if($image->image = "No Image Found")
                            <img loading="lazy" src="/uploads/no-img.jpg" class="img-fluid" alt="post-thumb">
                            @else
                            <img loading="lazy" src="/uploads/{{ $product->image }}" class="img-fluid" alt="post-thumb">
                            @endif
                            @empty
                        <div class="alert alert-danger">No Record Found</div>
                        @endforelse   
                        </div>
                    </div>
                    <div class="col-12 mx-auto">
                        <h3><a class="post-title" href="{{ route('postDetails1') }}">{{ $product->blog_title }}</a></h3>
                        <ul class="list-inline post-meta mb-4">
                            <li class="list-inline-item"><i class="ti-user mr-2"></i><a href="{{ route('author') }}">{{ $product->blog_title }}</a>
                            </li>
                            <li class="list-inline-item">Date : {{ $product->created_at }}</li>
                            @forelse($categories as $category)
                            <li class="list-inline-item">Category : <a href="#!" class="ml-1">{{ $category->title }} </a>
                            </li>
                            @empty
                <div class="alert alert-danger">No Record Found</div>
            @endforelse
                            @forelse($tags as $tag)
                            <li class="list-inline-item">Tags : <a href="#!" class="ml-1">{{ $tag->tag_name }} </a>
                            </li>
                            @empty
                <div class="alert alert-danger">No Record Found</div>
            @endforelse
                        </ul>
                        <p>{{ $product->description }}</p> 
                             <a href="{{ route('postDetails1') }}" class="btn btn-outline-primary">Continue Reading</a>
                    </div>
                </article>
                <article class="row mb-5">
                    <div class="col-12">
                        <div class="post-slider">
                            @if($product->image == 'No Image Found')
                            <img loading="lazy" src="/uploads/no-img.jpg" width="690" class="img-fluid" alt="post-thumb">
                            @else
                            <img loading="lazy" src="/uploads/{{ $product->image }}" width="690" class="img-fluid" alt="post-thumb">
                            @endif
                        </div>
                    </div>
                    <div class="col-12 mx-auto">
                        <h3><a class="post-title" href="{{ route('postDetails1') }}">{{ $product->blog_title }}</a></h3>
                        <ul class="list-inline post-meta mb-4">
                            <li class="list-inline-item"><i class="ti-user mr-2"></i><a href="{{ route('author') }}">{{ $product->blog_title }}</a>
                            </li>
                            <li class="list-inline-item">Date : {{ $product->created_at }}</li>
                            @forelse($categories as $category)
                            <li class="list-inline-item">Category : <a href="#!" class="ml-1">{{ $category->title }} </a>
                            </li>
                            @empty
                <div class="alert alert-danger">No Record Found</div>
            @endforelse
                            @forelse($tags as $tag)
                            <li class="list-inline-item">Tags : <a href="#!" class="ml-1">{{ $tag->tag_name }} </a>
                            </li>
                            @empty
                <div class="alert alert-danger">No Record Found</div>
            @endforelse
                        </ul>
                        <p>{{ $product->description }}</p>
                             <a href="{{ route('postDetails1') }}" class="btn btn-outline-primary">Continue Reading</a>
                    </div>
                </article>
                <article class="row mb-5">
                    <div class="col-12 mx-auto">
                        <h3><a class="post-title" href="{{ route('postDetails2') }}">{{ $product->blog_title }}</a></h3>
                        <ul class="list-inline post-meta mb-4">
                            <li class="list-inline-item"><i class="ti-user mr-2"></i><a href="{{ route('author') }}">{{ $product->blog_title }}</a>
                            </li>
                            <li class="list-inline-item">Date : {{ $product->created_at }}</li>
                            @forelse($categories as $category)
                            <li class="list-inline-item">Category : <a href="#!" class="ml-1">{{ $category->title }} </a>
                            </li>
                            @empty
                <div class="alert alert-danger">No Record Found</div>
            @endforelse
                            @forelse($tags as $tag)
                            <li class="list-inline-item">Tags : <a href="#!" class="ml-1">{{ $tag->tag_name }} </a>
                            </li>
                            @empty
                <div class="alert alert-danger">No Record Found</div>
            @endforelse
                        </ul>
                        <p>{{ $product->description }}</p> 
                            <a href="{{ route('postDetails2') }}" class="btn btn-outline-primary">Continue Reading</a>
                    </div>
                </article>
            </div>
            <aside class="col-lg-4">
                   <!-- Search -->
   <div class="widget">
      <h5 class="widget-title"><span>Search</span></h5>
      <form action="/logbook-hugo/search" class="widget-search">
         <input id="search-query" name="s" type="search" placeholder="Type &amp; Hit Enter...">
         <button type="submit"><i class="ti-search"></i>
         </button>
      </form>
   </div>
   <!-- categories -->
   <div class="widget">
      <h5 class="widget-title"><span>Categories</span></h5>
      @forelse($Allcategories as $Allcategory)
      <ul class="list-unstyled widget-list">
         <li><a href="{{ route('postElement' , $Allcategory->id) }}" class="d-flex">{{ $Allcategory->title }}
               <small class="ml-auto">({{ $Allcategory->id }})</small></a>
         </li>
      </ul>
      <hr>
      @empty
      <div class="alert alert-danger">No Record Found</div>
      @endforelse

   </div>
   <!-- tags -->
   <div class="widget">
    <h5 class="widget-title"><span>Tags</span></h5>
    @forelse($tagnames as $tagname)
    <span class="badge badge-pill badge-secondary p-2 mb-2">
        <a href ="{{ route('postElement' , $tag->id) }}" style="color:white;">{{ $tagname->tag_name }}</a>
    </span>
    @empty
    <div class="alert alert-danger">No Record Found</div>
    @endforelse
</div>
   
   <div class="widget">
      <h5 class="widget-title"><span>Latest Article</span></h5>
      <!-- post-item -->
      <ul class="list-unstyled widget-list">
         <li class="media widget-post align-items-center">
            <a href="{{ route('postElement') }}">
               @if($image->image == 'No Image Found')
               <img loading="lazy" class="mr-3" src="/uploads/no-img.jpg">
                @else
               <img loading="lazy" class="mr-3" src="/uploads/{{ $image->image }}">
                @endif
            </a>
            <div class="media-body">
               <h5 class="h6 mb-0"><a href="{{ route('postElement') }}">{{ $product->blog_title }}</a></h5>
               <small>{{ $product->created_at }}</small>
            </div>
         </li>
      </ul>
      <ul class="list-unstyled widget-list">
         <li class="media widget-post align-items-center">
            <a href="{{ route('postDetails1') }}">
               @if($image->image == 'No Image Found')
               <img loading="lazy" class="mr-3" src="/uploads/no-img.jpg">
                @else
               <img loading="lazy" class="mr-3" src="/uploads/{{ $image->image }}">
                @endif
            </a>
            <div class="media-body">
               <h5 class="h6 mb-0"><a href="{{ route('postDetails1') }}">{{ $product->blog_title }}</a>
               </h5>
               <small>{{ $product->created_at }}</small>
            </div>
         </li>
      </ul>
      <ul class="list-unstyled widget-list">
         <li class="media widget-post align-items-center">
            <a href="{{ route('postDetails2') }}">
                 @if($image->image == 'No Image Found')
               <img loading="lazy" class="mr-3" src="/uploads/no-img.jpg">
                @else
               <img loading="lazy" class="mr-3" src="/uploads/{{ $image->image }}">
                @endif
            </a>
            <div class="media-body">
               <h5 class="h6 mb-0"><a href="{{ route('postDetails2') }}">{{ $product->blog_title }}</a>
               </h5>
               <small>{{ $product->created_at }}</small>
            </div>
         </li>
      </ul>
   </div>
            </aside>
        </div>
    </div>
</section>

@endsection