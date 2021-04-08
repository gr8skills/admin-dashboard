@extends('layouts.admin')
@section('content')


<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title">
            {{ trans('global.edit') }} About Us -> History
        </h4>
    </div>

    <div class="card-body">
        <form action="{{ route("admin.aboutus.update", [$about->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <h2 class="h2">A FUTURE-READY LEARNING COMMUNITY</h2>
            <div class="custom-file-control thumbnail form-group"
                 style="width: 400px; height: 300px; background-color: grey">
                <img src="{{url('images/'.$about->img1)}}"
                     alt="Header Image" width="550" height="300" class="" />
            </div>
            <div class="custom-file form-group">
                <input type="file" name="img1" class="custom-file-input form-control" id="chooseFile1">
                <label class="custom-file-label" for="chooseFile1">Select Image: </label>
            </div>
            <div class="form-group {{ $errors->has('main_title') ? 'has-error' : '' }}">
                <label for="main_title">Main Title</label>
                <input type="text" id="main_title" name="main_title" class="form-control" value="{{ old('main_title', isset($about) ? $about->main_title : '') }}" >
                @if($errors->has('main_title'))
                    <p class="help-block">
                        {{ $errors->first('main_title') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.name_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('sub_main_title') ? 'has-error' : '' }}">
                <label for="sub_main_title">Sub Main Title</label>
                <input type="text" id="sub_main_title" name="sub_main_title" class="form-control" value="{{ old('sub_main_title', isset($about) ? $about->sub_main_title : '') }}" >
                @if($errors->has('sub_main_title'))
                    <p class="help-block">
                        {{ $errors->first('sub_main_title') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.name_helper') }}
                </p>
            </div>

{{--            <div class="custom-file-control thumbnail"--}}
{{--                 style="width: 210px; height: 460px;">--}}
{{--                <img src="{{"data:image/" .$about->imageType. ";base64," .base64_encode( $about->img )}}"--}}
{{--                     alt="Image 1" height="200" width="450"/>--}}
{{--            </div>--}}
{{--            <div class="custom-file form-group">--}}
{{--                <input type="file" name="img" class="custom-file-input" id="chooseFile">--}}
{{--                <label class="custom-file-label" for="chooseFile">Select Image: </label>--}}
{{--            </div>--}}

            <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ old('title', isset($about) ? $about->title : '') }}" >
                @if($errors->has('title'))
                    <p class="help-block">
                        {{ $errors->first('title') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.name_helper') }}
                </p>
            </div>

            <div class="form-group nopadding {{ $errors->has('content1') ? 'has-error' : '' }}">
                <label for="content1">Content</label>
                <textarea id="content1" name="content1" rows="2" class="form-control" placeholder="{{ old('content1', isset($about) ? $about->content1 : '') }}" >{{ old('content1', isset($about) ? $about->content1 : '') }}</textarea>
                @if($errors->has('content1'))
                    <p class="help-block">
                        {{ $errors->first('content1') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.submenu_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('why_bms') ? 'has-error' : '' }}">
                <label for="why_bms">Why LMS</label>
                <input type="text" id="why_bms" name="why_bms" class="form-control" value="{{ old('why_bms', isset($about) ? $about->why_bms : '') }}" >
                @if($errors->has('why_bms'))
                    <p class="help-block">
                        {{ $errors->first('why_bms') }}
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
