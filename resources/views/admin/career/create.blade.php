@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title">
            {{ trans('global.create') }} Career 
        </h4>
    </div>

    <div class="card-body">
        <form action="{{ route("admin.careerfixed.update", [$sliderFixed->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <h2>Update Career Page</h2>
            <div class="custom-file-control thumbnail"
                 style="width: 500px; height: 260px;">
                <img src="{{url('/images/'.$sliderFixed->pic)}}"
                     alt="Image" width="550" height="250" />
            </div>
            <div class="custom-file form-group">
                <input type="file" name="pic" class="custom-file-input" id="chooseFile">
                <label class="custom-file-label" for="chooseFile">Select Image</label>
            </div>

            <div class="form-group nopadding {{ $errors->has('bold') ? 'has-error' : '' }}">
                <label for="bold"> Bold Text</label>
                <textarea id="bold" name="bold" rows="2" class="form-control" placeholder="{{ old('bold', isset($sliderFixed) ? $sliderFixed->bold : '') }}" >{{ old('bold', isset($sliderFixed) ? $sliderFixed->bold : '') }}</textarea>
                @if($errors->has('bold'))
                    <p class="help-block">
                        {{ $errors->first('bold') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.submenu_helper') }}
                </p>
            </div>

            <div class="form-group nopadding {{ $errors->has('sub') ? 'has-error' : '' }}">
                <label for="sub"> Sub Text </label>
                <textarea id="sub" name="sub" rows="2" class="form-control" placeholder="{{ old('sub', isset($sliderFixed) ? $sliderFixed->sub : '') }}" >{{ old('sub', isset($sliderFixed) ? $sliderFixed->sub : '') }}</textarea>
                @if($errors->has('sub'))
                    <p class="help-block">
                        {{ $errors->first('sub') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.submenu_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="Update">
            </div>
        </form>
        <hr><p>&nbsp;</p>
        <h2>Create New Job</h2>
        <form action="{{ route("admin.career.store") }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group {{ $errors->has('category') ? 'has-error' : '' }}">
                <label for="category">Category</label>
                <select name="category" id="roles" class="form-control select2">
                    <option disabled selected> Select Category </option>
                    <option value="pre_elementary"> Pre School & Elementary School </option>
                    <option value="middle_high"> Middle School & High School </option>
                    <option value="support"> Supporting Staff </option>
                </select>
                @if($errors->has('category'))
                    <p class="help-block">
                        {{ $errors->first('category') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.slider.fields.location_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('job_title') ? 'has-error' : '' }}">
                <label for="job_title"> Job Title </label>
                <input type="text" id="job_title" name="job_title" class="form-control" placeholder="{{ old('job_title', isset($slider) ? $slider->job_title: '') }}">
                @if($errors->has('job_title'))
                    <p class="help-block">
                        {{ $errors->first('job_title') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.slider.fields.location_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('job_link') ? 'has-error' : '' }}">
                <label for="job_link"> Job Link </label>
                <input type="text" id="job_link" name="job_link" class="form-control" placeholder="{{ old('job_link', isset($slider) ? $slider->job_link: '') }}" required>
                @if($errors->has('job_link'))
                    <p class="help-block">
                        {{ $errors->first('job_link') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.slider.fields.location_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('visibility') ? 'has-error' : '' }}">
                <label for="visibility">Active?</label>
                <select name="visibility" id="roles" class="form-control select2">
                    <option value="1"> Yes </option>
                    <option value="0"> No </option>
                </select>
                @if($errors->has('visibility'))
                    <p class="help-block">
                        {{ $errors->first('visibility') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.visibility_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>
@endsection
@section('script')
    <script type="text/javascript">

        $(document).ready(function (e) {


            $('#chooseFile').change(function(){

                let reader = new FileReader();

                reader.onload = (e) => {

                    $('#preview-image-before-upload').attr('src', e.target.result);
                }

                reader.readAsDataURL(this.files[0]);

            });

        });

    </script>
@endsection
