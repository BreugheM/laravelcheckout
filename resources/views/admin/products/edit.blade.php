@extends('layouts.admin')
@section('title')
    EDIT PRODUCTS
@endsection
@section('content')
    <div class="col-12">
        <h1>Add Product</h1>
        <hr>
    </div>

    <div class="col-12">
        <form method="POST" action="{{action('AdminProductsController@update', $product->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <img class="img-thumbnail mb-3" src="{{$product->photo ? asset('/images/products/'.$product->photo->file)
                                 : 'geen foto momenteel'
                                }}" alt="">
                                <input type="file" class="form-control-file" id="photo_id" name="photo_id">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fab fa-product-hunt"></i></div>
                                    </div>
                                    <input type="text" class="form-control" name="name" placeholder="Name" value="{{$product->name}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text"><i class="fas fa-tags"></i></label>
                                    </div>
                                    <select name="category_id">
                                        <option value="" disabled>Select a category</option>
                                        @foreach($categories as $category)
                                            @if($product->category_id == $category->id)
                                                <option selected value="{{$category->id}}">{{$category->name}}</option>
                                            @else
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text"><i class="fas fa-copyright"></i></label>
                                    </div>
                                    <select class="custom-select" name="brand_id">
                                        <option value="" disabled>Select a brand</option>
                                        @foreach($brands as $brand)
                                            @if($product->brand_id == $brand->id)
                                                <option selected value="{{$brand->id}}">{{$brand->name}}</option>
                                            @else
                                                <option value="{{$brand->id}}">{{$brand->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-euro-sign"></i></div>
                                    </div>
                                    <input type="number" name="price" step="0.05" value="{{$product->price}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <div class="card">
                            <div class="card-header">
                                Description
                            </div>
                            <div class="card-body">
                                <textarea class="form-control rounded-0 " name="description" rows="10">{{$product->description}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit"> <i class="fas fa-save mx-2"></i>Update Product </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
