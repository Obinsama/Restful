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
        {{--            <div class="pull-right">--}}

        {{--                <a class="btn btn-primary" style="float: right" href="{{ route('roles.index') }}"> Back</a>--}}

        {{--            </div>--}}
        {{--        <form  action="{{route('roles.update', $role->id)}}" method="PATCH" >--}}
        {!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}
        @csrf
        <div class="card ">
            <div class="card-header card-header-rose card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">military_tech</i>
                </div>
                <h4 class="card-title">Create Role</h4>

            </div>
            <div class="card-body ">
                <div class="form-group bmd-form-group">
                    <label for="exampleEmail" class="bmd-label-floating"> Nom </label>
                    <input type="text" class="form-control" name="name" id="exampleEmail" required="true" aria-required="true" value="{{$role->name}} ">
                </div>
                {{--                    <div class="category form-category">* Required fields</div>--}}
            </div>
            <strong style="margin-left: 30px">Permission:</strong>
            <div class="row" style="margin-left: 30px;">

                <br>
                <br>
                <div class=" checkbox-radios" style="height:200px;column-count: 2">
                    @foreach($permission as $value)
                        <div class="form-check">
                            <label class="form-check-label">{{ $value->name }}
                                {{$check=in_array($value->id, $rolePermissions)}}
                                @if($check)
                                    <input name="permission[]" checked class="form-check-input" type="checkbox" value="{{$value->id}}"><span class="form-check-sign"><span class="check"></span></span></label>
                            @else
                                <input name="permission[]"  class="form-check-input" type="checkbox" value="{{$value->id}}"><span class="form-check-sign"><span class="check"></span></span></label>

                            @endif
                        </div>
                    @endforeach
                </div>
            </div>

            {{--                <div class="form-group">--}}

            {{--                    <strong>Permission:</strong>--}}

            {{--                    <br/>--}}
            {{--                    <div class="row" style="margin-left: 30px;">--}}
            {{--                        <div class=" checkbox-radios" style="height:200px;column-count: 2">--}}
            {{--                    @foreach($permission as $value)--}}
            {{--                        <div class="form-check">--}}
            {{--                        <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'form-check-input name')) }}--}}

            {{--                            {{ $value->name }}</label>--}}
            {{--                        </div>--}}
            {{--                        <br/>--}}

            {{--                    @endforeach--}}
            {{--                        </div>--}}
            {{--                    </div>--}}

            {{--                </div>--}}

            <div class="card-footer text-right">
                <a href="{{route('roles.index')}}" class="btn btn-rose">Back</a>
                <button type="submit" class="btn btn-rose">Create</button>
            </div>
        </div>
        </form>
    </div>
@endsection