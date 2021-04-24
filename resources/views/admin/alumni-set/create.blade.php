@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title">
            {{ trans('global.create') }} Alumni Set
        </h4>
    </div>

    <div class="card-body">
        <form action="{{ route("admin.alumni-set.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="custom-file-control thumbnail"
                 style="width: 500px; height: 260px;">
                <img src=""
                     alt="Alumni Set Image" width="700" height="350"/>
            </div>
            <div class="custom-file form-group">
                <input type="file" name="main_img" class="custom-file-input" id="chooseFile">
                <label class="custom-file-label" for="chooseFile">Select Image</label>
            </div>
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">Name (Alias)</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="{{ old('name', isset($slider) ? $slider->name: '') }}">
                @if($errors->has('name'))
                    <p class="help-block">
                        {{ $errors->first('name') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.slider.fields.location_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('from') ? 'has-error' : '' }}">
                <label for="from">From (Year)</label>
                <select name="from" id="roles" class="form-control select2">
                    @foreach($ranges as $range)
                    <option value="{{$range}}" > {{$range}} </option>
                    @endforeach
                </select>
                @if($errors->has('from'))
                    <p class="help-block">
                        {{ $errors->first('from') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('to') ? 'has-error' : '' }}">
                <label for="to">To (Year)</label>
                <select name="to" id="roles" class="form-control select2">
                    @foreach($ranges as $range)
                        <option value="{{$range}}" > {{$range}} </option>
                    @endforeach
                </select>
                @if($errors->has('to'))
                    <p class="help-block">
                        {{ $errors->first('to') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.name_helper') }}
                </p>
            </div>
            
            <div class="form-group nopadding {{ $errors->has('content') ? 'has-error' : '' }}">
                <label for="content"> Description </label>
                <textarea id="content" name="content" rows="2" class="form-control" placeholder="{{ old('content', isset($slider) ? $slider->content : '') }}" ></textarea>
                @if($errors->has('content'))
                    <p class="help-block">
                        {{ $errors->first('content') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.submenu_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('active') ? 'has-error' : '' }}">
                <label for="active">Active?</label>
                <select name="active" id="roles" class="form-control select2">
                    <option value="1" selected> Yes </option>
                    <option value="0" > No </option>
                </select>
                @if($errors->has('active'))
                    <p class="help-block">
                        {{ $errors->first('active') }}
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
