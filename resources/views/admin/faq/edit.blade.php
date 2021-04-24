@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title">
            {{ trans('global.edit') }} {{ $slider->name }} 
        </h4>
    </div>

    <div class="card-body">
        <form action="{{ route("admin.faq.update", [$slider->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
{{--            <div class="custom-file-control thumbnail"--}}
{{--                 style="width: 550px; height: 250px;">--}}
{{--                <img src="{{url('/images/'.$slider->pic)}}"--}}
{{--                     alt="Alumni Image" width="550" height="250" />--}}
{{--            </div>--}}
{{--            <div class="custom-file form-group">--}}
{{--                <input type="file" name="pic" class="custom-file-input" id="chooseFile" value="{{ $slider->name }}">--}}
{{--                <label class="custom-file-label" for="chooseFile">Select Event Image</label>--}}
{{--            </div>--}}

            <div class="form-group {{ $errors->has('question') ? 'has-error' : '' }}">
                <label for="question"> Question </label>
                <input type="text" id="question" name="question" class="form-control" placeholder="{{ old('question', isset($slider) ? $slider->question: '') }}" value="{{ old('question', isset($slider) ? $slider->question: '') }}">
                @if($errors->has('question'))
                    <p class="help-block">
                        {{ $errors->first('question') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.slider.fields.location_helper') }}
                </p>
            </div>
            <div class="form-group nopadding {{ $errors->has('answer') ? 'has-error' : '' }}">
                <label for="answer"> Answer </label>
                <textarea id="answer" name="answer" rows="2" class="form-control" placeholder="{{ old('answer', isset($slider) ? $slider->answer : '') }}" >{{ old('answer', isset($slider) ? $slider->answer : '') }}</textarea>
                @if($errors->has('answer'))
                    <p class="help-block">
                        {{ $errors->first('answer') }}
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
