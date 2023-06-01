<div class="card">
    <div class="card-header">
      User details
    </div>
    <div class="card-body">
      <p class="card-text">
        <ul class="list-unstyled">
            <li>
                Username: <b>{{$user->username}}</b>
            </li>
            <li>
                First name: <b>{{$user->first_name}}</b>
            </li>
            <li>
                Last name: <b>{{$user->last_name}}</b>
            </li>
            <li>
                Registered: <b title="{{$user->created_at}}">{{$user->created_at->diffForHumans()}}</b>
            </li>
            <li>
                Role: <b>{{$user->is_admin == 1 ? 'Admin' : 'User'}}</b>
            </li>
        </ul>
      </p>
    </div>
  </div>