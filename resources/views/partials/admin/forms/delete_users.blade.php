<form method="POST" action="/users">
    @csrf @method('DELETE') @if($errors->has('ids'))
    <div class="text-danger">
        {{ $errors->first('ids') }}
    </div>
    @endif
    <div id="deleteUser"></div>
    <button type="submit" class="btn btn-danger float-end">Delete</button>
</form>
