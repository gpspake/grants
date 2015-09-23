@extends('admin.layout')

@section('content')
    <div class="container-fluid">
        <div class="row page-title-row">
            <div class="col-md-6">
                <h3>Users <small>» Listing</small></h3>
            </div>
            <div class="col-md-6 text-right">
                <a href="/admin/tag/create" class="btn btn-success btn-md">
                    <i class="fa fa-plus-circle"></i> New User
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">

                @include('admin.partials.errors')
                @include('admin.partials.success')

                <table id="tags-table" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Net Id</th>
                        <th>Email</th>
                        <th class="hidden-sm">First Name</th>
                        <th class="hidden-md">Last Name</th>
                        <th class="hidden-md">Display Name</th>
                        <th data-sortable="false">Actions</th>
                    </tr>
                    </thead>
                    <tbody>


                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->netid }}</td>
                            <td>{{ $user->email }}</td>
                            <td class="hidden-sm">{{ $user->first_name }}</td>
                            <td class="hidden-md">{{ $user->last_name }}</td>
                            <td class="hidden-md">{{ $user->display_name }}</td>
                            <td>
                                <a href="/admin/user/{{ $user->id }}/edit"
                                   class="btn btn-xs btn-info">
                                    <i class="fa fa-edit"></i> Edit
                                </a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script>
        $(function() {
            $("#tags-table").DataTable({
            });
        });
    </script>
@stop