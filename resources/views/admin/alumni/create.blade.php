@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title">
            {{ trans('global.create') }} Alumni 
        </h4>
    </div>

    <div class="card-body">
        <form action="{{ route("admin.alumni.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="custom-file-control thumbnail"
                 style="width: 500px; height: 260px;">
                <img src=""
                     alt="Alumni Image" width="700" height="350"/>
            </div>
            <div class="custom-file form-group">
                <input type="file" name="pic" class="custom-file-input" id="chooseFile">
                <label class="custom-file-label" for="chooseFile">Select Image</label>
            </div>
            <div class="form-group {{ $errors->has('setId') ? 'has-error' : '' }}">
                <label for="setId">Alumni Set</label>
                <select name="setId" id="roles" class="form-control select2">
                    @foreach($sets as $set)
                        <option value="{{$set->id}}"> {{$set->name}} </option>
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
                <label for="class"> Class (Must be in the set range) </label>
                <input type="text" id="class" name="class" class="form-control" placeholder="{{ old('class', isset($slider) ? $slider->class: '') }}">
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
                <input type="text" id="name" name="name" class="form-control" placeholder="Profession - Full Name">
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
                <textarea id="about" name="about" rows="2" class="form-control" placeholder="{{ old('about', isset($slider) ? $slider->about : '') }}" ></textarea>
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
                <input type="number" id="position" name="position" class="form-control" placeholder="{{ old('position', isset($slider) ? $slider->position: '') }}" required>
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
                    <option value="1"> Yes </option>
                    <option value="0"> No </option>
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
