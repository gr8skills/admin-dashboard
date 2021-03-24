@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title">
            {{ trans('global.edit') }} {{ trans('cruds.slider.title_singular') }}
        </h4>
    </div>

    <div class="card-body">
        <form action="{{ route("admin.sliders.update", [$slider->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">{{ trans('cruds.slider.fields.name') }}*</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($slider) ? $slider->name : '') }}">
                @if($errors->has('name'))
                    <p class="help-block">
                        {{ $errors->first('name') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.slider.fields.name_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('alt') ? 'has-error' : '' }}">
                <label for="alt">{{ trans('cruds.slider.fields.alt') }}*</label>
                <input type="text" id="alt" name="alt" class="form-control" value="{{ old('link', isset($slider) ? $slider->alt : '') }}" >
                @if($errors->has('link'))
                    <p class="help-block">
                        {{ $errors->first('alt') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.slider.fields.alt_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('class') ? 'has-error' : '' }}">
                <label for="class">{{ trans('cruds.slider.fields.class') }}</label>
                <input type="text" id="class" name="class" class="form-control" value="{{ old('class', isset($slider) ? $slider->class: '') }}">
                @if($errors->has('class'))
                    <p class="help-block">
                        {{ $errors->first('class') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.slider.fields.class_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('data_image_sizes') ? 'has-error' : '' }}">
                <label for="data_image_sizes">{{ trans('cruds.slider.fields.data_image_sizes') }}</label>
                <input type="text" id="data_image_sizes" name="data_image_sizes" class="form-control" value="{{ old('class', isset($slider) ? $slider->data_image_sizes: '') }}">
                @if($errors->has('data_aspect_ratio'))
                    <p class="help-block">
                        {{ $errors->first('data_image_sizes') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.slider.fields.data_image_sizes_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('data_aspect_ratio') ? 'has-error' : '' }}">
                <label for="data_aspect_ratio">{{ trans('cruds.slider.fields.data_aspect_ratio') }}</label>
                <input type="text" id="data_aspect_ratio" name="data_aspect_ratio" class="form-control" value="{{ old('data_aspect_ratio', isset($slider) ? $slider->data_aspect_ratio: '') }}">
                @if($errors->has('data_aspect_ratio'))
                    <p class="help-block">
                        {{ $errors->first('data_aspect_ratio') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.slider.fields.data_aspect_ratio_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('data_resource_title') ? 'has-error' : '' }}">
                <label for="data_resource_title">{{ trans('cruds.slider.fields.data_aspect_ratio') }}</label>
                <input type="text" id="data_resource_title" name="data_resource_title" class="form-control" value="{{ old('data_resource_title', isset($slider) ? $slider->data_resource_title: '') }}">
                @if($errors->has('data_resource_title'))
                    <p class="help-block">
                        {{ $errors->first('data_resource_title') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.slider.fields.data_resource_title_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('data_resource_uuid') ? 'has-error' : '' }}">
                <label for="data_resource_uuid">{{ trans('cruds.slider.fields.data_resource_uuid') }}</label>
                <input type="text" id="data_resource_uuid" name="data_resource_uuid" class="form-control" value="{{ old('data_resource_uuid', isset($slider) ? $slider->data_resource_uuid: '') }}">
                @if($errors->has('data_resource_uuid'))
                    <p class="help-block">
                        {{ $errors->first('data_resource_uuid') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.slider.fields.data_resource_uuid_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('location') ? 'has-error' : '' }}">
                <label for="location">{{ trans('cruds.slider.fields.location') }}</label>
                <input type="text" id="location" name="location" class="form-control" value="{{ old('location', isset($slider) ? $slider->location: '') }}">
                @if($errors->has('location'))
                    <p class="help-block">
                        {{ $errors->first('location') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.slider.fields.location_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('type') ? 'has-error' : '' }}">
                <label for="type">{{ trans('cruds.slider.fields.type') }}</label>
                <input type="text" id="type" name="type" class="form-control" value="{{ old('type', isset($slider) ? $slider->type: '') }}">
                @if($errors->has('type'))
                    <p class="help-block">
                        {{ $errors->first('type') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.slider.fields.type_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('position') ? 'has-error' : '' }}">
                <label for="position">{{ trans('cruds.slider.fields.position') }}</label>
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
            <div class="custom-file-control thumbnail"
                             style="width: 750px; height: 260px;">
                            <img src="{{url('/images/slides/'.$slider->location)}}"
                                 alt="Slide Image" width="750" height="250" />
            </div>
            <div class="custom-file form-group">
                <input type="file" name="location" class="custom-file-input" id="chooseFile" value="{{ $slider->location }}">
                <label class="custom-file-label" for="chooseFile">Select Slide Image</label>
            </div>
            <hr>

            <div class="form-group {{ $errors->has('type') ? 'has-error' : '' }}">
                <label for="type">{{ trans('cruds.slider.fields.type') }}*</label>
                <select name="type" id="roles" class="form-control select2">
                    <option value="0" {{$slider->type==0 ? 'selected' : ''}}>Hide</option>
                    <option value="1" {{$slider->type==1 ? 'selected' : ''}}>Show</option>
                </select>
                @if($errors->has('type'))
                    <p class="help-block">
                        {{ $errors->first('type') }}
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
