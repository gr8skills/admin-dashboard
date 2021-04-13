@extends('layouts.admin')
@section('content')


<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title">
            {{ trans('global.edit') }} About Us -> History
        </h4>
    </div>

    <div class="card-body">
        <form action="{{ route("admin.about-us-history.update", [$history->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('title1') ? 'has-error' : '' }}">
                <h2 class="h2">OUR HISTORY</h2>
                <div class="custom-file-control thumbnail form-group"
                     style="width: 400px; height: 300px; background-color: grey">
                    <img src="{{url('images/'.$history->main_img)}}"
                         alt="Header Image" width="550" height="300" class="" />
                </div>
                <div class="custom-file form-group">
                    <input type="file" name="main_img" class="custom-file-input form-control" id="chooseFile1">
                    <label class="custom-file-label" for="chooseFile1">Select Image: </label>
                </div>
                <label for="title1">Title</label>
                <input type="text" id="title1" name="title1" class="form-control" value="{{ old('title1', isset($history) ? $history->title1 : '') }}" required>
                @if($errors->has('title1'))
                    <p class="help-block">
                        {{ $errors->first('title1') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.name_helper') }}
                </p>
            </div>

            <div class="form-group nopadding {{ $errors->has('bolded') ? 'has-error' : '' }}">
                <label for="bolded">Bold Content</label>
                <textarea id="bolded" name="bolded" rows="2" class="form-control" placeholder="{{ old('bolded', isset($history) ? $history->bolded : '') }}" >{{ old('bolded', isset($history) ? $history->bolded : '') }}</textarea>
                @if($errors->has('bolded'))
                    <p class="help-block">
                        {{ $errors->first('bolded') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.submenu_helper') }}
                </p>
            </div>

            <div class="form-group nopadding {{ $errors->has('content1') ? 'has-error' : '' }}">
                <label for="content1">Content 1</label>
                <textarea id="content1" name="content1" rows="2" class="form-control" placeholder="{{ old('content1', isset($history) ? $history->content1 : '') }}" >{{ old('bolded', isset($history) ? $history->content1 : '') }}</textarea>
                @if($errors->has('content1'))
                    <p class="help-block">
                        {{ $errors->first('content1') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.submenu_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('title2') ? 'has-error' : '' }}">
                <label for="title2">Title 2</label>
                <input type="text" id="title2" name="title2" class="form-control" value="{{ old('title2', isset($history) ? $history->title2 : '') }}" >
                @if($errors->has('title2'))
                    <p class="help-block">
                        {{ $errors->first('title2') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.name_helper') }}
                </p>
            </div>

            <div class="form-group nopadding {{ $errors->has('content2') ? 'has-error' : '' }}">
                <label for="content2">Content 2</label>
                <textarea id="content2" name="content2" rows="2" class="form-control" placeholder="{{ old('content2', isset($history) ? $history->content2 : '') }}" >{{ old('content2', isset($history) ? $history->content2 : '') }}</textarea>
                @if($errors->has('content2'))
                    <p class="help-block">
                        {{ $errors->first('content2') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.submenu_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('title3') ? 'has-error' : '' }}">
                <label for="title3">Title 3</label>
                <input type="text" id="title3" name="title3" class="form-control" value="{{ old('title3', isset($history) ? $history->title3 : '') }}" >
                @if($errors->has('title3'))
                    <p class="help-block">
                        {{ $errors->first('title3') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.name_helper') }}
                </p>
            </div>

            <div class="form-group nopadding {{ $errors->has('content3') ? 'has-error' : '' }}">
                <label for="content3">Content 3</label>
                <textarea id="content3" name="content3" rows="2" class="form-control" placeholder="{{ old('content3', isset($history) ? $history->content3 : '') }}" >{{ old('content3', isset($history) ? $history->content3 : '') }}</textarea>
                @if($errors->has('content3'))
                    <p class="help-block">
                        {{ $errors->first('content3') }}
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
