@extends('layouts.app')

@section('content')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div align="right">
    <a href="{{ route('photo.index') }}" class="btn btn-default">Back</a>
</div>
<br />
<form method="post" action="{{ route('photo.update', $data->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="form-group">
        <label class="col-md-4 text-right">Enter Description</label>
        <div class="col-md-8">
            <input type="text" name="description" value="{{ $data->description }}" class="form-control input-lg" />
        </div>
    </div>
    <br />
    <br />
    <br />
    <div class="form-group">
        <label class="col-md-4 text-right">Select Image</label>
        <div class="col-md-8">
            <input type="file" name="name" />
            <img src="https://storagephotobook.blob.core.windows.net/photos/{{ $data->name }}" class="img-thumbnail" width="100" />
            <input type="hidden" name="hidden_image" value="{{ $data->name }}" />
        </div>
    </div>
    <br /><br /><br />
    <div class="form-group text-center">
        <input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit" />
    </div>
</form>

@endsection