@include('layouts/app')
<div class="flex justify-center w-full mt-10">
    @if ($errors)
        <div class="text-red rounded mt-2">
            <span>
                <strong class="block">{{ $errors->first('title') }}</strong>
                <strong class="block">{{ $errors->first('desc') }}</strong>
                <strong class="block">{{ $errors->first('price') }}</strong>
            </span>
        </div>
    @endif
    <form action="{{ url('product/create')}}" method="post" autocomplete="off">
        @csrf
        <p>Title</p>
        <input class="border border-black" name="title"/>
        <p>Description</p>
        <input class="border border-black" name="desc" /><br>
        <p>Price</p>
        <input class="border border-black" name="price" /><br>
        <button class="border border-black px-3 py-2 mt-4 bg-white">Add Product</button>
    </form>
</div>
