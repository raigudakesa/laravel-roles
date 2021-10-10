@php
    $formClass  = '';
    $btnClass   = 'btn-outline-danger btn-sm';
    $btnText    = trans("laravelroles::laravelroles.buttons.delete");
    $btnTooltip = trans('laravelroles::laravelroles.tooltips.delete-role');
    $formAction = route('laravelroles::roles.destroy', $item->id);
    if(isset($large)) {
        $formClass  = 'mb-0';
        $btnClass   = 'btn-danger btn-sm mb-0';
        $btnText    = trans("laravelroles::laravelroles.buttons.delete-large");
    }
    if($type == 'Permission') {
        $btnTooltip = trans('laravelroles::laravelroles.tooltips.delete-permission');
        $formAction = route('laravelroles::permissions.destroy', $item->id);
    }
@endphp

<form action="{{ $formAction }}" method="POST" accept-charset="utf-8" data-bs-toggle="tooltip" title="{{ $btnTooltip }}" class="{{ $formClass }}" >
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <button class="btn btn-outline btn-block {{ $btnClass }}" type="button" style="width: 100%;" data-bs-toggle="modal" data-bs-target="#confirmDelete" data-bs-title="{!! trans('laravelroles::laravelroles.modals.delete_modal_title', ['type' => $type, 'item' => $item->name]) !!}" data-bs-message="{!! trans('laravelroles::laravelroles.modals.delete_modal_message', ['type' => $type, 'item' => $item->name]) !!}" >
        {!! $btnText !!}
    </button>
</form>
