@if ($paginator->hasPages())

        <ul class="c-content-pagination c-theme">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="c-prev c-disabled">
                <a href="#">
                    <i class="fa fa-angle-left"></i>
                </a>
            </li>
        @else
            <li class="c-prev">
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="c-disabled"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="c-active"><span>{{ $page }}</span></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
                <li class="c-next">
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </li>
            @else
            <li class="c-next c-disabled">
                <a href="#">
                    <i class="fa fa-angle-right"></i>
                </a>
            </li>
        @endif


    </ul>

@endif
