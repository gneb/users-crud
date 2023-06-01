@if (\Session::has('success'))
<div class="alert alert-success text-center">
    <p class="mb-0">{!! \Session::get('success') !!}</p>
</div>
@endif @if (\Session::has('error'))
<div class="alert alert-danger text-center">
    <p class="mb-0">{!! \Session::get('error') !!}</p>
</div>
@endif
