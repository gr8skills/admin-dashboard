@extends('layouts.admin')
@section('content')


<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title">
            {{ trans('global.edit') }} Learning -> Pre School
        </h4>
    </div>

    <div class="card-body">
        <form action="{{ route("admin.preschool.update", [$preschool->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <h2 class="h2">EYFS</h2>
            <div class="form-group {{ $errors->has('title1') ? 'has-error' : '' }}">
                <label for="title1">Title 1</label>
                <input type="text" id="title1" name="title1" class="form-control" value="{{ old('title1', isset($preschool) ? $preschool->title1 : '') }}" >
                @if($errors->has('title1'))
                    <p class="help-block">
                        {{ $errors->first('title1') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.name_helper') }}
                </p>
            </div>

            <div class="form-group nopadding {{ $errors->has('content1') ? 'has-error' : '' }}">
                <label for="content1">Content 1</label>
                <textarea id="content1" name="content1" rows="2" class="form-control" placeholder="{{ old('content1', isset($preschool) ? $preschool->content1 : '') }}" >{{ old('content1', isset($preschool) ? $preschool->content1 : '') }}</textarea>
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
                <input type="text" id="title2" name="title2" class="form-control" value="{{ old('title2', isset($preschool) ? $preschool->title2 : '') }}" >
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
                <textarea id="content2" name="content2" rows="2" class="form-control" placeholder="{{ old('content2', isset($preschool) ? $preschool->content2 : '') }}" >{{ old('content2', isset($preschool) ? $preschool->content2 : '') }}</textarea>
                @if($errors->has('content2'))
                    <p class="help-block">
                        {{ $errors->first('content2') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.submenu_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('link1') ? 'has-error' : '' }}">
                <label for="link1">Link 1</label>
                <input type="text" id="link1" name="link1" class="form-control" value="{{ old('link1', isset($preschool) ? $preschool->link1 : '') }}" >
                @if($errors->has('link1'))
                    <p class="help-block">
                        {{ $errors->first('link1') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.name_helper') }}
                </p>
            </div>

            <div class="custom-file-control thumbnail"
                 style="width: 200px; height: 150px;">
                <img src="{{url('/images/'.$preschool->pic1)}}"
                     alt="Picture 1" width="200" height="150"/>
            </div>
            <div class="custom-file form-group">
                <input type="file" name="pic1" class="custom-file-input" id="chooseFile">
                <label class="custom-file-label" for="chooseFile">Select file</label>
            </div>

            <div class="form-group {{ $errors->has('pic1_title') ? 'has-error' : '' }}">
                <label for="pic1_title">Pic 1 Title</label>
                <input type="text" id="pic1_title" name="pic1_title" class="form-control" value="{{ old('pic1_title', isset($preschool) ? $preschool->pic1_title : '') }}" >
                @if($errors->has('pic1_title'))
                    <p class="help-block">
                        {{ $errors->first('pic1_title') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.name_helper') }}
                </p>
            </div>

            <div class="form-group nopadding {{ $errors->has('pic1_content') ? 'has-error' : '' }}">
                <label for="pic1_content">Pic 1 Content</label>
                <textarea id="pic1_content" name="pic1_content" rows="2" class="form-control" placeholder="{{ old('pic1_content', isset($preschool) ? $preschool->pic1_content : '') }}" >{{ old('pic1_content', isset($preschool) ? $preschool->pic1_content : '') }}</textarea>
                @if($errors->has('pic1_content'))
                    <p class="help-block">
                        {{ $errors->first('pic1_content') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.submenu_helper') }}
                </p>
            </div>

            <div class="custom-file-control thumbnail"
                 style="width: 200px; height: 150px;">
                <img src="{{url('/images/'.$preschool->pic2)}}"
                     alt="Picture 2" width="200" height="150"/>
            </div>
            <div class="custom-file form-group">
                <input type="file" name="pic2" class="custom-file-input" id="chooseFile2">
                <label class="custom-file-label" for="chooseFile2">Select file</label>
            </div>

            <div class="form-group {{ $errors->has('pic2_title') ? 'has-error' : '' }}">
                <label for="pic2_title">Pic 2 Title</label>
                <input type="text" id="pic2_title" name="pic2_title" class="form-control" value="{{ old('pic2_title', isset($preschool) ? $preschool->pic2_title : '') }}" >
                @if($errors->has('pic2_title'))
                    <p class="help-block">
                        {{ $errors->first('pic2_title') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.name_helper') }}
                </p>
            </div>

            <div class="form-group nopadding {{ $errors->has('pic2_content') ? 'has-error' : '' }}">
                <label for="pic2_content">Pic 2 Content</label>
                <textarea id="pic2_content" name="pic2_content" rows="2" class="form-control" placeholder="{{ old('pic2_content', isset($preschool) ? $preschool->pic2_content : '') }}" >{{ old('pic2_content', isset($preschool) ? $preschool->pic2_content : '') }}</textarea>
                @if($errors->has('pic2_content'))
                    <p class="help-block">
                        {{ $errors->first('pic2_content') }}
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
