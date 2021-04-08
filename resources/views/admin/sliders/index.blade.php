@extends('layouts.admin')
@section('content')
@can('user_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.sliders.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.slider.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title">
            {{ trans('cruds.slider.title_singular') }} {{ trans('global.list') }}
        </h4>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-striped table-hover datatable datatable-User">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.slider.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.slider.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.slider.fields.alt') }}
                        </th>
{{--                        <th>--}}
{{--                            {{ trans('cruds.slider.fields.class') }}--}}
{{--                        </th>--}}
{{--                        <th>--}}
{{--                            {{ trans('cruds.slider.fields.data_image_sizes') }}--}}
{{--                        </th>--}}
{{--                        <th>--}}
{{--                            {{ trans('cruds.slider.fields.data_aspect_ratio') }}--}}
{{--                        </th>--}}
                        <th>
                            {{ trans('cruds.slider.fields.data_resource_title') }}
                        </th>
{{--                        <th>--}}
{{--                            {{ trans('cruds.slider.fields.data_resource_uuid') }}--}}
{{--                        </th>--}}
                        <th>
                            {{ trans('cruds.slider.fields.location') }}
                        </th>
                        <th>
                            {{ trans('cruds.slider.fields.type') }}
                        </th>
                        <th>
                            {{ trans('cruds.slider.fields.position') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($sliders as $key => $slider)
                        <tr data-entry-id="{{ $slider->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $slider->id ?? '' }}
                            </td>
                            <td>
                                {{ $slider->name ?? '' }}
                            </td>
                            <td>
                                {{ $slider->alt ?? '' }}
                            </td>
{{--                            <td>--}}
{{--                                {{ $slider->class ?? '' }}--}}
{{--                            </td>--}}
{{--                            <td>--}}
{{--                                {{ $slider->data_image_sizes ?? '' }}--}}
{{--                            </td>--}}
{{--                            <td>--}}
{{--                                {{ $slider->data_aspect_ratio ?? '' }}--}}
{{--                            </td>--}}
                            <td>
                                {{ $slider->data_resource_title ?? '' }}
                            </td>
{{--                            <td>--}}
{{--                                {{ $slider->data_resource_uuid ?? '' }}--}}
{{--                            </td>--}}
                            <td>
                                {{ $slider->location ?? '' }}
                            </td>
                            <td>
                                {{ $slider->type ?? '' }}
                            </td>
                            <td>
                                {{ $slider->position ?? '' }}
                            </td>
                            <td>
                                @can('slider_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.sliders.show', $slider->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('slider_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.sliders.edit', $slider->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('slider_delete')
                                    <form action="{{ route('admin.sliders.destroy', $slider->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('slider_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.sliders.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'asc' ]],
    pageLength: 10,
  });
  $('.datatable-User:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection
