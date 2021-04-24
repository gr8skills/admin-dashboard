@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title">
            {{ trans('global.show') }} {{$slider->name}}
        </h4>
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            ID
                        </th>
                        <td>
                            {{ $slider->id }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            Name
                        </th>
                        <td>
                            {{ $slider->name }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            From
                        </th>
                        <td>
                            {{ $slider->from }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            To
                        </th>
                        <td>
                            {{ $slider->to }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            Description
                        </th>
                        <td>
                            {{ $slider->content }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            Active?
                        </th>
                        <td>
                            {{ $slider->active=1 ? 'Yes':'No' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Image
                        </th>
                        <td>
                            <div class="custom-file-control thumbnail"
                                 style="width: 750px; height: 250px;">
                                <img src="{{url('/images/'.$slider->main_img)}}"
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
