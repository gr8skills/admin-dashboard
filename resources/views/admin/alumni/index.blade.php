@extends('layouts.admin')
@section('content')
@can('user_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.alumni.create") }}">
                {{ trans('global.add') }} Alumni
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title">
            Alumni {{ trans('global.list') }}
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
                            Name
                        </th>
                        <th>
                            About
                        </th>
                        <th>
                            Active
                        </th>
                        <th>
                            Class
                        </th>
                        <th>
                            Set
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
                                {{ $slider->name ?? '' }}
                            </td>
                            <td>
                                {!! $slider->about !!}
                            </td>
                            <td>
                                {{ $slider->visibility==1 ? 'Yes':'No' }}
                            </td>
                            <td>
                                {{ $slider->class}}
                            </td>
                            <td>
                                {{ $slider->set->name}}
                            </td>
                            <td>
                                @can('alumni_access')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.alumni.show', $slider->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('alumni_access')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.alumni.edit', $slider->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('alumni_access')
                                    <form action="{{ route('admin.alumni.destroy', $slider->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger">{{ trans('global.delete') }}</button>
{{--                                        <input type="submit" class="btn btn-xs btn-warning" value="{{ trans('global.delete') }}">--}}
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
@can('alumni_access')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.alumni.massDestroy') }}",
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
