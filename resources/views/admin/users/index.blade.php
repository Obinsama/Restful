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
                    <h4 class="card-title">Users </h4>
                    @can('user-create')

                        <a class="btn btn-success pull-right" style="float: right" href="{{ route('users.create') }}"> Create New User</a>

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
                                <th>Email</th>
                                <th>Role</th>
                                <th class="text-right">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            {{--                            <tr>--}}
                            {{--                                <td class="text-center">1</td>--}}
                            {{--                                <td>Andrew Mike</td>--}}
                            {{--                                <td>Develop</td>--}}
                            {{--                                <td>2013</td>--}}
                            {{--                                <td class="text-right">&euro; 99,225</td>--}}
                            {{--                                <td class="td-actions text-right">--}}
                            {{--                                    <button type="button" rel="tooltip" class="btn btn-info">--}}
                            {{--                                        <i class="material-icons">person</i>--}}
                            {{--                                    </button>--}}
                            {{--                                    <button type="button" rel="tooltip" class="btn btn-success">--}}
                            {{--                                        <i class="material-icons">edit</i>--}}
                            {{--                                    </button>--}}
                            {{--                                    <button type="button" rel="tooltip" class="btn btn-danger">--}}
                            {{--                                        <i class="material-icons">close</i>--}}
                            {{--                                    </button>--}}
                            {{--                                </td>--}}
                            {{--                            </tr>--}}
                            <tr>
                                @foreach ($data as $key => $user)
                                    <td class="text-center">{{ ++$i }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>   @if(!empty($user->getRoleNames()))

                                            @foreach($user->getRoleNames() as $v)

                                                <label class="badge badge-success">{{ $v }}</label>

                                            @endforeach

                                        @endif
                                    </td>
                                    <td class="td-actions text-right">
                                        <a href="{{route('users.show',$user->id)}}" rel="tooltip" class="btn btn-info btn-link">
                                            <i class="material-icons">visibility</i>
                                        </a>
                                        @can('user-edit')
                                            <a href="{{route('users.edit',$user->id)}}" rel="tooltip" class="btn btn-success btn-link">
                                                <i class="material-icons">edit</i>
                                            </a>
                                        @endcan
                                        @can('user-delete')
                                            <button rel="tooltip" class="btn btn-danger btn-link" onclick="event.preventDefault();
                                                     document.getElementById('delete-form').submit();">
                                                <i class="material-icons">close</i>
                                                <form id="delete-form" action="{{ route('users.destroy',$user->id) }}" method="POST" style="display: none;">
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
{{--                        {!! $user->render() !!}--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>
@endsection