@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            Site Settings
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-12">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">General</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Main Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Slider</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="card-body">
                        @can('settings_access')
                        <form action="{{ route("admin.sitesettings.store") }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group {{ $errors->has('school_name') ? 'has-error' : '' }}">
                                <label for="school_name">{{ trans('cruds.settings.fields.school_name') }}*</label>
                                <input type="text" id="name" name="school_name" class="form-control" value="{{ old('school_name', isset($settings) ? $settings->school_name : '') }}" required>
                                @if($errors->has('school_name'))
                                    <p class="help-block">
                                        {{ $errors->first('school_name') }}
                                    </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('cruds.settings.fields.name_helper') }}
                                </p>
                            </div><br>
                            <div class="form-group {{ $errors->has('school_email') ? 'has-error' : '' }}">
                                <label for="school_email">{{ trans('cruds.settings.fields.school_email') }}*</label>
                                <input type="email" id="email" name="school_email" class="form-control" value="{{ old('school_email', isset($settings) ? $settings->school_email : '') }}" required>
                                @if($errors->has('school_email'))
                                    <p class="help-block">
                                        {{ $errors->first('school_email') }}
                                    </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('cruds.settings.fields.email_helper') }}
                                </p>
                            </div><br>
                            <div class="form-group {{ $errors->has('school_phone1') ? 'has-error' : '' }}">
                                <label for="school_phone1">{{ trans('cruds.settings.fields.school_phone1') }}*</label>
                                <input type="text" id="school_phone1" name="school_phone1" class="form-control" value="{{ old('school_phone1', isset($settings) ? $settings->school_phone1 : '') }}" required>
                                @if($errors->has('school_phone1'))
                                    <p class="help-block">
                                        {{ $errors->first('school_phone1') }}
                                    </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('cruds.settings.fields.school_phone1_helper') }}
                                </p>
                            </div>
                            <div class="form-group {{ $errors->has('school_phone2') ? 'has-error' : '' }}">
                                <label for="school_phone2">{{ trans('cruds.settings.fields.school_phone2') }} </label>
                                <input type="text" id="school_phone2" name="school_phone2" class="form-control" value="{{ old('school_phone2', isset($settings) ? $settings->school_phone2 : '') }}">
                                @if($errors->has('school_phone2'))
                                    <p class="help-block">
                                        {{ $errors->first('school_phone2') }}
                                    </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('cruds.settings.fields.school_phone2_helper') }}
                                </p>
                            </div>
                            <div class="form-group {{ $errors->has('school_address1') ? 'has-error' : '' }}">
                                <label for="school_address1">{{ trans('cruds.settings.fields.school_address1') }}*</label>
                                <input type="text" id="school_address1" name="school_address1" class="form-control" value="{{ old('school_address1', isset($settings) ? $settings->school_address1 : '') }}" required>
                                @if($errors->has('school_address1'))
                                    <p class="help-block">
                                        {{ $errors->first('school_address1') }}
                                    </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('cruds.settings.fields.school_address1_helper') }}
                                </p>
                            </div>
                            <div class="form-group {{ $errors->has('school_address2') ? 'has-error' : '' }}">
                                <label for="school_address2">{{ trans('cruds.settings.fields.school_address2') }} </label>
                                <input type="text" id="school_address2" name="school_address2" class="form-control" value="{{ old('school_address2', isset($settings) ? $settings->school_address2 : '') }}" >
                                @if($errors->has('school_address2'))
                                    <p class="help-block">
                                        {{ $errors->first('school_address2') }}
                                    </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('cruds.settings.fields.school_address2_helper') }}
                                </p>
                            </div>
{{--                            <div class="form-group {{ $errors->has('school_logo') ? 'has-error' : '' }}">--}}
{{--                                <label class="label-control col-md-3">{{ trans('cruds.settings.fields.school_logo') }} </label>--}}


{{--                                <div class="col-md-6">--}}
{{--                                    <div class="fileinput fileinput-new"--}}
{{--                                         data-provides="fileinput">--}}
{{--                                        <div class="fileinput-new thumbnail"--}}
{{--                                             style="width: 200px; height: 150px;">--}}
{{--                                            <img src="{{isset($settings) ? $settings->school_logo : ''}}"--}}
{{--                                                 alt="School Logo Image" name="school_logo"/></div>--}}
{{--                                        <div class="fileinput-preview fileinput-exists thumbnail"--}}
{{--                                             style="max-width: 200px; max-height: 150px;"></div>--}}
{{--                                        <div>--}}
{{--                                                        <span class="btn default btn-file">--}}
{{--                                                        <span class="fileinput-new"> Select image </span>--}}
{{--                                                        <span class="fileinput-exists"> Change </span>--}}
{{--                                                            <input type="file" name="school_logo" class="form-control" accept="image/png, image/jpg">--}}

{{--                                                        <input type="file"--}}
{{--                                                               onchange="angular.element(this).scope().uploadedlogo_single(this)"--}}
{{--                                                               accept="image/png, image/jpeg, image/gif">--}}
{{--                                                        </span>--}}
{{--                                            <a href="javascript:;"--}}
{{--                                               class="btn red fileinput-exists"--}}
{{--                                               data-dismiss="fileinput"> Remove </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="clearfix margin-top-10">--}}
{{--                                        <span class="label label-warning">NOTE!</span>--}}
{{--                                        <span--}}
{{--                                                class="black">Image dimensions should not be less than 113x112 pixels(px) and should be at least 75KB</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="custom-file-control thumbnail"
                                 style="width: 200px; height: 150px;">
                                <img src="{{url('/images/'.isset($settings) ? $settings->school_logo : '')}}"
                                     alt="School Logo Image"/>
                            </div>
                            <div class="custom-file form-group">
                                <input type="file" name="school_logo" class="custom-file-input" id="chooseFile">
                                <label class="custom-file-label" for="chooseFile">Select file</label>
                            </div>
                            <div class="form-group {{ $errors->has('facebook') ? 'has-error' : '' }}">
                                <label for="facebook">{{ trans('cruds.settings.fields.facebook') }}*</label>
                                <input type="text" id="facebook" name="facebook" class="form-control" value="{{ old('facebook', isset($settings) ? $settings->facebook : '') }}" >
                                @if($errors->has('school_address2'))
                                    <p class="help-block">
                                        {{ $errors->first('facebook') }}
                                    </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('cruds.settings.fields.facebook_helper') }}
                                </p>
                            </div>
                            <div class="form-group {{ $errors->has('twitter') ? 'has-error' : '' }}">
                                <label for="twitter">{{ trans('cruds.settings.fields.twitter') }}*</label>
                                <input type="text" id="twitter" name="twitter" class="form-control" value="{{ old('twitter', isset($settings) ? $settings->twitter : '') }}" >
                                @if($errors->has('twitter'))
                                    <p class="help-block">
                                        {{ $errors->first('twitter') }}
                                    </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('cruds.settings.fields.twitter_helper') }}
                                </p>
                            </div>
                            <div class="form-group {{ $errors->has('instagram') ? 'has-error' : '' }}">
                                <label for="instagram">{{ trans('cruds.settings.fields.instagram') }}*</label>
                                <input type="text" id="instagram" name="instagram" class="form-control" value="{{ old('instagram', isset($settings) ? $settings->instagram : '') }}" >
                                @if($errors->has('twitter'))
                                    <p class="help-block">
                                        {{ $errors->first('instagram') }}
                                    </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('cruds.settings.fields.instagram_helper') }}
                                </p>
                            </div>
                            <div class="form-group {{ $errors->has('copyright_year') ? 'has-error' : '' }}">
                                <label for="copyright_year">{{ trans('cruds.settings.fields.copyright_year') }}*</label>
                                <input type="number" id="copyright_year" name="copyright_year" class="form-control" value="{{ old('copyright_year', isset($settings) ? $settings->copyright_year : '') }}" >
                                @if($errors->has('copyright_year'))
                                    <p class="help-block">
                                        {{ $errors->first('copyright_year') }}
                                    </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('cruds.settings.fields.copyright_year_helper') }}
                                </p>
                            </div>


                            <div>
                                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
                            </div>
                        </form>
                        @endcan
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <ul>
                         @foreach ($tabs as $element)
                               <li>{{ $element}}</li>
                         @endforeach
                     </ul>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
            </div>
        </div>


    </div>
</div>
@endsection
@section('scripts')
@parent

@endsection
