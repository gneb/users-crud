<div
    id="editEmployeeModal{{$user->id}}"
    class="modal fade"
    aria-labelledby="editEmployeeModal{{$user->id}}Label"
    aria-hidden="true"
    tabindex="-1"
>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="deleteUserModalLabel">
                    Update user: {{$user->username}}
                </h1>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                ></button>
            </div>
            <div class="modal-body">
                @include('partials.admin.forms.edit_user', ['user' => $user])
            </div>
        </div>
    </div>
</div>
