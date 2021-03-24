@extends('layouts.admin')
@section('content')


<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title">
            {{ trans('global.edit') }} About Us -> Leadership
        </h4>
    </div>

    <div class="card-body">
        <form action="{{ route("admin.about-us-leadership.update", [$realLeader->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <h2 class="h2">LEADERSHIP</h2>
            <div class="form-group {{ $errors->has('title1') ? 'has-error' : '' }}">

                <label for="title1">Title</label>
                <input type="text" id="title1" name="title1" class="form-control" value="{{ old('title1', isset($realLeader) ? $realLeader->title1 : '') }}" required>
                @if($errors->has('title1'))
                    <p class="help-block">
                        {{ $errors->first('title1') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.name_helper') }}
                </p>
            </div>
{{--            <div class="custom-file-control thumbnail"--}}
{{--                 style="width: 200px; height: 150px;">--}}
{{--                --}}{{--                            <img src="{{url('/images/slides'.isset($slider) ? $slider->location : '')}}"--}}
{{--                --}}{{--                                 alt="School Logo Image"/>--}}
{{--            </div>--}}
{{--            <div class="custom-file form-group">--}}
{{--                <input type="file" name="principal_image" class="custom-file-input" id="chooseFile">--}}
{{--                <label class="custom-file-label" for="chooseFile">Select Principal's Image: </label>--}}
{{--            </div>--}}
            <div class="form-group {{ $errors->has('image1_name') ? 'has-error' : '' }}">

                <label for="image1_name">Image 1 Name</label>
                <input type="text" id="image1_name" name="image1_name" class="form-control" value="{{ old('image1_name', isset($realLeader) ? $realLeader->image1_name : '') }}" >
                @if($errors->has('image1_name'))
                    <p class="help-block">
                        {{ $errors->first('image1_name') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group nopadding {{ $errors->has('image1_content') ? 'has-error' : '' }}">
                <label for="image1_content">Image 1 Content</label>
                <textarea id="image1_content" name="image1_content" rows="2" class="form-control" placeholder="{{ old('image1_content', isset($realLeader) ? $realLeader->image1_content : '') }}" >{{ old('image1_content', isset($realLeader) ? $realLeader->image1_content : '') }}</textarea>
                @if($errors->has('image1_content'))
                    <p class="help-block">
                        {{ $errors->first('image1_content') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.submenu_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('image2_name') ? 'has-error' : '' }}">

                <label for="image2_name">Image 2 Name</label>
                <input type="text" id="image2_name" name="image2_name" class="form-control" value="{{ old('image2_name', isset($realLeader) ? $realLeader->image2_name : '') }}" >
                @if($errors->has('image2_name'))
                    <p class="help-block">
                        {{ $errors->first('image2_name') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group nopadding {{ $errors->has('image2_content') ? 'has-error' : '' }}">
                <label for="image2_content">Image 2 Content</label>
                <textarea id="image2_content" name="image2_content" rows="2" class="form-control" placeholder="{{ old('image2_content', isset($realLeader) ? $realLeader->image2_content : '') }}" >{{ old('image2_content', isset($realLeader) ? $realLeader->image2_content : '') }}</textarea>
                @if($errors->has('image2_content'))
                    <p class="help-block">
                        {{ $errors->first('image2_content') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.submenu_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('title2') ? 'has-error' : '' }}">

                <label for="title2">Title 2</label>
                <input type="text" id="title2" name="title2" class="form-control" value="{{ old('title2', isset($realLeader) ? $realLeader->title2 : '') }}" >
                @if($errors->has('title2'))
                    <p class="help-block">
                        {{ $errors->first('title2') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group nopadding {{ $errors->has('title2_content') ? 'has-error' : '' }}">
                <label for="title2_content">Title 2 Content</label>
                <textarea id="title2_content" name="title2_content" rows="2" class="form-control" placeholder="{{ old('title2_content', isset($realLeader) ? $realLeader->title2_content : '') }}" >{{ old('title2_content', isset($realLeader) ? $realLeader->title2_content : '') }}</textarea>
                @if($errors->has('title2_content'))
                    <p class="help-block">
                        {{ $errors->first('title2_content') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.submenu_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('title3') ? 'has-error' : '' }}">

                <label for="title3">Title 3</label>
                <input type="text" id="title3" name="title3" class="form-control" value="{{ old('title3', isset($realLeader) ? $realLeader->title3 : '') }}" >
                @if($errors->has('title3'))
                    <p class="help-block">
                        {{ $errors->first('title3') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group nopadding {{ $errors->has('title3_content') ? 'has-error' : '' }}">
                <label for="title3_content">Title 3 Content</label>
                <textarea id="title3_content" name="title3_content" rows="2" class="form-control" placeholder="{{ old('title3_content', isset($realLeader) ? $realLeader->title3_content : '') }}" >{{ old('title3_content', isset($realLeader) ? $realLeader->title3_content : '') }}</textarea>
                @if($errors->has('title3_content'))
                    <p class="help-block">
                        {{ $errors->first('title3_content') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.submenu_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('lImage1_name') ? 'has-error' : '' }}">

                <label for="lImage1_name">Leader Image 1</label>
                <input type="text" id="lImage1_name" name="lImage1_name" class="form-control" value="{{ old('lImage1_name', isset($realLeader) ? $realLeader->lImage1_name : '') }}" >
                @if($errors->has('lImage1_name'))
                    <p class="help-block">
                        {{ $errors->first('lImage1_name') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('lImage1_unit') ? 'has-error' : '' }}">

                <label for="lImage1_unit">Leader Image 1 Unit</label>
                <input type="text" id="lImage1_unit" name="lImage1_unit" class="form-control" value="{{ old('lImage1_unit', isset($realLeader) ? $realLeader->lImage1_unit : '') }}" >
                @if($errors->has('lImage1_unit'))
                    <p class="help-block">
                        {{ $errors->first('lImage1_unit') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.name_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('lImage2_name') ? 'has-error' : '' }}">

                <label for="lImage2_name">Leader Image 2</label>
                <input type="text" id="lImage2_name" name="lImage2_name" class="form-control" value="{{ old('lImage2_name', isset($realLeader) ? $realLeader->lImage2_name : '') }}" >
                @if($errors->has('lImage2_name'))
                    <p class="help-block">
                        {{ $errors->first('lImage2_name') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('lImage2_unit') ? 'has-error' : '' }}">

                <label for="lImage2_unit">Leader Image 2 Unit</label>
                <input type="text" id="lImage2_unit" name="lImage2_unit" class="form-control" value="{{ old('lImage2_unit', isset($realLeader) ? $realLeader->lImage2_unit : '') }}" >
                @if($errors->has('lImage2_unit'))
                    <p class="help-block">
                        {{ $errors->first('lImage2_unit') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.name_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('lImage3_name') ? 'has-error' : '' }}">

                <label for="lImage3_name">Leader Image 3</label>
                <input type="text" id="lImage3_name" name="lImage3_name" class="form-control" value="{{ old('lImage3_name', isset($realLeader) ? $realLeader->lImage3_name : '') }}" >
                @if($errors->has('lImage3_name'))
                    <p class="help-block">
                        {{ $errors->first('lImage3_name') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('lImage3_unit') ? 'has-error' : '' }}">

                <label for="lImage3_unit">Leader Image 3 Unit</label>
                <input type="text" id="lImage3_unit" name="lImage3_unit" class="form-control" value="{{ old('lImage3_unit', isset($realLeader) ? $realLeader->lImage3_unit : '') }}" >
                @if($errors->has('lImage3_unit'))
                    <p class="help-block">
                        {{ $errors->first('lImage3_unit') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.name_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('lImage4_name') ? 'has-error' : '' }}">

                <label for="lImage4_name">Leader Image 4</label>
                <input type="text" id="lImage4_name" name="lImage4_name" class="form-control" value="{{ old('lImage4_name', isset($realLeader) ? $realLeader->lImage4_name : '') }}" >
                @if($errors->has('lImage4_name'))
                    <p class="help-block">
                        {{ $errors->first('lImage4_name') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('lImage4_unit') ? 'has-error' : '' }}">

                <label for="lImage4_unit">Leader Image 4 Unit</label>
                <input type="text" id="lImage4_unit" name="lImage4_unit" class="form-control" value="{{ old('lImage4_unit', isset($realLeader) ? $realLeader->lImage4_unit : '') }}" >
                @if($errors->has('lImage4_unit'))
                    <p class="help-block">
                        {{ $errors->first('lImage4_unit') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.name_helper') }}
                </p>
            </div>

            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>

@endsection
