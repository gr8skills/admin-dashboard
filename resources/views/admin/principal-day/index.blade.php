@extends('layouts.admin')
@section('content')
@can('user_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.mainMenu.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.menu.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title">
            {{ trans('cruds.menu.title_singular') }} {{ trans('global.list') }}
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
                            {{ trans('cruds.menu.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.menu.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.menu.fields.link') }}
                        </th>
                        <th>
                            {{ trans('cruds.menu.fields.submenu') }}
                        </th>
                        <th>
                            {{ trans('cruds.menu.fields.alias') }}
                        </th>
                        <th>
                            {{ trans('cruds.menu.fields.visibility') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($menus as $key => $menu)
                        <tr data-entry-id="{{ $menu->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $menu->id ?? '' }}
                            </td>
                            <td>
                                {{ $menu->name ?? '' }}
                            </td>
                            <td>
                                {{ $menu->link ?? '' }}
                            </td>
                            <td>
                                {{ $menu->submenu ?? '' }}
                            </td>
                            <td>
                                {{ $menu->alias ?? '' }}
                            </td>
                            <td>
                                {{ $menu->visibility ?? '' }}
                            </td>
                            <td>
                                @can('mainMenu_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.main-menu.show', $menu->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('mainMenu_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.main-menu.edit', $menu->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('mainMenu_delete')
                                    <form action="{{ route('admin.main-menu.destroy', $menu->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('user_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.menus.massDestroy') }}",
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
    pageLength: 100,
  });
  $('.datatable-User:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection
