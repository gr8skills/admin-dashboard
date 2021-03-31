@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title">
            {{ trans('global.edit') }} Index/Homepage
        </h4>
    </div>

    <div class="card-body">
        <form action="{{ route("admin.index-cms.update", [$indexPage->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <h2 class="h2">WELCOME TO THE BLOOMBREED SCHOOLS</h2>
                <label for="row1_title">Title</label>
                <input type="text" id="row1_title" name="row1_title" class="form-control" value="{{ old('name', isset($indexPage) ? $indexPage->row1_title : '') }}" required>
                @if($errors->has('row1_title'))
                    <p class="help-block">
                        {{ $errors->first('row1_title') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.name_helper') }}
                </p>
            </div>
            <div class="custom-file-control thumbnail"
                 style="width: 210px; height: 460px;">
                      <img src="{{url('/images/'.$indexPage->row1_picture)}}"
                               alt="Image 1" height="200" width="450"/>
            </div>
            <div class="custom-file form-group">
                <input type="file" name="row1_picture" class="custom-file-input" id="chooseFile">
                <label class="custom-file-label" for="chooseFile">Select Image: </label>
            </div>
            <div class="form-group {{ $errors->has('row1_picture') ? 'has-error' : '' }}">
                <label for="row1_picture">Innovative Picture</label>
                <input type="text" id="row1_picture" name="row1_picture" class="form-control" value="{{ old('row1_picture', isset($indexPage) ? $indexPage->row1_picture : '') }}" >
                @if($errors->has('row1_picture'))
                    <p class="help-block">
                        {{ $errors->first('row1_picture') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.user.fields.link_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('row1_content') ? 'has-error' : '' }}">
                <label for="row1_content">Row1 Content</label>
                <textarea id="row1_content" name="row1_content" rows="2" class="form-control" placeholder="{{ old('row1_content', isset($indexPage) ? $indexPage->row1_content : '') }}" >{{ old('row1_content', isset($indexPage) ? $indexPage->row1_content : '') }}</textarea>
                @if($errors->has('row1_content'))
                    <p class="help-block">
                        {{ $errors->first('row1_content') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.submenu_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('row1_picture') ? 'has-error' : '' }}">
                <label class="h2" for="row2_pic1">Picture Galleries</label>

                <div class="custom-file-control thumbnail"
                     style="width: 210px; height: 460px;">
                    <img src="{{url('/images/'.$indexPage->row2_pic1)}}"
                         alt="Image 2" height="200" width="450"/>
                </div>
                <div class="col-md-3">
                    <input type="file" name="row2_pic1" class="custom-file-input" id="chooseFile2">
                    <label class="custom-file-label" for="chooseFile2">Select Image: </label>
                </div>
                <hr>
                <div class="custom-file-control thumbnail"
                     style="width: 210px; height: 460px;">
                    <img src="{{url('/images/'.$indexPage->row2_pic2)}}"
                         alt="Image 2" height="200" width="450"/>
                </div>
                <div class="col-md-3">
                    <input type="file" name="row2_pic2" class="custom-file-input" id="chooseFile3">
                    <label class="custom-file-label" for="chooseFile3">Select Image: </label>
                </div>
                <hr>
                <div class="custom-file-control thumbnail"
                     style="width: 210px; height: 460px;">
                    <img src="{{url('/images/'.$indexPage->row2_pic3)}}"
                         alt="Image 2" height="200" width="450"/>
                </div>
                <div class="col-md-3">
                    <input type="file" name="row2_pic3" class="custom-file-input" id="chooseFile4">
                    <label class="custom-file-label" for="chooseFile4">Select Image: </label>
                </div>
                <hr>
                <div class="custom-file-control thumbnail"
                     style="width: 210px; height: 460px;">
                    <img src="{{url('/images/'.$indexPage->row2_pic4)}}"
                         alt="Image 2" height="200" width="450"/>
                </div>
                <div class="col-md-3">
                    <input type="file" name="row2_pic4" class="custom-file-input" id="chooseFile5">
                    <label class="custom-file-label" for="chooseFile5">Select Image: </label>
                </div><hr>

{{--                <p class="helper-block">--}}
{{--                    {{ trans('cruds.user.fields.link_helper') }}--}}
{{--                </p>--}}
            </div>
            <div class="form-group {{ $errors->has('row2_title1') ? 'has-error' : '' }}">
                <label for="row2_title1">Title 1</label>
                <input type="text" id="row2_title1" name="row2_title1" class="form-control" placeholder="{{ old('row2_title1', isset($indexPage) ? $indexPage->row2_title1: '') }}" value="{{ old('row2_title1', isset($indexPage) ? $indexPage->row2_title1: '') }}">
                @if($errors->has('row2_title1'))
                    <p class="help-block">
                        {{ $errors->first('row2_title1') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.alias_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('row2_title2') ? 'has-error' : '' }}">
                <label for="row2_title2">Title 1</label>
                <input type="text" id="row2_title2" name="row2_title2" class="form-control" placeholder="{{ old('row2_title2', isset($indexPage) ? $indexPage->row2_title2: '') }}" value="{{ old('row2_title2', isset($indexPage) ? $indexPage->row2_title2: '') }}">
                @if($errors->has('row2_title2'))
                    <p class="help-block">
                        {{ $errors->first('row2_title2') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.alias_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('row2_title3') ? 'has-error' : '' }}">
                <label for="row2_title3">Title 1</label>
                <input type="text" id="row2_title3" name="row2_title3" class="form-control" placeholder="{{ old('row2_title3', isset($indexPage) ? $indexPage->row2_title3: '') }}" value="{{ old('row2_title3', isset($indexPage) ? $indexPage->row2_title3: '') }}">
                @if($errors->has('row2_title3'))
                    <p class="help-block">
                        {{ $errors->first('row2_title3') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.alias_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('row2_title4') ? 'has-error' : '' }}">
                <label for="row2_title4">Title 1</label>
                <input type="text" id="row2_title4" name="row2_title4" class="form-control" placeholder="{{ old('row2_title4', isset($indexPage) ? $indexPage->row2_title4: '') }}" value="{{ old('row2_title4', isset($indexPage) ? $indexPage->row2_title4: '') }}">
                @if($errors->has('row2_title4'))
                    <p class="help-block">
                        {{ $errors->first('row2_title4') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.alias_helper') }}
                </p>
            </div>
            <hr>
            <div class="form-group {{ $errors->has('row2_content1') ? 'has-error' : '' }}">
                <label for="row2_content1">Row2 Content</label>
                <textarea id="row2_content1" name="row2_content1" rows="2" class="form-control" placeholder="{{ old('row2_content1', isset($indexPage) ? $indexPage->row2_content1 : '') }}" >{{ old('row2_content1', isset($indexPage) ? $indexPage->row2_content1 : '') }}</textarea>
                @if($errors->has('row1_content'))
                    <p class="help-block">
                        {{ $errors->first('row1_content') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.submenu_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('row2_content2') ? 'has-error' : '' }}">
                <label for="row2_content2">Row2 Content</label>
                <textarea id="row2_content2" name="row2_content2" rows="2" class="form-control" placeholder="{{ old('row2_content2', isset($indexPage) ? $indexPage->row2_content2 : '') }}" >{{ old('row2_content2', isset($indexPage) ? $indexPage->row2_content2 : '') }}</textarea>
                @if($errors->has('row2_content2'))
                    <p class="help-block">
                        {{ $errors->first('row2_content2') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.submenu_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('row2_content3') ? 'has-error' : '' }}">
                <label for="row2_content3">Row2 Content</label>
                <textarea id="row2_content3" name="row2_content3" rows="2" class="form-control" placeholder="{{ old('row2_content3', isset($indexPage) ? $indexPage->row2_content3 : '') }}" >{{ old('row2_content3', isset($indexPage) ? $indexPage->row2_content3 : '') }}</textarea>
                @if($errors->has('row2_content3'))
                    <p class="help-block">
                        {{ $errors->first('row2_content3') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.submenu_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('row2_content4') ? 'has-error' : '' }}">
                <label for="row2_content4">Row2 Content</label>
                <textarea id="row2_content4" name="row2_content4" rows="2" class="form-control" placeholder="{{ old('row2_content4', isset($indexPage) ? $indexPage->row2_content4 : '') }}" >{{ old('row2_content4', isset($indexPage) ? $indexPage->row2_content4 : '') }}</textarea>
                @if($errors->has('row2_content4'))
                    <p class="help-block">
                        {{ $errors->first('row2_content4') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.submenu_helper') }}
                </p>
            </div>
            <hr>
            <div class="form-group {{ $errors->has('row3_title') ? 'has-error' : '' }}">
                <label for="row3_title">Title 1</label>
                <input type="text" id="row3_title" name="row3_title" class="form-control" placeholder="{{ old('row3_title', isset($indexPage) ? $indexPage->row3_title: '') }}" value="{{ old('row3_title', isset($indexPage) ? $indexPage->row3_title: '') }}">
                @if($errors->has('row3_title'))
                    <p class="help-block">
                        {{ $errors->first('row3_title') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.alias_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('row3_content') ? 'has-error' : '' }}">
                <label for="row3_content">Row3 Content</label>
                <textarea id="row3_content" name="row3_content" rows="2" class="form-control" placeholder="{{ old('row3_content', isset($indexPage) ? $indexPage->row3_content : '') }}" >{{ old('row3_content', isset($indexPage) ? $indexPage->row3_content : '') }}</textarea>
                @if($errors->has('row3_content'))
                    <p class="help-block">
                        {{ $errors->first('row3_content') }}
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
