@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title">
            {{ trans('global.edit') }} {{ trans('cruds.menu.title_singular') }}
        </h4>
    </div>

    <div class="card-body">
        <form action="{{ route("admin.main-menu.update", [$menu->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">{{ trans('cruds.menu.fields.name') }}*</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($menu) ? $menu->name : '') }}" required>
                @if($errors->has('name'))
                    <p class="help-block">
                        {{ $errors->first('name') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('link') ? 'has-error' : '' }}">
                <label for="link">{{ trans('cruds.user.fields.link') }}*</label>
                <input type="text" id="link" name="link" class="form-control" value="{{ old('link', isset($menu) ? $menu->link : '') }}" required>
                @if($errors->has('link'))
                    <p class="help-block">
                        {{ $errors->first('link') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.user.fields.link_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('submenu') ? 'has-error' : '' }}">
                <label for="submenu">{{ trans('cruds.menu.fields.submenu') }}*</label>
                <textarea id="submenu" name="submenu" rows="4" class="form-control" placeholder="{{ old('submenu', isset($menu) ? $menu->submenu : '') }}" >{{ old('submenu', isset($menu) ? $menu->submenu : '') }}</textarea>
                @if($errors->has('submenu'))
                    <p class="help-block">
                        {{ $errors->first('submenu') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.submenu_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('alias') ? 'has-error' : '' }}">
                <label for="alias">{{ trans('cruds.menu.fields.alias') }}</label>
                <input type="text" id="alias" name="alias" class="form-control" placeholder="{{ old('alias', isset($menu) ? $menu->alias: '') }}" value="{{ old('alias', isset($menu) ? $menu->alias: '') }}">
                @if($errors->has('alias'))
                    <p class="help-block">
                        {{ $errors->first('alias') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.menu.fields.alias_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('visibility') ? 'has-error' : '' }}">
                <label for="roles">{{ trans('cruds.menu.fields.visibility') }}*</label>
                <select name="roles[]" id="roles" class="form-control select2">
                    <option value="0" {{$menu->visibility==0 ? 'selected' : ''}}>Hide</option>
                    <option value="1" {{$menu->visibility==1 ? 'selected' : ''}}>Show</option>
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
