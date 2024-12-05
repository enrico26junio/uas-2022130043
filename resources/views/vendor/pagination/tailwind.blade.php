<nav role="navigation" class="flex items-center justify-between bg-white p-4 rounded shadow-md">
    <div class="flex items-center">
        {{-- Previous Button --}}
        @if ($paginator->onFirstPage())
            <span class="px-3 py-2 text-sm font-medium text-gray-400 bg-gray-200 rounded-l-md cursor-not-allowed">
                Previous
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="px-3 py-2 text-sm font-medium text-white bg-blue-500 rounded-l-md hover:bg-blue-600">
                Previous
            </a>
        @endif

        {{-- Pagination Links --}}
        @foreach ($elements as $element)
            @if (is_string($element))
                <span class="px-3 py-2 text-sm font-medium text-gray-500">{{ $element }}</span>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="px-3 py-2 text-sm font-bold text-white bg-blue-500">{{ $page }}</span>
                    @else
                        <a href="{{ $url }}" class="px-3 py-2 text-sm font-medium text-blue-500 hover:bg-blue-100">
                            {{ $page }}
                        </a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Button --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="px-3 py-2 text-sm font-medium text-white bg-blue-500 rounded-r-md hover:bg-blue-600">
                Next
            </a>
        @else
            <span class="px-3 py-2 text-sm font-medium text-gray-400 bg-gray-200 rounded-r-md cursor-not-allowed">
                Next
            </span>
        @endif
    </div>
</nav>
