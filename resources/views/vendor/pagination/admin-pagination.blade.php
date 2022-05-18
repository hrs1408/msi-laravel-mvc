@if($paginator->hasPages())
    <div class="pagination-box">
        <nav class="ms-auto me-auto " aria-label="...">
            <ul class="pagination pagination-primary justify-content-center">
                @if($paginator->onFirstPage())
                    <li class="page-item disabled">
                        <a class="page-link" href="javascript:void(0)"
                           tabindex="-1">Previous</a>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)"
                           tabindex="-1">Previous</a>
                    </li>
                @endif
                @foreach($elements as $element)
                    @if(is_string($element))
                        <li class="page-item disabled">
                            <a class="page-link" href="javascript:void(0)">{{ $element }}</a>
                        </li>
                    @endif
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="page-item active">
                                    <a class="page-link">{{$page}}</a>
                                </li>
                            @else
                                <li class="page-item">
                                    <a class="page-link" href="{{$url}}">
                                        {{$page}}
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    @endif
                @endforeach
                @if($paginator->hasMorePages())
                    <li class="page-item ">
                        <a class="page-link" href="{{$paginator->nextPageUrl()}}">Next</a>
                    </li>
                @elseif($paginator->hasPages())
                    <li class="page-item disabled">
                        <a class="page-link">Next</a>
                    </li>
                @endif
            </ul>
        </nav>
    </div>
@endif
