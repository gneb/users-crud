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
                                id="checkbox1"
                                name="options[]"
                                value="1"
                            />
                            <label for="checkbox1"></label>
                        </span>
                    </td>
                    <td>{{$user->first_name}}</td>
                    <td>{{$user->last_name}}</td>
                    <td>{{$user->age}}</td>
                    <td>
                        <a
                            href="#viewEmployeeModal"
                            class="add"
                            data-toggle="modal"
                            ><i
                                class="fa fa-eye fa-1x"
                                aria-hidden="true"
                                data-bs-toggle="tooltip"
                                data-bs-placement="auto"
                                data-bs-title="Add new user"
                            ></i
                        ></a>
                        <a
                            href="#editEmployeeModal"
                            class="edit"
                            data-toggle="modal"
                            ><i
                                class="fa fa-pencil fa-1x"
                                aria-hidden="true"
                                data-bs-toggle="tooltip"
                                data-bs-placement="auto"
                                title="Edit"
                            ></i
                        ></a>
                        <a
                            href="#deleteUserModal"
                            class="delete"
                            data-toggle="modal"
                            ><i
                                class="fa fa-trash fa-1x"
                                aria-hidden="true"
                                data-bs-toggle="tooltip"
                                data-bs-placement="auto"
                                title="Delete"
                            ></i
                        ></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="clearfix">{!! $users->links() !!}</div>
    </div>
    <div class="table-responsive"></div>

    <!-- Edit Modal HTML -->
    <div
        class="modal fade"
        id="addUserModal"
        tabindex="-1"
        aria-labelledby="addUserModalLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addUserModalLabel">
                        Add new user
                    </h1>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" required />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" required />
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <textarea class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control" required />
                    </div>
                </div>
                <div class="modal-footer">
                    <button
                        type="button"
                        class="btn btn-secondary"
                        data-bs-dismiss="modal"
                    >
                        Close
                    </button>
                    <button type="button" class="btn btn-success">
                        Save changes
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Edit Modal HTML -->
    <div id="editEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Employee</h4>
                        <button
                            type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-hidden="true"
                        >
                            &times;
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" required />
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" required />
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control" required />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input
                            type="button"
                            class="btn btn-default"
                            data-dismiss="modal"
                            value="Cancel"
                        />
                        <input
                            type="submit"
                            class="btn btn-info"
                            value="Save"
                        />
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Delete Modal HTML -->
    <div
        class="modal fade"
        id="deleteUserModal"
        tabindex="-1"
        aria-labelledby="deleteUserModalLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="deleteUserModalLabel">
                        Delete user
                    </h1>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>
                </div>
                <div class="modal-body">
                    Are you sure want to delete these user(s)?
                    <ol class="list-group list-group-numbered">
                        <li class="list-group-item border-0">
                            Cras justo odio
                        </li>
                    </ol>
                </div>
                <div class="modal-footer">
                    <button
                        type="button"
                        class="btn btn-secondary"
                        data-bs-dismiss="modal"
                    >
                        Cancel
                    </button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>
    @endsection
</div>
