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
