@extends('layouts.admin')
@section('content')


<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title">
            {{ trans('global.edit') }} Learning -> Middle School
        </h4>
    </div>

    <div class="card-body">
        <form action="{{ route("admin.middleschool.update", [$middleschool->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <h2 class="h2">MIDDLE SCHOOL</h2>
            <div class="custom-file-control thumbnail"
                 style="width: 600px; height: 250px;">
                <img src="{{url('/images/'.$middleschool->main_img)}}"
                     alt="Header Picture " width="600" height="250"/>
            </div>
            <div class="custom-file form-group">
                <input type="file" name="main_img" class="custom-file-input" id="chooseFileMain">
                <label class="custom-file-label" for="chooseFileMain">Select file</label>
            </div>
            <div class="form-group {{ $errors->has('title1') ? 'has-error' : '' }}">
                <label for="title1">Title 1</label>
                <input type="text" id="title1" name="title1" class="form-control" value="{{ old('title1', isset($middleschool) ? $middleschool->title1 : '') }}" >
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
                <input type="text" id="bolded" name="bolded" class="form-control" value="{{ old('bolded', isset($middleschool) ? $middleschool->bolded : '') }}" >
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
                <textarea id="content1" name="content1" rows="2" class="form-control" placeholder="{{ old('content1', isset($middleschool) ? $middleschool->content1 : '') }}" >{{ old('content1', isset($middleschool) ? $middleschool->content1 : '') }}</textarea>
                @if($errors->has('content1'))
                    <p class="help-block">
                        {{ $errors->first('content1') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.submenu_helper') }}
                </p>
            </div>

            <div class="custom-file-control thumbnail"
                 style="width: 200px; height: 150px;">
                <img src="{{url('/images/'.$middleschool->pic1)}}"
                     alt="Picture 1" width="200" height="150"/>
            </div>
            <div class="custom-file form-group">
                <input type="file" name="pic1" class="custom-file-input" id="chooseFile">
                <label class="custom-file-label" for="chooseFile">Select file</label>
            </div>

            <div class="form-group {{ $errors->has('pic1_title') ? 'has-error' : '' }}">
                <label for="pic1_title">Pic1 Title</label>
                <input type="text" id="pic1_title" name="pic1_title" class="form-control" value="{{ old('pic1_title', isset($middleschool) ? $middleschool->pic1_title : '') }}" >
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
                <label for="pic1_content">Pic 1Content</label>
                <textarea id="pic1_content" name="pic1_content" rows="2" class="form-control" placeholder="{{ old('pic1_content', isset($middleschool) ? $middleschool->pic1_content : '') }}" >{{ old('pic1_content', isset($middleschool) ? $middleschool->pic1_content : '') }}</textarea>
                @if($errors->has('pic1_content'))
                    <p class="help-block">
                        {{ $errors->first('pic1_content') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.submenu_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('link1') ? 'has-error' : '' }}">
                <label for="link1">Link 1</label>
                <input type="text" id="link1" name="link1" class="form-control" value="{{ old('link1', isset($middleschool) ? $middleschool->link1 : '') }}" >
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
                <img src="{{url('/images/'.$middleschool->pic2)}}"
                     alt="Picture 2" width="200" height="150"/>
            </div>
            <div class="custom-file form-group">
                <input type="file" name="pic2" class="custom-file-input" id="chooseFile2">
                <label class="custom-file-label" for="chooseFile2">Select file</label>
            </div>

            <div class="form-group {{ $errors->has('pic2_title') ? 'has-error' : '' }}">
                <label for="pic2_title">Pic 2 Title</label>
                <input type="text" id="pic2_title" name="pic2_title" class="form-control" value="{{ old('pic2_title', isset($middleschool) ? $middleschool->pic2_title : '') }}" >
                @if($errors->has('pic2_title'))
                    <p class="help-block">
                        {{ $errors->first('pic2_title') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.name_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('pic2_subtitle') ? 'has-error' : '' }}">
                <label for="pic2_subtitle">Pic 2 SubTitle</label>
                <input type="text" id="pic2_subtitle" name="pic2_subtitle" class="form-control" value="{{ old('pic2_subtitle', isset($middleschool) ? $middleschool->pic2_subtitle : '') }}" >
                @if($errors->has('pic2_subtitle'))
                    <p class="help-block">
                        {{ $errors->first('pic2_subtitle') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.name_helper') }}
                </p>
            </div>

            <div class="form-group nopadding {{ $errors->has('pic2_content') ? 'has-error' : '' }}">
                <label for="pic2_content">Pic 2 Content</label>
                <textarea id="pic2_content" name="pic2_content" rows="2" class="form-control" placeholder="{{ old('pic2_content', isset($middleschool) ? $middleschool->pic2_content : '') }}" >{{ old('pic2_content', isset($middleschool) ? $middleschool->pic2_content : '') }}</textarea>
                @if($errors->has('pic2_content'))
                    <p class="help-block">
                        {{ $errors->first('pic2_content') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.submenu_helper') }}
                </p>
            </div>

            <div class="custom-file-control thumbnail"
                 style="width: 200px; height: 150px;">
                <img src="{{url('/images/'.$middleschool->pic3)}}"
                     alt="Picture 3" width="200" height="150"/>
            </div>
            <div class="custom-file form-group">
                <input type="file" name="pic3" class="custom-file-input" id="chooseFile3">
                <label class="custom-file-label" for="chooseFile3">Select file</label>
            </div>

            <div class="form-group {{ $errors->has('pic3_title') ? 'has-error' : '' }}">
                <label for="pic3_title">Pic3 Title</label>
                <input type="text" id="pic3_title" name="pic3_title" class="form-control" value="{{ old('pic3_title', isset($middleschool) ? $middleschool->pic3_title : '') }}" >
                @if($errors->has('pic3_title'))
                    <p class="help-block">
                        {{ $errors->first('pic3_title') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.name_helper') }}
                </p>
            </div>

            <div class="form-group nopadding {{ $errors->has('pic3_content') ? 'has-error' : '' }}">
                <label for="pic3_content">Pic 3 Content</label>
                <textarea id="pic3_content" name="pic3_content" rows="2" class="form-control" placeholder="{{ old('pic3_content', isset($middleschool) ? $middleschool->pic3_content : '') }}" >{{ old('pic3_content', isset($middleschool) ? $middleschool->pic3_content : '') }}</textarea>
                @if($errors->has('pic3_content'))
                    <p class="help-block">
                        {{ $errors->first('pic3_content') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.submenu_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('title3') ? 'has-error' : '' }}">
                <label for="title3">Title 3</label>
                <input type="text" id="title3" name="title3" class="form-control" value="{{ old('title3', isset($middleschool) ? $middleschool->title3 : '') }}" >
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
                <textarea id="content3" name="content3" rows="2" class="form-control" placeholder="{{ old('content3', isset($middleschool) ? $middleschool->content3 : '') }}" >{{ old('content3', isset($middleschool) ? $middleschool->content3 : '') }}</textarea>
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
