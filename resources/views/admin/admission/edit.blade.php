@extends('layouts.admin')
@section('content')


<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title">
            {{ trans('global.edit') }} About Us -> History
        </h4>
    </div>

    <div class="card-body">
        <form action="{{ route("admin.admission.update", [$admission->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <h2 class="h2">BMS ADMISSIONS</h2>
            <div class="custom-file-control thumbnail"
                 style="width: 600px; height: 250px;">
                <img src="{{url('/images/'.$admission->main_img)}}"
                     alt="Image 1" width="600" height="250"/>
            </div>
            <div class="custom-file form-group">
                <input type="file" name="main_img" class="custom-file-input" id="chooseFile1">
                <label class="custom-file-label" for="chooseFile1">Select Header Image</label>
            </div>
            <div class="form-group {{ $errors->has('title1') ? 'has-error' : '' }}">
                <label for="title1">Title</label>
                <input type="text" id="title1" name="title1" class="form-control" value="{{ old('title1', isset($admission) ? $admission->title1 : '') }}" required>
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
                <textarea id="content1" name="content1" rows="2" class="form-control" placeholder="{{ old('content1', isset($admission) ? $admission->content1 : '') }}" >{{ old('content1', isset($admission) ? $admission->content1 : '') }}</textarea>
                @if($errors->has('content1'))
                    <p class="help-block">
                        {{ $errors->first('content1') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.submenu_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('link_ask_a_question') ? 'has-error' : '' }}">
                <label for="link_ask_a_question">Ask a Question Link</label>
                <input type="text" id="link_ask_a_question" name="link_ask_a_question" class="form-control" value="{{ old('link_ask_a_question', isset($admission) ? $admission->link_ask_a_question : '') }}" required>
                @if($errors->has('link_ask_a_question'))
                    <p class="help-block">
                        {{ $errors->first('link_ask_a_question') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.name_helper') }}
                </p>
            </div>

            <div class="custom-file-control thumbnail"
                 style="width: 300px; height: 250px;">
                <img src="{{url('/images/'.$admission->image1)}}"
                     alt="Image 1" width="300" height="250"/>
            </div>
            <div class="custom-file form-group">
                <input type="file" name="image1" class="custom-file-input" id="chooseFile">
                <label class="custom-file-label" for="chooseFile">Select Image</label>
            </div>

            <div class="form-group {{ $errors->has('image1_title') ? 'has-error' : '' }}">
                <label for="image1_title">Image 1 Title</label>
                <input type="text" id="image1_title" name="image1_title" class="form-control" value="{{ old('image1_title', isset($admission) ? $admission->image1_title : '') }}" >
                @if($errors->has('image1_title'))
                    <p class="help-block">
                        {{ $errors->first('image1_title') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.name_helper') }}
                </p>
            </div>

            <div class="form-group nopadding {{ $errors->has('image1_content') ? 'has-error' : '' }}">
                <label for="image1_content">Image 1 Content</label>
                <textarea id="image1_content" name="image1_content" rows="2" class="form-control" placeholder="{{ old('image1_content', isset($admission) ? $admission->image1_content : '') }}" >{{ old('image1_content', isset($admission) ? $admission->image1_content : '') }}</textarea>
                @if($errors->has('image1_content'))
                    <p class="help-block">
                        {{ $errors->first('image1_content') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.submenu_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('image1_link') ? 'has-error' : '' }}">
                <label for="image1_link">Image 1 Link</label>
                <input type="text" id="image1_link" name="image1_link" class="form-control" value="{{ old('image1_link', isset($admission) ? $admission->image1_link : '') }}" >
                @if($errors->has('image1_link'))
                    <p class="help-block">
                        {{ $errors->first('image1_link') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.name_helper') }}
                </p>
            </div>

            <div class="custom-file-control thumbnail"
                 style="width: 300px; height: 250px;">
                <img src="{{url('/images/'.$admission->image2)}}"
                     alt="Image 2" width="300" height="250"/>
            </div>
            <div class="custom-file form-group">
                <input type="file" name="image2" class="custom-file-input" id="chooseFile2">
                <label class="custom-file-label" for="chooseFile2">Select Image</label>
            </div>

            <div class="form-group {{ $errors->has('image2_title') ? 'has-error' : '' }}">
                <label for="image2_title">Image 2 Title</label>
                <input type="text" id="image2_title" name="image2_title" class="form-control" value="{{ old('image2_title', isset($admission) ? $admission->image2_title : '') }}" >
                @if($errors->has('image2_title'))
                    <p class="help-block">
                        {{ $errors->first('image2_title') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.name_helper') }}
                </p>
            </div>

            <div class="form-group nopadding {{ $errors->has('image2_content') ? 'has-error' : '' }}">
                <label for="image2_content">Image 2 Content</label>
                <textarea id="image2_content" name="image2_content" rows="2" class="form-control" placeholder="{{ old('image2_content', isset($admission) ? $admission->image2_content : '') }}" >{{ old('image2_content', isset($admission) ? $admission->image2_content : '') }}</textarea>
                @if($errors->has('image2_content'))
                    <p class="help-block">
                        {{ $errors->first('image2_content') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.submenu_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('image2_link') ? 'has-error' : '' }}">
                <label for="image2_link">Image 2 Link</label>
                <input type="text" id="image2_link" name="image2_link" class="form-control" value="{{ old('image2_link', isset($admission) ? $admission->image2_link : '') }}" >
                @if($errors->has('image2_link'))
                    <p class="help-block">
                        {{ $errors->first('image2_link') }}
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
