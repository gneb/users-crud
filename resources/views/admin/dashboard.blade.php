@extends('layouts.admin.layout') @section('content')
<div class="table-responsive">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Manage <b>Users</b></h2>
                </div>
                <div class="col-sm-6">
                    <a
                        class="btn btn-large btn-success p-2"
                        data-bs-toggle="modal"
                        data-bs-target="#addUserModal"
                    >
                        Add New User
                        <i
                            class="fa fa-trash fa-1x align-middle mt-1"
                            aria-hidden="true"
                        ></i>
                    </a>
                    <a
                        id="deleteSelectedUser"
                        data-bs-toggle="modal"
                        data-bs-target="#deleteUserModal"
                        class="btn btn-large btn-danger p-2"
                    >
                        Delete
                        <i
                            class="fa fa-trash fa-1x align-middle mt-1"
                            aria-hidden="true"
                        ></i>
                    </a>
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>
                        <span class="custom-checkbox">
                            <input type="checkbox" id="selectAll" />
                            <label for="selectAll"></label>
                        </span>
                    </th>
                    <th>#</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Age</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>
                        <span class="custom-checkbox">
                            <input
                                type="checkbox"
                                id="checkbox{{$user->id}}"
                                name="options[]"
                                value="1"
                                data-id="{{$user->id}}"
                                data-name="{{Str::limit($user->first_name, 15) . Str::limit($user->last_name, 15)}}"
                            />
                            <label for="checkbox{{$user->id}}"></label>
                        </span>
                    </td>
                    <td>{{$user->id}}</td>
                    <td>{{Str::limit($user->first_name, 15)}}</td>
                    <td>{{Str::limit($user->last_name, 15)}}</td>
                    <td>{{$user->age}}</td>
                    <td>
                        <a
                            class="add"
                            data-bs-toggle="modal"
                            data-bs-target="#viewUserModal{{$user->id}}"
                            role="button"
                            ><i
                                class="fa fa-eye fa-1x"
                                aria-hidden="true"
                                data-bs-toggle="tooltip"
                                data-bs-placement="auto"
                                data-bs-title="View user"
                            ></i
                        ></a>
                        <a
                            data-bs-toggle="modal"
                            data-bs-target="#editUserModal{{$user->id}}"
                            role="button"
                            class="edit"
                            ><i
                                class="fa fa-pencil fa-1x"
                                aria-hidden="true"
                                data-bs-toggle="tooltip"
                                data-bs-placement="auto"
                                title="Edit"
                            ></i
                        ></a>
                        <a
                            class="delete deleteSingleUser"
                            data-toggle="modal"
                            data-id="{{$user->id}}"
                            data-name="{{Str::limit($user->first_name, 15) . ' ' . Str::limit($user->last_name, 15)}}"
                            role="button"
                            ><i
                                class="fa fa-trash fa-1x"
                                aria-hidden="true"
                                data-bs-toggle="tooltip"
                                data-bs-placement="auto"
                                data-id="{{$user->id}}"
                                data-name="{{Str::limit($user->first_name, 15) . ' ' . Str::limit($user->last_name, 15)}}"
                                title="Delete"
                            ></i
                        ></a>
                    </td>
                </tr>
                @include('partials.admin.modals.view_user', ['user' => $user])
                @include('partials.admin.modals.edit_user', ['user' => $user])
                @endforeach
            </tbody>
        </table>
        <div class="clearfix">{!! $users->links() !!}</div>
    </div>
    <div class="table-responsive"></div>

    @include('partials.admin.modals.add_user')
    @include('partials.admin.modals.delete_user') @endsection
</div>
