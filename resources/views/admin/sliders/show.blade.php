@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title">
            {{ trans('global.show') }} {{ trans('cruds.slider.title') }}
        </h4>
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.slider.fields.id') }}
                        </th>
                        <td>
                            {{ $slider->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.slider.fields.name') }}
                        </th>
                        <td>
                            {{ $slider->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.slider.fields.alt') }}
                        </th>
                        <td>
                            {{ $slider->alt }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.slider.fields.data_resource_uuid') }}
                        </th>
                        <td>
                            {{ $slider->data_resource_uuid }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.slider.fields.position') }}
                        </th>
                        <td>
                            {{ $slider->position }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.slider.visibility') }}
                        </th>
                        <td>
                            {{ $slider->type }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Image
                        </th>
                        <td>
                            <div class="custom-file-control thumbnail"
                                 style="width: 750px; height: 250px;">
                                <img src="{{url('/images/slides/'.$slider->location)}}"
                                     alt="Slide Image" width="750" height="250" />
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>


    </div>
</div>
@endsection
