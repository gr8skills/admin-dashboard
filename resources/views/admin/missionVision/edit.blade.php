@extends('layouts.admin')
@section('content')


<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title">
            {{ trans('global.edit') }} About Us -> History
        </h4>
    </div>

    <div class="card-body">
        <form action="{{ route("admin.about-us-mission-vision.update", [$mission->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <h2 class="h2">OUR MISSION AND VISION</h2>
            <div class="custom-file-control thumbnail"
                 style="width: 750px; height: 260px;">
                <img src="{{url('/images/'.$mission->main_img)}}"
                     alt="Header Image" width="750" height="250" />
            </div>
            <div class="custom-file form-group">
                <input type="file" name="main_img" class="custom-file-input" id="chooseFile" value="{{ $mission->main_img }}">
                <label class="custom-file-label" for="chooseFile">Select Image</label>
            </div>

            <div class="form-group {{ $errors->has('title1') ? 'has-error' : '' }}">

                <label for="title1">Title</label>
                <input type="text" id="title1" name="title1" class="form-control" value="{{ old('title1', isset($mission) ? $mission->title1 : '') }}" required>
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
                <textarea id="content1" name="content1" rows="2" class="form-control" placeholder="{{ old('content1', isset($mission) ? $mission->content1 : '') }}" >{{ old('content1', isset($mission) ? $mission->content1 : '') }}</textarea>
                @if($errors->has('content1'))
                    <p class="help-block">
                        {{ $errors->first('content1') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.submenu_helper') }}
                </p>
            </div>

            <div class="form-group nopadding {{ $errors->has('mission') ? 'has-error' : '' }}">
                <label for="mission">Mission</label>
                <textarea id="mission" name="mission" rows="2" class="form-control" placeholder="{{ old('mission', isset($mission) ? $mission->mission : '') }}" >{{ old('mission', isset($mission) ? $mission->mission : '') }}</textarea>
                @if($errors->has('mission'))
                    <p class="help-block">
                        {{ $errors->first('mission') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.submenu_helper') }}
                </p>
            </div>

            <div class="form-group nopadding {{ $errors->has('vision') ? 'has-error' : '' }}">
                <label for="vision">Vision</label>
                <textarea id="vision" name="vision" rows="2" class="form-control" placeholder="{{ old('vision', isset($mission) ? $mission->vision : '') }}" >{{ old('vision', isset($mission) ? $mission->vision : '') }}</textarea>
                @if($errors->has('vision'))
                    <p class="help-block">
                        {{ $errors->first('vision') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.submenu_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('title2') ? 'has-error' : '' }}">
                <label for="title2">Title 2</label>
                <input type="text" id="title2" name="title2" class="form-control" value="{{ old('title2', isset($mission) ? $mission->title2 : '') }}">
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
                <textarea id="content2" name="content2" rows="2" class="form-control" placeholder="{{ old('content2', isset($mission) ? $mission->content2 : '') }}" >{{ old('content2', isset($mission) ? $mission->content2 : '') }}</textarea>
                @if($errors->has('content2'))
                    <p class="help-block">
                        {{ $errors->first('content2') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.submenu_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('image_title1') ? 'has-error' : '' }}">
                <label for="image_title1">Image 1 Title</label>
                <input type="text" id="image_title1" name="image_title1" class="form-control" value="{{ old('image_title1', isset($mission) ? $mission->image_title1 : '') }}">
                @if($errors->has('image_title1'))
                    <p class="help-block">
                        {{ $errors->first('image_title1') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.name_helper') }}
                </p>
            </div>
            <div class="custom-file-control thumbnail"
                 style="width: 750px; height: 260px;">
                <img src="{{url('/images/'.$mission->image1)}}"
                     alt="Image" width="750" height="250" />
            </div>
            <div class="custom-file form-group">
                <input type="file" name="image1" class="custom-file-input" id="chooseFile1" value="{{ $mission->image1 }}">
                <label class="custom-file-label" for="chooseFile1">Select  Image</label>
            </div>

            <div class="form-group nopadding {{ $errors->has('image_content1') ? 'has-error' : '' }}">
                <label for="image_content1">Image 1 Content</label>
                <textarea id="image_content1" name="image_content1" rows="2" class="form-control" placeholder="{{ old('image_content1', isset($mission) ? $mission->image_content1 : '') }}" >{{ old('content2', isset($mission) ? $mission->image_content1 : '') }}</textarea>
                @if($errors->has('image_content1'))
                    <p class="help-block">
                        {{ $errors->first('image_content1') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.submenu_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('image_title2') ? 'has-error' : '' }}">
                <label for="image_title2">Image 2 Title</label>
                <input type="text" id="image_title2" name="image_title2" class="form-control" value="{{ old('image_title2', isset($mission) ? $mission->image_title2 : '') }}">
                @if($errors->has('image_title2'))
                    <p class="help-block">
                        {{ $errors->first('image_title2') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.name_helper') }}
                </p>
            </div>
            <div class="custom-file-control thumbnail"
                 style="width: 750px; height: 260px;">
                <img src="{{url('/images/'.$mission->image2)}}"
                     alt="Image" width="750" height="250" />
            </div>
            <div class="custom-file form-group">
                <input type="file" name="image2" class="custom-file-input" id="chooseFile2" value="{{ $mission->image2 }}">
                <label class="custom-file-label" for="chooseFile2">Select Image</label>
            </div>

            <div class="form-group nopadding {{ $errors->has('image_content2') ? 'has-error' : '' }}">
                <label for="image_content2">Image 2 Content</label>
                <textarea id="image_content2" name="image_content2" rows="2" class="form-control" placeholder="{{ old('image_content2', isset($mission) ? $mission->image_content2 : '') }}" >{{ old('image_content2', isset($mission) ? $mission->image_content2 : '') }}</textarea>
                @if($errors->has('image_content2'))
                    <p class="help-block">
                        {{ $errors->first('image_content2') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.submenu_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('image_title3') ? 'has-error' : '' }}">
                <label for="image_title3">Image 3 Title</label>
                <input type="text" id="image_title3" name="image_title3" class="form-control" value="{{ old('image_title3', isset($mission) ? $mission->image_title3 : '') }}">
                @if($errors->has('image_title3'))
                    <p class="help-block">
                        {{ $errors->first('image_title3') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.name_helper') }}
                </p>
            </div>
            <div class="custom-file-control thumbnail"
                 style="width: 750px; height: 260px;">
                <img src="{{url('/images/'.$mission->image3)}}"
                     alt="Image" width="750" height="250" />
            </div>
            <div class="custom-file form-group">
                <input type="file" name="image3" class="custom-file-input" id="chooseFile3" value="{{ $mission->image3 }}">
                <label class="custom-file-label" for="chooseFile3">Select Image</label>
            </div>

            <div class="form-group nopadding {{ $errors->has('image_content3') ? 'has-error' : '' }}">
                <label for="image_content3">Image 3 Content</label>
                <textarea id="image_content3" name="image_content3" rows="2" class="form-control" placeholder="{{ old('image_content3', isset($mission) ? $mission->image_content3 : '') }}" >{{ old('image_content3', isset($mission) ? $mission->image_content3 : '') }}</textarea>
                @if($errors->has('image_content3'))
                    <p class="help-block">
                        {{ $errors->first('image_content3') }}
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
