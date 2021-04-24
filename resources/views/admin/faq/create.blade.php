@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title">
            {{ trans('global.create') }} FAQ 
        </h4>
    </div>

    <div class="card-body">
        <form action="{{ route("admin.faq.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
{{--            <div class="custom-file-control thumbnail"--}}
{{--                 style="width: 500px; height: 260px;">--}}
{{--                <img src="{{asset('images/product_image_not_found.gif')}}" id="preview-image-before-upload"--}}
{{--                     alt="Event Image" width="500" height="260"/>--}}
{{--            </div>--}}
{{--            <div class="custom-file form-group">--}}
{{--                <input type="file" name="pic" class="custom-file-input" id="chooseFile">--}}
{{--                <label class="custom-file-label" for="chooseFile">Select Image</label>--}}
{{--            </div>--}}
           
            <div class="form-group {{ $errors->has('question') ? 'has-error' : '' }}">
                <label for="question"> Question </label>
                <input type="text" id="question" name="question" class="form-control" placeholder="{{ old('question', isset($slider) ? $slider->question: '') }}">
                @if($errors->has('question'))
                    <p class="help-block">
                        {{ $errors->first('question') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.slider.fields.location_helper') }}
                </p>
            </div>
            
            <div class="form-group nopadding {{ $errors->has('answer') ? 'has-error' : '' }}">
                <label for="answer"> Answer </label>
                <textarea id="answer" name="answer" rows="2" class="form-control" placeholder="{{ old('answer', isset($slider) ? $slider->answer : '') }}" ></textarea>
                @if($errors->has('answer'))
                    <p class="help-block">
                        {{ $errors->first('answer') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.submenu_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('position') ? 'has-error' : '' }}">
                <label for="position"> Position </label>
                <input type="number" id="position" name="position" class="form-control" placeholder="{{ old('position', isset($slider) ? $slider->position: '') }}" required>
                @if($errors->has('position'))
                    <p class="help-block">
                        {{ $errors->first('position') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.slider.fields.location_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('visibility') ? 'has-error' : '' }}">
                <label for="visibility">visibility?</label>
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
