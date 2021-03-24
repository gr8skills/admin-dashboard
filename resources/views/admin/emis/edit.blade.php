@extends('layouts.admin')
@section('content')


<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title">
            {{ trans('global.edit') }} About Us -> History
        </h4>
    </div>

    <div class="card-body">
        <form action="{{ route("admin.emis.update", [$emis->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <h2 class="h2">BLOOMBREED EMIS</h2>
            <div class="form-group {{ $errors->has('link') ? 'has-error' : '' }}">
                <label for="link">Link</label>
                <input type="text" id="link" name="link" class="form-control" value="{{ old('link', isset($emis) ? $emis->link : '') }}" >
                @if($errors->has('link'))
                    <p class="help-block">
                        {{ $errors->first('link') }}
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
