@if ($errors->any())
@php
eval(\Psy\sh());
@endphp
<div class="card-text text-left alert alert-danger">
  <ul class="mb-0">
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif