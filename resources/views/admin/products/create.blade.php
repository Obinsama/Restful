@extends('admin.layout')
@section('content')

    <br>
    <br>
    <br>
    <div class="col-md-6 ml-auto mr-auto">
        @if (count($errors) > 0)

            <div class="alert alert-danger">

                <strong>Whoops!</strong> There were some problems with your input.<br><br>

                <ul>

                    @foreach ($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif
        <form  action="{{route('products.store')}}" method="POST" >
            @csrf
            <div class="card ">
                <div class="card-header card-header-rose card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">military_tech</i>
                    </div>
                    <h4 class="card-title">Create product</h4>

                </div>
                <div class="card-body ">
                    <div class="form-group bmd-form-group">
                        <label for="name" class="bmd-label-floating"> Nom </label>
                        <input type="text" class="form-control" name="name" id="name" required="true" aria-required="true" value="">
                    </div>
                    <div class="form-group bmd-form-group">
                        <label for="price" class="bmd-label-floating"> Prix </label>
                        <input type="text" class="form-control" name="price" id="price" required="true" aria-required="true" value="">
                    </div>
                    <div class="form-group bmd-form-group">
                        <label for="validity" class="bmd-label-floating"> Validite </label>
                        <input type="text" class="form-control" name="validity" id="validity" required="true" aria-required="true" value="">
                    </div>
                    <div class="form-group bmd-form-group">
                        <label for="detail" class="bmd-label-floating"> Description </label>
                        <textarea  class="form-control" name="detail" id="detail" required="true" aria-required="true"></textarea>
                    </div>
                    {{--                    <div class="category form-category">* Required fields</div>--}}
                </div>

                <div class="card-footer text-right">
                    <a href="{{route('products.index')}}" class="btn btn-rose">Back</a>
                    <button type="submit" class="btn btn-rose">Create</button>
                </div>
            </div>
        </form>
    </div>
@endsection