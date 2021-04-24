@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title">
            {{ trans('global.edit') }} {{ $slider->name }} 
        </h4>
    </div>

    <div class="card-body">
        <form action="{{ route("admin.career.update", [$slider->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group {{ $errors->has('category') ? 'has-error' : '' }}">
                <label for="category">Category</label>
                <select name="category" id="roles" class="form-control select2">
                    <option value="pre_elementary" {{$slider->category=='pre_elementary' ? 'selected' : ''}}> Pre School & Elementary School </option>
                    <option value="middle_high" {{$slider->category=='middle_high' ? 'selected' : ''}}> Middle School & High School </option>
                    <option value="support" {{$slider->category=='support' ? 'selected' : ''}}> Supporting Staff </option>
                </select>
                @if($errors->has('category'))
                    <p class="help-block">
                        {{ $errors->first('category') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.slider.fields.location_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('job_title') ? 'has-error' : '' }}">
                <label for="job_title"> Job Title </label>
                <input type="text" id="job_title" name="job_title" class="form-control" placeholder="{{ old('job_title', isset($slider) ? $slider->job_title: '') }}" value="{{ old('job_title', isset($slider) ? $slider->job_title: '') }}">
                @if($errors->has('job_title'))
                    <p class="help-block">
                        {{ $errors->first('job_title') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.slider.fields.location_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('job_link') ? 'has-error' : '' }}">
                <label for="job_link"> Job Link </label>
                <input type="text" id="job_link" name="job_link" class="form-control" placeholder="{{ old('job_link', isset($slider) ? $slider->job_link: '') }}" value="{{ old('job_link', isset($slider) ? $slider->job_link: '') }}" required>
                @if($errors->has('job_link'))
                    <p class="help-block">
                        {{ $errors->first('job_link') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.slider.fields.location_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('visibility') ? 'has-error' : '' }}">
                <label for="visibility">Active?</label>
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
