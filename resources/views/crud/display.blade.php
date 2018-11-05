@extends('dashboard/master')
@section('display')
<h1>display</h1>
<a href="{{route('product.create')}}">Add New Record</a>
<div class="col-md-12">

           <table class="table table-bordered table-striped">

             <thead>

                 <tr>

                   <th>Product Name</th>

                   <th>Product Size</th>

                   
                 </tr>

             </thead>

             <tbody>
               @if($products->count() > 0)
              

                 @foreach($products as $product)

                 <tr>

                   <td>{{$product->id}}</td>

                   <td>{{$product->name}}</td>

                   <td>{{$product->size}}</td>

                   

                   <td>

                     <a href="{{route('crud.edit',$product->id)}}" class="btn btn-primary">Edit</a>
                      <form action="{{route('product.destroy',$product->id)}}" method="POST">
                        

                       @csrf                        
                       @method('DELETE')          
                                   <input type="submit" name="submit" value="Delete" class="btn btn-danger">

                     </form>

                   </td>

                 </tr>

                 @endforeach

                 @endif

             </tbody>

           </table>

         </div>


@endsection