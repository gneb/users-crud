<form method="POST" action="/users/{{$user->id}}" id="addNewUser">
    @csrf
    @method('PUT')
    <div class="form-floating mb-3">
        <input
            type="text"
            class="form-control"
            name="first_name"
            id="floatingInput"
            placeholder="First Name"
            value="{{ old('first_name') ?? $user->first_name }}"
            required
        />
        <label for="floatingInput">First Name</label>
        @if($errors->has('first_name'))
        <div class="text-danger">
            {{ $errors->first('first_name') }}
        </div>
        @endif
    </div>
    <div class="form-floating mb-3">
        <input
            type="text"
            class="form-control"
            name="last_name"
            id="floatingInput"
            placeholder="Last Name"
            value="{{ old('last_name') ?? $user->last_name }}"
            required
        />
        <label for="floatingInput">Last Name</label>
        @if($errors->has('last_name'))
        <div class="text-danger">
            {{ $errors->first('last_name') }}
        </div>
        @endif
    </div>
    <div class="form-floating mb-3">
        <input
            type="text"
            class="form-control"
            name="username"
            id="floatingInput"
            placeholder="Username"
            value="{{ old('username') ?? $user->username }}"
            autocomplete="one-time-code"
            required
        />
        <label for="floatingInput">Username</label>
        @if($errors->has('username'))
        <div class="text-danger">
            {{ $errors->first('username') }}
        </div>
        @endif
    </div>
    <div class="form-floating mb-3">
        <input
            type="text"
            class="form-control datepicker"
            name="birth_date"
            id="floatingInput"
            placeholder="Birth date (optional)"
            value="{{ old('birth_date') ?? $user->birth_date }}"
            readonly="readonly"
        />
        <label for="floatingInput">Birth date (optional)</label>
        @if($errors->has('birth_date'))
        <div class="text-danger">
            {{ $errors->first('birth_date') }}
        </div>
        @endif
    </div>
    <select
        class="form-select text-muted rounded-0 pt-3 pb-3 mb-3"
        name="is_admin"
        style="font-size: 14px"
        aria-label="Default select example"
    >
        <option {{ old('is_admin') ? (old('is_admin') == '1' ? 'selected' : '') : ($user->is_admin == '1' ? 'selected' : '') }} value="0">User</option>
        <option {{ old('is_admin') ? (old('is_admin') == '1' ? 'selected' : '') : ($user->is_admin == '1' ? 'selected' : '') }} value="1">Admin</option>
    </select>
    @if($errors->has('is_admin'))
    <div class="text-danger">
        {{ $errors->first('is_admin') }}
    </div>
    @endif
    <div class="form-floating mb-3">
        <input
            type="password"
            class="form-control"
            name="password"
            id="floatingInput"
            placeholder="password"
            value="{{ old('password') ?? $user->password }}"
        />
        <label for="floatingInput">Password</label>
        @if($errors->has('password'))
        <div class="text-danger">
            {{ $errors->first('password') }}
        </div>
        @endif
    </div>
    <button type="submit" class="btn btn-success float-end">Update</button>
</form>
