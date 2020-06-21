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
        <form  action="{{route('users.update',$user->id)}}" method="POST" accept-charset="UTF-8">
            <input name="_method" type="hidden" value="PATCH">
            @csrf
{{--            {!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}--}}

            <div class="card ">
                <div class="card-header card-header-rose card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">military_tech</i>
                    </div>
                    <h4 class="card-title">Create User</h4>

                </div>
                <div class="card-body ">
                    <div class="form-group bmd-form-group">
                        <label for="name" class="bmd-label-floating"> Nom </label>
                        <input type="text" class="form-control" value="{{$user->name}}" name="name" id="name" required="true" aria-required="true">
                    </div>
                    <div class="form-group bmd-form-group">
                        <label for="email" class="bmd-label-floating"> Email </label>
                        <input type="email" class="form-control"value="{{$user->email}}" name="email" id="email" required="true" aria-required="true">
                    </div>
                    <div class="form-group bmd-form-group">
                        <label for="password" class="bmd-label-floating"> Password </label>
                        <input type="password" class="form-control" name="password" id="password"  aria-required="true">
                    </div>
                    <div class="form-group bmd-form-group">
                        <label for="passconfirm" class="bmd-label-floating"> Password Confirmation </label>
                        <input type="password" class="form-control" name="confirm-password" id="passconfirm" aria-required="true">
                    </div>
                    {{--                    <div class="category form-category">* Required fields</div>--}}
                </div>
                <br>
                <br>

                <strong style="margin-left: 20px">Role:</strong>
                <div class="form-group col-md-8" style="margin: 10px 0px 20px 20px">
                    {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple')) !!}s
                </div>
                <div class="card-footer text-right">
                    <a href="{{route('users.index')}}" class="btn btn-rose">Back</a>
                    <button type="submit" class="btn btn-rose">Update</button>
                </div>
            </div>
        </form>
    </div>
@endsection