@if ($paginator->hasPages())
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
 
        @if ($paginator->onFirstPage())
        <li class="page-item disabled">
            <a class="page-link disabled">← Precedente</a>
        </li>
        @else
        <li class="page-item">
            <a class="page-link" href="{{ $paginator->previousPageUrl() }}">← Precedente</a>
        </li>
        @endif
    </li>

        @foreach ($elements as $element)
            @if (is_string($element))
            <li class="page-item disabled">
                <a class="page-link disabled"><span>{{ $element }}</span></a>
            </li>
            @endif
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                    <li class="page-item disabled">
                    <a class="page-link disabled">{{ $page }}</a>
                    </li>
                    @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                    </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        @if ($paginator->hasMorePages())
        <li class="page-item">
            <a class="page-link" href="{{ $paginator->nextPageUrl() }}">Successiva →</a>
        </li>
        @else
        <li class="page-item disabled">
            <a class="page-link"><span>Successiva →</span></a>
        </li>
        @endif
        </ul>
</nav>
@endif 