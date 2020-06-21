@extends('admin.layout')


@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12 ">

                    <div class="pull-left">

                        <h2>Products</h2>

                    </div>



                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-rose card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">assignment</i>
                            </div>
                            <h4 class="card-title">Management </h4>
                            <div class="pull-right">

                                @can('product-create')

                                    <a class="btn btn-success" style="float: right" href="{{ route('products.create') }}"> Create New Product</a>

                                @endcan

                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                @if ($message = Session::get('success'))

                                    <div class="alert alert-success">

                                        <p>{{ $message }}</p>

                                    </div>

                                @endif
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>

                                        <th>No</th>

                                        <th>Name</th>

                                        <th>Details</th>

                                        <th width="280px">Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($products as $product)
                                        @can('product-edit')
                                            <tr>

                                                <td>{{ ++$i }}</td>

                                                <td>{{ $product->name }}</td>

                                                <td>{{ $product->detail }}</td>

                                                <td>

                                                    <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                                                        <a class="btn btn-sm btn-info" href="{{ route('products.show',$product->id) }}">Show</a>

                                                        @can('product-edit')

                                                            <a class="btn btn-sm btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>

                                                        @endcan


                                                        @csrf

                                                        @method('DELETE')

                                                        @can('product-delete')

                                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>

                                                        @endcan

                                                    </form>

                                                </td>

                                            </tr>
                                        @endcan
                                    @endforeach
                                    </tbody>
                                </table>
                                {!! $products->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row justify-content-center">

                    @foreach ($products as $product)
                        <div class=" col-md-3">
                            <div class="card card-pricing ">
                                <h6 class="card-category"> {{$product->name}}</h6>
                                <div class="card-body">
                                    <div class="card-icon icon-rose ">
                                        <i class="material-icons">home</i>
                                    </div>
                                    <h3 class="card-title">{{$product->price}} FCFA</h3>
                                    <p class="card-description">{{$product->detail}}</p>
                                </div>
                                <div class="card-footer justify-content-center ">
                                    <a href="{{route('purchase',$product->id)}}" class="btn btn-round btn-rose">Choose Plan</a>
                                </div>
                            </div>
                        </div>
                        <clear></clear>

                    @endforeach

            </div>
        </div>
    </div>




@endsection