@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title">
            {{ trans('global.edit') }} Gallery Image
        </h4>
    </div>

    <div class="card-body">
        <form action="{{ route("admin.gallery.update", [$slider->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="custom-file-control thumbnail"
                 style="width: 750px; height: 260px;">
                <img src="{{url('/images/'.$slider->name)}}"
                     alt="Gallery Image" width="550" height="250" />
            </div>
            <div class="custom-file form-group">
                <input type="file" name="name" class="custom-file-input" id="chooseFile" value="{{ $slider->name }}">
                <label class="custom-file-label" for="chooseFile">Select Gallery Image</label>
            </div>
            <div class="form-group padding-top {{ $errors->has('description') ? 'has-error' : '' }}">
                <label for="description">Description</label>
                <textarea id="description" name="description" rows="2" class="form-control" placeholder="{{ old('description', isset($slider) ? $slider->description : '') }}" >{{ old('description', isset($slider) ? $slider->description : '') }}</textarea>
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
                <label for="position">Position </label>
                <input type="text" id="position" name="position" class="form-control" value="{{ old('position', isset($slider) ? $slider->position: '') }}">
                @if($errors->has('position'))
                    <p class="help-block">
                        {{ $errors->first('position') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.slider.fields.position_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('type') ? 'has-error' : '' }}">
                <label for="visibility">Visibility * </label>
                <select name="visibility" id="visibility" class="form-control select2">
                    <option value="0" {{$slider->visibility==0 ? 'selected' : ''}}>Hide</option>
                    <option value="1" {{$slider->visibility==1 ? 'selected' : ''}}>Show</option>
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
