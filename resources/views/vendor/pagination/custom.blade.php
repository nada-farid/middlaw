@if ($paginator->hasPages())
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="mix-blog-grid-1-col case-card-v2">
                <div class="pagination-part">
                    <ul id="border-pagination">

                        {{-- Previous Page --}}
                        @if ($paginator->onFirstPage())
                        <li class="disabled">
                            <a href="#">
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </li>
                        @else
                        <li>
                            <a href="{{ $paginator->previousPageUrl() }}">
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </li>
                        @endif

                        {{-- Pagination Numbers --}}
                        @foreach ($elements as $element)

                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                        <li class="disabled"><span>{{ $element }}</span></li>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                        @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                        <li>
                            <a class="active">{{ $page }}</a>
                        </li>
                        @else
                        <li>
                            <a href="{{ $url }}">{{ $page }}</a>
                        </li>
                        @endif
                        @endforeach
                        @endif

                        @endforeach

                        {{-- Next Page --}}
                        @if ($paginator->hasMorePages())
                        <li>
                            <a href="{{ $paginator->nextPageUrl() }}">
                                <i class="ri-arrow-left-line"></i>
                            </a>
                        </li>
                        @else
                        <li class="disabled">
                            <span><i class="ri-arrow-left-line"></i></span>
                        </li>
                        @endif

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
