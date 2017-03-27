@if ($paginator->hasPages())
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
        <div class="disabled"><span>@lang('pagination.previous')</span></div>
    @else
        <div><a href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a></div>
    @endif

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
        <div><a href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a></div>
    @else
        <div class="disabled"><span>@lang('pagination.next')</span></div>
    @endif
@endif
