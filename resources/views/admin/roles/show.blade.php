@extends('admin.layout')
@section('content')
<br>
<br>
<br>
<div class="col-md-6 ml-auto mr-auto">
            <div class="card ">
            <div class="card-header card-header-rose card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">military_tech</i>
                </div>
                <h4 class="card-title">Show Role</h4>

            </div>
            <div class="card-body ">
                <div class="form-group bmd-form-group">
                    <strong> Nom :</strong>
                    {{ $role->name }}
                </div>
                {{--                    <div class="category form-category">* Required fields</div>--}}
            </div>
            <strong style="margin-left: 30px">Permission:</strong>
            <div class="row" style="margin-left: 30px;">

                <br>
                <br>
                <div class=" checkbox-radios" style="height:200px;>
                    @if(!empty($rolePermissions))

                        @foreach($rolePermissions as $v)

                            <label class="label label-success">{{ $v->name }},</label>

                        @endforeach

                    @endif
                </div>
            </div>
            <div class="card-footer text-right">
                <a href="{{route('roles.index')}}" class="btn btn-rose ml-auto mr-auto">Back</a>

            </div>
        </div>

</div>
    @endsection