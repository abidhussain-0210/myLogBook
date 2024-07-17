@extends('layout.master')

@section('page-title')
  Post-Details-2
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
					<li class="list-inline-item">Categories : {{ $product->Blog_category }}<a href="#!" class="ml-1">Photobooth </a>
					</li>
					<li class="list-inline-item">Tags : {{ $product->blog_Tags }}<a href="#!" class="ml-1">Booth </a> ,<a href="#!" class="ml-1">Image </a>
					</li>
				</ul>
			</div>
			@empty
                <div class="alert alert-danger">No Record Found</div>
            @endforelse
			<div class="col-12 mb-3">
				<div class="post-slider">
					<img src="assets/images/post/post-2.jpg" class="img-fluid" alt="post-thumb">
					<img src="assets/images/post/post-4.jpg" class="img-fluid" alt="post-thumb">
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