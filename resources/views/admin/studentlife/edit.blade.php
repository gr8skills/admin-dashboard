@extends('layouts.admin')
@section('content')


<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title">
            {{ trans('global.edit') }} Learning -> Student Life
        </h4>
    </div>

    <div class="card-body">
        <form action="{{ route("admin.studentlife.update", [$studentLife->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <h2 class="h2">CULTIVATING CHARACTER AND BALANCE</h2>
            <div class="form-group {{ $errors->has('title1') ? 'has-error' : '' }}">
                <label for="title1">Title 1</label>
                <input type="text" id="title1" name="title1" class="form-control" value="{{ old('title1', isset($studentLife) ? $studentLife->title1 : '') }}" >
                @if($errors->has('title1'))
                    <p class="help-block">
                        {{ $errors->first('title1') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.name_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('bolded') ? 'has-error' : '' }}">
                <label for="bolded">Bold Text</label>
                <input type="text" id="bolded" name="bolded" class="form-control" value="{{ old('bolded', isset($studentLife) ? $studentLife->bolded : '') }}" >
                @if($errors->has('bolded'))
                    <p class="help-block">
                        {{ $errors->first('bolded') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.name_helper') }}
                </p>
            </div>

            <div class="form-group nopadding {{ $errors->has('content1') ? 'has-error' : '' }}">
                <label for="content1">Content 1</label>
                <textarea id="content1" name="content1" rows="2" class="form-control" placeholder="{{ old('content1', isset($studentLife) ? $studentLife->content1 : '') }}" >{{ old('content1', isset($studentLife) ? $studentLife->content1 : '') }}</textarea>
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
                <input type="text" id="title2" name="title2" class="form-control" value="{{ old('title2', isset($studentLife) ? $studentLife->title2 : '') }}" >
                @if($errors->has('title2'))
                    <p class="help-block">
                        {{ $errors->first('title2') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.name_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('sub_title2') ? 'has-error' : '' }}">
                <label for="sub_title2">Title 2</label>
                <input type="text" id="sub_title2" name="sub_title2" class="form-control" value="{{ old('sub_title2', isset($studentLife) ? $studentLife->sub_title2 : '') }}" >
                @if($errors->has('sub_title2'))
                    <p class="help-block">
                        {{ $errors->first('sub_title2') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.name_helper') }}
                </p>
            </div>

            <div class="form-group nopadding {{ $errors->has('content2') ? 'has-error' : '' }}">
                <label for="content2">Content 2</label>
                <textarea id="content2" name="content2" rows="2" class="form-control" placeholder="{{ old('content2', isset($studentLife) ? $studentLife->content2 : '') }}" >{{ old('content2', isset($studentLife) ? $studentLife->content2 : '') }}</textarea>
                @if($errors->has('content2'))
                    <p class="help-block">
                        {{ $errors->first('content2') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.submenu_helper') }}
                </p>
            </div>


            <div class="custom-file-control thumbnail"
                 style="width: 200px; height: 150px;">
                <img src="{{url('/images/'.$studentLife->pic1)}}"
                     alt="Picture 1" width="200" height="150"/>
            </div>
            <div class="custom-file form-group">
                <input type="file" name="pic1" class="custom-file-input" id="chooseFile">
                <label class="custom-file-label" for="chooseFile">Select file</label>
            </div>

            <div class="form-group {{ $errors->has('pic1_title') ? 'has-error' : '' }}">
                <label for="pic1_title">Pic1 Title</label>
                <input type="text" id="pic1_title" name="pic1_title" class="form-control" value="{{ old('pic1_title', isset($studentLife) ? $studentLife->pic1_title : '') }}" >
                @if($errors->has('pic1_title'))
                    <p class="help-block">
                        {{ $errors->first('pic1_title') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.name_helper') }}
                </p>
            </div>

            <div class="custom-file-control thumbnail"
                 style="width: 200px; height: 150px;">
                <img src="{{url('/images/'.$studentLife->pic2)}}"
                     alt="Picture 2" width="200" height="150"/>
            </div>
            <div class="custom-file form-group">
                <input type="file" name="pic2" class="custom-file-input" id="chooseFile2">
                <label class="custom-file-label" for="chooseFile2">Select file</label>
            </div>

            <div class="form-group {{ $errors->has('pic2_title') ? 'has-error' : '' }}">
                <label for="pic2_title">Pic 2 Title</label>
                <input type="text" id="pic2_title" name="pic2_title" class="form-control" value="{{ old('pic2_title', isset($studentLife) ? $studentLife->pic2_title : '') }}" >
                @if($errors->has('pic2_title'))
                    <p class="help-block">
                        {{ $errors->first('pic2_title') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.name_helper') }}
                </p>
            </div>

            <div class="custom-file-control thumbnail"
                 style="width: 200px; height: 150px;">
                <img src="{{url('/images/'.$studentLife->pic3)}}"
                     alt="Picture 3" width="200" height="150"/>
            </div>
            <div class="custom-file form-group">
                <input type="file" name="pic3" class="custom-file-input" id="chooseFile3">
                <label class="custom-file-label" for="chooseFile3">Select file</label>
            </div>

            <div class="form-group {{ $errors->has('pic3_title') ? 'has-error' : '' }}">
                <label for="pic3_title">Pic3 Title</label>
                <input type="text" id="pic3_title" name="pic3_title" class="form-control" value="{{ old('pic3_title', isset($studentLife) ? $studentLife->pic3_title : '') }}" >
                @if($errors->has('pic3_title'))
                    <p class="help-block">
                        {{ $errors->first('pic3_title') }}
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
