@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title">
            {{ trans('global.edit') }} {{ $slider->name }} Alumni
        </h4>
    </div>

    <div class="card-body">
        <form action="{{ route("admin.alumni.update", [$slider->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="custom-file-control thumbnail"
                 style="width: 750px; height: 260px;">
                <img src="{{url('/images/'.$slider->pic)}}"
                     alt="Alumni Image" width="550" height="250" />
            </div>
            <div class="custom-file form-group">
                <input type="file" name="pic" class="custom-file-input" id="chooseFile" value="{{ $slider->name }}">
                <label class="custom-file-label" for="chooseFile">Select Alumni Image</label>
            </div>
            <div class="form-group {{ $errors->has('setId') ? 'has-error' : '' }}">
                <label for="setId">Alumni Set</label>
                <select name="setId" id="roles" class="form-control select2">
                    @foreach($sets as $set)
                        <option value="{{$set['id']}}" {{$slider->setId==$set['id'] ? 'selected' : ''}}> {{$set['name']}} </option>
                    @endforeach
                </select>
                @if($errors->has('setId'))
                    <p class="help-block">
                        {{ $errors->first('setId') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('class') ? 'has-error' : '' }}">
                <label for="class"> Class (Must be in the set range </label>
                <input type="text" id="class" name="class" class="form-control" placeholder="{{ old('class', isset($slider) ? $slider->class: '') }}" value="{{ old('class', isset($slider) ? $slider->class: '') }}">
                @if($errors->has('class'))
                    <p class="help-block">
                        {{ $errors->first('class') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.slider.fields.location_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name"> Name </label>
                <input type="text" id="name" name="name" class="form-control" placeholder="{{ old('name', isset($slider) ? $slider->name: '') }}" value="{{ old('name', isset($slider) ? $slider->name: '') }}">
                @if($errors->has('name'))
                    <p class="help-block">
                        {{ $errors->first('name') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.slider.fields.location_helper') }}
                </p>
            </div>
            <div class="form-group nopadding {{ $errors->has('about') ? 'has-error' : '' }}">
                <label for="about"> About </label>
                <textarea id="about" name="about" rows="2" class="form-control" placeholder="{{ old('about', isset($slider) ? $slider->about : '') }}" >{{ old('about', isset($slider) ? $slider->about : '') }}</textarea>
                @if($errors->has('about'))
                    <p class="help-block">
                        {{ $errors->first('about') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.submenu_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('position') ? 'has-error' : '' }}">
                <label for="position"> Position </label>
                <input type="number" id="position" name="position" class="form-control" placeholder="{{ old('position', isset($slider) ? $slider->position: '') }}" value="{{ old('position', isset($slider) ? $slider->position: '') }}" required>
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
                <label for="visibility">visibility?</label>
                <select name="visibility" id="roles" class="form-control select2">
                    <option value="1" {{$slider->visibility==1 ? 'selected' : ''}}> Yes </option>
                    <option value="0" {{$slider->visibility==0 ? 'selected' : ''}}> No </option>
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
