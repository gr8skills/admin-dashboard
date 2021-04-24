@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title">
            {{ trans('global.create') }} Image Gallery
        </h4>
    </div>

    <div class="card-body">
        <form action="{{ route("admin.gallery.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="custom-file-control thumbnail"
                 style="width: 500px; height: 260px;">
                <img src=""
                     alt="Gallery Image" width="700" height="350"/>
            </div>
            <div class="custom-file form-group">
                <input type="file" name="name" class="custom-file-input" id="chooseFile" required>
                <label class="custom-file-label" for="chooseFile">Select Gallery Image</label>
            </div>
            <div class="form-group nopadding {{ $errors->has('description') ? 'has-error' : '' }}">
                <label for="description">Description</label>
                <textarea id="description" name="description" rows="2" class="form-control" placeholder="{{ old('description', isset($slider) ? $slider->description : '') }}" ></textarea>
                @if($errors->has('description'))
                    <p class="help-block">
                        {{ $errors->first('description') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.submenu_helper') }}
                </p>
            </div>
            
            <div class="form-group {{ $errors->has('position') ? 'has-error' : '' }}">
                <label for="position">Position</label>
                <input type="number" id="position" name="position" class="form-control" placeholder="{{ old('position', isset($slider) ? $slider->position: '') }}">
            @if($errors->has('position'))
                    <p class="help-block">
                        {{ $errors->first('position') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.slider.fields.location_helper') }}
                </p>
            </div>


            <div class="form-group {{ $errors->has('visibility') ? 'has-error' : '' }}">
                <label for="visibility">Visibility</label>
                <select name="visibility" id="roles" class="form-control select2">
                    <option value="0" >Hide</option>
                    <option value="1" >Show</option>
                </select>
                @if($errors->has('visibility'))
                    <p class="help-block">
                        {{ $errors->first('visibility') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.visibility_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>
@endsection
