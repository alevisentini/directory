@if ($paginator->hasPages())
<ul class="pagination">
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
    <li class="disabled">
        <span class="button-icon fa fa-arrow-left"></span>
    </li>
    @else
    <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">
            <span class="button-icon fa fa-arrow-left"></span>
            Previous
        </a></li>
    @endif

    {{-- Pagination Elements --}}
    @foreach ($elements as $element)
    {{-- "Three Dots" Separator --}}
    @if (is_string($element))
    <li class="disabled"><span>{{ $element }}</span></li>
    @endif

    {{-- Array Of Links --}}
    @if (is_array($element))
    @foreach ($element as $page => $url)
    @if ($page == $paginator->currentPage())
    <li class="active"><a>{{ $page }}</a></li>
    @else
    <li><a href="{{ $url }}">{{ $page }}</a></li>
    @endif
    @endforeach
    @endif
    @endforeach

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
    <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="next-container">
        Next
        <span class="button-icon fa fa-arrow-right"></span>
    </a>
    @else
    <li class="disabled">
        <span class="button-icon fa fa-arrow-right"></span>
    </li>
    @endif
</ul>
@endif
