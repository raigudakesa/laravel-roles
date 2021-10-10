<form action="{{ route('laravelroles::roles-deleted-restore-all') }}" method="POST" accept-charset="utf-8" class="mb-0">
    {{ csrf_field() }}
    {{ method_field('POST') }}
    <button class="dropdown-item text-success pointer" type="button" style="width: 100%;" data-bs-toggle="modal" data-bs-target="#confirmRestoreRoles" data-bs-title="{{ trans('laravelroles::laravelroles.modals.restoreAllRolesTitle') }}" data-bs-message="{{ trans('laravelroles::laravelroles.modals.restoreAllRolesMessage') }}" >
        <i class="fa fa-fw fa-refresh" aria-hidden="true"></i>
        {!! trans('laravelroles::laravelroles.buttons.restore-all-roles') !!}
    </button>
</form>
