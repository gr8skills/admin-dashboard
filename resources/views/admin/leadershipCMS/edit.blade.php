@extends('layouts.admin')
@section('content')


<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title">
            {{ trans('global.edit') }} About Us -> Principal's Welcome
        </h4>
    </div>

    <div class="card-body">
        <form action="{{ route("admin.aboutUsLeadership.update", [$leadership->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                <h2 class="h2">WELCOME TO THE BLOOMBREED SCHOOLS</h2>
                <label for="title">Title</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ old('name', isset($leadership) ? $leadership->title : '') }}" required>
                @if($errors->has('title'))
                    <p class="help-block">
                        {{ $errors->first('title') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.name_helper') }}
                </p>
            </div>
            <div class="custom-file-control thumbnail"
                 style="width: 200px; height: 150px;">
                {{--                            <img src="{{url('/images/slides'.isset($slider) ? $slider->location : '')}}"--}}
                {{--                                 alt="School Logo Image"/>--}}
            </div>
            <div class="custom-file form-group">
                <input type="file" name="principal_image" class="custom-file-input" id="chooseFile">
                <label class="custom-file-label" for="chooseFile">Select Principal's Image: </label>
            </div>

            <div class="form-group nopadding {{ $errors->has('content') ? 'has-error' : '' }}">
                <label for="content">Content</label>
                <textarea id="content" name="content" rows="2" class="form-control" placeholder="{{ old('content', isset($leadership) ? $leadership->content : '') }}" >{{ old('content', isset($leadership) ? $leadership->content : '') }}</textarea>
                @if($errors->has('content'))
                    <p class="help-block">
                        {{ $errors->first('content') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.submenu_helper') }}
                </p>
            </div>

            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>

@endsection
