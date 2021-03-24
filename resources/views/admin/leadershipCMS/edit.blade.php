@extends('layouts.admin')
@section('content')


<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title">
            {{ trans('global.edit') }} About Us -> Principal's Welcome
        </h4>
    </div>

    <div class="card-body">
        <form action="{{ route("admin.about-us-principals-welcome.update", [$leadership->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                <h2 class="h2">WELCOME TO THE BLOOMBREED SCHOOLS</h2>
                <label for="title">Title</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ old('name', isset($leadership) ? $leadership->title : '') }}" required>
                @if($errors->has('title'))
                    <p class="help-block">
                        {{ $errors->first('title') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.name_helper') }}
                </p>
            </div>
            <div class="custom-file-control thumbnail form-group"
                 style="width: 500px; height: 270px;">
                <img src="{{url('/images/'.$leadership->principal_image)}}"
                     alt="Principal's Image" width="400" height="250" class="" />
            </div>
            <div class="custom-file form-group">
                <input type="file" name="principal_image" class="custom-file-input form-control" id="chooseFile">
                <label class="custom-file-label" for="chooseFile">Select Principal's Image: </label>
            </div>

            <div class="form-group nopadding {{ $errors->has('content') ? 'has-error' : '' }}">
                <label for="content">Content</label>
                <textarea id="content" name="content" rows="2" class="form-control" placeholder="{{ old('content', isset($leadership) ? $leadership->content : '') }}" >{{ old('content', isset($leadership) ? $leadership->content : '') }}</textarea>
                @if($errors->has('content'))
                    <p class="help-block">
                        {{ $errors->first('content') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.submenu_helper') }}
                </p>
            </div>

            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>

@endsection
