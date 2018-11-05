@extends('dashboard/master')
@section('edit')
<h1>Edit the Items</h1>
<form action="{{ route('product.update', ['id' => $product->id]) }}" method="POST" class="col-md-6">

       @csrf
         @method('PUT')

   <h3 class="text-center">Update Product Record</h3>

   <div class="form-group">

       <label for="" class="control-label">Product Name</label>

       <input type="text" name="name" value="{{ $product->name}}" class="form-control">

   </div>

   <div class="form-group">

       <label for="" class="control-label">Product Size</label>

       <input type="text" name="size" value="{{ $product->size }}" class="form-control">

   </div>

  
   <div class="form-group">

       <input type="hidden" name="id" value="{{ $product->id }}" >

       <button class='form-control btn btn-primary' type='submit'> Update →</button>

   </div>

</form>


@endsection