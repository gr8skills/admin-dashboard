@extends('layouts.admin')
@section('content')


<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title">
            {{ trans('global.edit') }} Learning
        </h4>
    </div>

    <div class="card-body">
        <form action="{{ route("admin.learning.update", [$learning->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <h2 class="h2">THE BMS DIFFERENCE</h2>
            <div class="form-group {{ $errors->has('main_title') ? 'has-error' : '' }}">
                <label for="main_title">Main Title</label>
                <input type="text" id="main_title" name="main_title" class="form-control" value="{{ old('main_title', isset($learning) ? $learning->main_title : '') }}" >
                @if($errors->has('main_title'))
                    <p class="help-block">
                        {{ $errors->first('main_title') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.name_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('bolded_text') ? 'has-error' : '' }}">
                <label for="bolded_text">Text (bold)</label>
                <input type="text" id="bolded_text" name="bolded_text" class="form-control" value="{{ old('bolded_text', isset($learning) ? $learning->bolded_text : '') }}" >
                @if($errors->has('bolded_text'))
                    <p class="help-block">
                        {{ $errors->first('bolded_text') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.name_helper') }}
                </p>
            </div>

            <div class="form-group nopadding {{ $errors->has('content') ? 'has-error' : '' }}">
                <label for="content">Content</label>
                <textarea id="content" name="content" rows="2" class="form-control" placeholder="{{ old('content', isset($learning) ? $learning->content : '') }}" >{{ old('content', isset($learning) ? $learning->content : '') }}</textarea>
                @if($errors->has('content'))
                    <p class="help-block">
                        {{ $errors->first('content') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.submenu_helper') }}
                </p>
            </div>

            <div class="custom-file-control thumbnail"
                 style="width: 200px; height: 150px;">
                <img src="{{url('/images/'.$learning->pic1)}}"
                     alt="Picture 1" width="200" height="150"/>
            </div>
            <div class="custom-file form-group">
                <input type="file" name="pic1" class="custom-file-input" id="chooseFile">
                <label class="custom-file-label" for="chooseFile">Select file</label>
            </div>

            <div class="custom-file-control thumbnail"
                 style="width: 200px; height: 150px;">
                <img src="{{url('/images/'.$learning->pic2)}}"
                     alt="Picture 2" width="200" height="150"/>
            </div>
            <div class="custom-file form-group">
                <input type="file" name="pic2" class="custom-file-input" id="chooseFile2">
                <label class="custom-file-label" for="chooseFile2">Select file</label>
            </div>

            <div class="custom-file-control thumbnail"
                 style="width: 200px; height: 150px;">
                <img src="{{url('/images/'.$learning->pic3)}}"
                     alt="Picture 3" width="200" height="150"/>
            </div>
            <div class="custom-file form-group">
                <input type="file" name="pic3" class="custom-file-input" id="chooseFile3">
                <label class="custom-file-label" for="chooseFile3">Select file</label>
            </div>

            <div class="custom-file-control thumbnail"
                 style="width: 200px; height: 150px;">
                <img src="{{url('/images/'.$learning->pic4)}}"
                     alt="Picture 4" width="200" height="150"/>
            </div>
            <div class="custom-file form-group">
                <input type="file" name="pic4" class="custom-file-input" id="chooseFile4">
                <label class="custom-file-label" for="chooseFile4">Select file</label>
            </div>

            <div class="form-group {{ $errors->has('title1') ? 'has-error' : '' }}">
                <label for="title1">Title 1</label>
                <input type="text" id="title1" name="title1" class="form-control" value="{{ old('title1', isset($learning) ? $learning->title1 : '') }}" >
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
                <textarea id="content1" name="content1" rows="2" class="form-control" placeholder="{{ old('content1', isset($learning) ? $learning->content1 : '') }}" >{{ old('content1', isset($learning) ? $learning->content1 : '') }}</textarea>
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
                <input type="text" id="title2" name="title2" class="form-control" value="{{ old('title2', isset($learning) ? $learning->title2 : '') }}" >
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
                <textarea id="content2" name="content2" rows="2" class="form-control" placeholder="{{ old('content2', isset($learning) ? $learning->content2 : '') }}" >{{ old('content2', isset($learning) ? $learning->content2 : '') }}</textarea>
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
                <input type="text" id="title3" name="title3" class="form-control" value="{{ old('title3', isset($learning) ? $learning->title3 : '') }}" >
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
                <textarea id="content3" name="content3" rows="3" class="form-control" placeholder="{{ old('content3', isset($learning) ? $learning->content3 : '') }}" >{{ old('content3', isset($learning) ? $learning->content3 : '') }}</textarea>
                @if($errors->has('content3'))
                    <p class="help-block">
                        {{ $errors->first('content3') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.submenu_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('title4') ? 'has-error' : '' }}">
                <label for="title4">Title 4</label>
                <input type="text" id="title4" name="title4" class="form-control" value="{{ old('title4', isset($learning) ? $learning->title4 : '') }}" >
                @if($errors->has('title4'))
                    <p class="help-block">
                        {{ $errors->first('title4') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group nopadding {{ $errors->has('content4') ? 'has-error' : '' }}">
                <label for="content4">Content 4</label>
                <textarea id="content4" name="content4" rows="4" class="form-control" placeholder="{{ old('content4', isset($learning) ? $learning->content4 : '') }}" >{{ old('content4', isset($learning) ? $learning->content4 : '') }}</textarea>
                @if($errors->has('content4'))
                    <p class="help-block">
                        {{ $errors->first('content4') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.submenu_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('main_title24') ? 'has-error' : '' }}">
                <label for="main_title24">Main Title 2</label>
                <input type="text" id="main_title2" name="main_title2" class="form-control" value="{{ old('main_title2', isset($learning) ? $learning->main_title2 : '') }}" >
                @if($errors->has('main_title2'))
                    <p class="help-block">
                        {{ $errors->first('main_title2') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.name_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('title5') ? 'has-error' : '' }}">
                <label for="title5">Title 5</label>
                <input type="text" id="title5" name="title5" class="form-control" value="{{ old('title5', isset($learning) ? $learning->title5 : '') }}" >
                @if($errors->has('title5'))
                    <p class="help-block">
                        {{ $errors->first('title5') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.name_helper') }}
                </p>
            </div>
            
            <div class="form-group nopadding {{ $errors->has('content5') ? 'has-error' : '' }}">
                <label for="content5">Content 5</label>
                <textarea id="content5" name="content5" rows="5" class="form-control" placeholder="{{ old('content5', isset($learning) ? $learning->content5 : '') }}" >{{ old('content5', isset($learning) ? $learning->content5 : '') }}</textarea>
                @if($errors->has('content5'))
                    <p class="help-block">
                        {{ $errors->first('content5') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.submenu_helper') }}
                </p>
            </div>

            <div class="custom-file-control thumbnail"
                 style="width: 200px; height: 150px;">
                <img src="{{url('/images/'.$learning->pic5)}}"
                     alt="Picture 5" width="200" height="150"/>
            </div>
            <div class="custom-file form-group">
                <input type="file" name="pic5" class="custom-file-input" id="chooseFile5">
                <label class="custom-file-label" for="chooseFile5">Select file</label>
            </div>

            <div class="custom-file-control thumbnail"
                 style="width: 200px; height: 150px;">
                <img src="{{url('/images/'.$learning->pic6)}}"
                     alt="Picture 6" width="200" height="150"/>
            </div>
            <div class="custom-file form-group">
                <input type="file" name="pic6" class="custom-file-input" id="chooseFile6">
                <label class="custom-file-label" for="chooseFile6">Select file</label>
            </div>

            <div class="custom-file-control thumbnail"
                 style="width: 200px; height: 150px;">
                <img src="{{url('/images/'.$learning->pic7)}}"
                     alt="Picture 7" width="200" height="150"/>
            </div>
            <div class="custom-file form-group">
                <input type="file" name="pic7" class="custom-file-input" id="chooseFile7">
                <label class="custom-file-label" for="chooseFile7">Select file</label>
            </div>

            <div class="form-group {{ $errors->has('pic5_title') ? 'has-error' : '' }}">
                <label for="pic5_title">Pic Title 5</label>
                <input type="text" id="pic5_title" name="pic5_title" class="form-control" value="{{ old('pic5_title', isset($learning) ? $learning->pic5_title : '') }}" >
                @if($errors->has('pic5_title'))
                    <p class="help-block">
                        {{ $errors->first('pic5_title') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.name_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('pic6_title') ? 'has-error' : '' }}">
                <label for="pic6_title">Pic Title 6</label>
                <input type="text" id="pic6_title" name="pic6_title" class="form-control" value="{{ old('pic6_title', isset($learning) ? $learning->pic6_title : '') }}" >
                @if($errors->has('pic6_title'))
                    <p class="help-block">
                        {{ $errors->first('pic6_title') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.name_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('pic7_title') ? 'has-error' : '' }}">
                <label for="pic7_title">Pic Title 7</label>
                <input type="text" id="pic7_title" name="pic7_title" class="form-control" value="{{ old('pic7_title', isset($learning) ? $learning->pic7_title : '') }}" >
                @if($errors->has('pic7_title'))
                    <p class="help-block">
                        {{ $errors->first('pic7_title') }}
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
