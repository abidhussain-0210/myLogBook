@extends('layout.master')

@section('page-title')
  Post-Details-1
@endsection

@section('main-content')
<section class="section">
	<div class="container">
		<article class="row mb-4">
			@forelse($products as $product)
			<div class="col-lg-10 mx-auto mb-4">
				<h1 class="h2 mb-3">{{ $product->blog_title }}</h1>
				<ul class="list-inline post-meta mb-3">
					<li class="list-inline-item"><i class="ti-user mr-2"></i><a href="{{ route('author') }}">{{ $product->blog_title }}</a>
					</li>
					<li class="list-inline-item">Date : {{ $product->created_at }}</li>
					<li class="list-inline-item">Categories : {{ $product->category_id }}<a href="#!" class="ml-1">Photography </a>
					</li>
					<li class="list-inline-item">Tags : {{ $product->blog_Tags }}<a href="#!" class="ml-1">Photo </a> ,<a href="#!" class="ml-1">Image </a>
					</li>
				</ul>
			</div>
			 @empty
                <div class="alert alert-danger">No Record Found</div>
            @endforelse
			<div class="col-12 mb-3">
				<div class="post-slider">
					 @if($product->image == 'No Image Found')
                            <img loading="lazy" src="/uploads/no-img.jpg" width="690" class="img-fluid" alt="post-thumb">
                            @else
                            <img loading="lazy" src="/uploads/{{ $product->image }}" width="690" class="img-fluid" alt="post-thumb">
                            @endif
				</div>
			</div>
			<div class="col-lg-10 mx-auto">
				<div class="content">
					<p>{{ $product->description }}</p>
					<p>{{ $product->description }}</p>
					<p>{{ $product->description }}</p>
					<p>{{ $product->description }}</p>
				</div>
			</div>
		</article>
	</div>
</section>

@endsection