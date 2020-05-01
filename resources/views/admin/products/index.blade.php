@extends('layouts.admin')
@section('title')
    ALL PRODUCTS
@endsection
@section('content')
    <div class="col-12">
        <h1 class="text-primary">All Products</h1>
    </div>
   <div class="col-12">
       <a href="{{route('products.create')}}" class="btn btn-outline-primary btn-sm border-left-primary">
           <i class="fas fa-plus-circle"></i>
           Create Product
       </a>
       <div class="d-flex justify-content-center">
           <a class="badge badge-primary m-1 p-3" href="{{route('products.index')}}">All</a>
           @foreach($brands as $brand)
               <a class="badge badge-primary m-1 p-3" href="{{route('admin.productsPerBrand', $brand->id)}}">{{$brand->name}}</a>
           @endforeach
       </div>




   </div>
    <div class="col-12 mt-3">
        <table class="table table-bordered table-hover table-sm shadow rounded" id="brands-table">
            <thead class="bg-primary text-white">
            <tr>
                <th scope="row">Id</th>
                <th scope="row">Image</th>
                <th scope="row"><i class="fas fa-tags mx-1"></i>Category</th>
                <th scope="row"><i class="fas fa-copyright mx-1"></i>Brand</th>
                <th scope="row"><i class="fab fa-product-hunt mx-1"></i>Product</th>
                <th scope="row">Description</th>
                <th scope="row">Price</th>
                <th scope="row">Created At</th>
                <th scope="row">Updated At</th>
            </tr>
            </thead>

            <tbody>
            @if($products)
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td><img height="60" src="{{$product->photo ? asset('/images/products/' . $product->photo->file) : "Geen foto
                        momenteel"}}" alt=""></td>
                        <td>{{$product->category ?  $product->category->name : 'geen category'}}</td>
                        <td>{{$product->brand ?  $product->brand->name : 'geen category'}}</td>
                        <td>
                            <a href="{{route('products.edit', $product->id)}}">{{$product->name}}</a>
                        </td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->created_at}}</td>
                        <td>{{$product->updated_at}}</td>
                    </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
@endsection
