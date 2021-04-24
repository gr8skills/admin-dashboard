@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title">
            {{ trans('global.show') }} - {{$slider->question}}
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
                            Question
                        </th>
                        <td>
                            {{ $slider->question }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            Answer
                        </th>
                        <td>
                            {{ \Illuminate\Support\Str::limit($slider->answer, 550, $end='...') }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            Active?
                        </th>
                        <td>
                            {{$slider->visibility==1 ? 'Yes':'No'}}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            Position
                        </th>
                        <td>
                            {{$slider->position}}
                        </td>
                    </tr>

{{--                    <tr>--}}
{{--                        <th>--}}
{{--                            Image--}}
{{--                        </th>--}}
{{--                        <td>--}}
{{--                            <div class="custom-file-control thumbnail"--}}
{{--                                 style=" height: 350px;">--}}
{{--                                <img src="{{url('/images/'.$slider->pic)}}"--}}
{{--                                     alt="Slide Image" style="height: 100%" />--}}
{{--                            </div>--}}
{{--                        </td>--}}
{{--                    </tr>--}}
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>


    </div>
</div>
@endsection
