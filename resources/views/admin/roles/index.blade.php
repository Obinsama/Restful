@extends('admin.layout')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-rose card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">assignment</i>
                            </div>
                            <h4 class="card-title">Roles </h4>
                            @can('role-create')

                                <a class="btn btn-success pull-right" style="float: right" href="{{ route('roles.create') }}"> Create New Role</a>

                            @endcan
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">

                                @if ($message = Session::get('success'))

                                    <div class="alert alert-success">

                                        <p>{{ $message }}</p>

                                    </div>

                                @endif
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Name</th>
                                        <th>Guard Name</th>
                                        <th>Created At</th>
                                        <th class="">Updated At</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        @foreach ($roles as $key => $role)
                                            <td class="text-center">{{ ++$i }}</td>
                                            <td>{{ $role->name }}</td>
                                            <td>{{ $role->name }}</td>
                                            <td>{{ $role->created_at }}</td>
                                            <td class="">{{ $role->updated_at }}</td>
                                            <td class="td-actions text-right">
                                                <a href="{{route('roles.show',$role->id)}}" rel="tooltip" class="btn btn-info btn-link">
                                                    <i class="material-icons">visibility</i>
                                                </a>
                                                @can('role-edit')
                                                    <a href="{{route('roles.edit',$role->id)}}" rel="tooltip" class="btn btn-success btn-link">
                                                        <i class="material-icons">edit</i>
                                                    </a>
                                                @endcan
                                                @can('role-delete')
                                                    <button href="{{route('roles.destroy',$role->id)}}" rel="tooltip" class="btn btn-danger btn-link" onclick="event.preventDefault();
                                                     document.getElementById('delete-form').submit();">
                                                        <i class="material-icons">close</i>
                                                        <form id="delete-form" action="{{ route('roles.destroy',$role->id) }}" method="POST" style="display: none;">
                                                            <input name="_method" type="hidden" value="DELETE">
                                                            @csrf
                                                        </form>
                                                    </button>
                                                @endcan
                                            </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {!! $roles->render() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection