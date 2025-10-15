@if ($paginator->hasPages())
    <ul class="justify-content-center">
        @if ($paginator->onFirstPage())
            <li>
                <a href="javascript:void(0)"><i class="fa-solid fa-chevrons-left"></i></a>
            </li>
        @else
            <li>
                <a href="{{ $paginator->previousPageUrl() }}"><i class="fa-solid fa-chevrons-left"></i></a>
            </li>
        @endif

        @foreach ($elements as $element)
            @if (is_string($element))
                <li><a href="javascript:void(0)">...</a></li>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li><a href="javascript:void(0)" class="active">{{ $page }}</a></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        @if ($paginator->hasMorePages())
            <li><a href="{{ $paginator->nextPageUrl() }}"><i class="fa-solid fa-chevrons-right"></i></a></li>
        @else
            <li><a href=""><i class="fa-solid fa-chevrons-right"></i></a></li>
        @endif
    </ul>
@endif
