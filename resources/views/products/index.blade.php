@include('layouts/header')
<div class="flex">
	<div class="w-full mb-5 px-32" style="margin-left: 320px; margin-right: 320px; background-color: #F3F3F5;">
		<h1 class="text-center mt-20 mb-16 text-3xl font-hairline">Pick Your Pancakes</h1>
		<div class="flex flex-wrap">
			@foreach ($products as $product)
				<div class="w-1/3 px-2 mb-3">
					<div class="text-center" style="background-color: #EBCCDD; height: 300px;">
						<img class="h-48 m-auto pt-5" src="Pancake.png"></img>
						<div class="mt-16">
							<a href="{{ url('product/' . $product->id)}}" class="text-center font-hairline mx-3">VIEW</a>
							<span>-</span>
							<a href="{{ url('product/edit/' . $product->id)}}" class="text-center font-hairline mx-3">EDIT</a>
							<span>-</span>
							<a href="{{ url('product/delete/' . $product->id)}}" class="text-center font-hairline mx-3">DELETE</a>
						</div>
					</div>
					<p class="text-center font-hairline">{{ $product->title }}</p>
					<p class="text-center ">{{ $product->price }}</p>
				</div>
			@endforeach
		</div>
		<p class="text-center h-10 font-hairline"><a href="{{ url('product/create')}}">Create</a></p>
	</div>
</div>
<div class="flex">
	<div class="bg-gray-300 w-full h-screen mb-5 p-2" style="margin-left: 320px; margin-right: 320px; background-color: #F3F3F5;">
		<h1 class="text-center mt-24 text-3xl font-hairline">Categories</h1>
		<div class="w-full flex flex-wrap mt-10 px-32">
			@foreach ($categories as $category)
			<div class="w-full font-hairline mt-3" style="background-color: #EBCCDD;">
				<p>{{ $category->title }}</p>
				<a href="{{ url('category/edit/' . $category->id)}}" class="text-center mt-5">edit</a>
				<a href="{{ url('category/delete/' . $category->id)}}" class="text-center mt-5">delete</a>
			</div>
			@endforeach
		</div>
		<p class="text-center mt-5"><a href="{{ url('category/create')}}">Create</a></p>
	</div>
</div>
