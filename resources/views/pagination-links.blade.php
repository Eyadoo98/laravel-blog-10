{{--@if ($paginator->hasPages())--}}
{{--    <ul class="flex justify-center ">--}}
{{--        <!-- prev -->--}}
{{--        @if ($paginator->onFirstPage())--}}
{{--            <li class="w-16 px-2 py-1 text-center">--}}
{{--                <i class="fa fa-angle-left text-gray-400"></i>--}}
{{--            </li>--}}
{{--        @else--}}
{{--            <li class="w-16 px-2 py-1 text-center cursor-pointer" wire:click="previousPage">--}}
{{--                <i class="fa fa-angle-left"></i>--}}
{{--            </li>--}}
{{--        @endif--}}
{{--        <!-- prev end -->--}}

{{--        <!-- numbers -->--}}
{{--        @foreach ($elements as $element)--}}
{{--            <div class="flex flex-col lg:flex-row">--}}
{{--                @if (is_array($element))--}}
{{--                    @foreach ($element as $page => $url)--}}
{{--                        @if ($page == $paginator->currentPage())--}}
{{--                            <li class="mx-2 w-10 px-2 py-1 text-center rounded-full border shadow text-white cursor-pointer" style="background-color: #545454" wire:click="gotoPage({{$page}})">{{$page}}</li>--}}
{{--                        @else--}}
{{--                            <li class="mx-2 w-10 px-2 py-1 text-center rounded-full border shadow bg-white cursor-pointer" wire:click="gotoPage({{$page}})">{{$page}}</li>--}}
{{--                        @endif--}}
{{--                    @endforeach--}}
{{--                @endif--}}
{{--            </div>--}}
{{--        @endforeach--}}
{{--        <!-- end numbers -->--}}


{{--        <!-- next  -->--}}
{{--        @if ($paginator->hasMorePages())--}}
{{--            <li class="w-16 px-2 py-1 text-center rounded cursor-pointer" wire:click="nextPage">--}}
{{--                <i class="fa fa-angle-right"></i>--}}
{{--            </li>--}}
{{--        @else--}}
{{--            <li class="w-16 px-2 py-1 text-center">--}}
{{--                <i class="fa fa-angle-right text-gray-400"></i>--}}
{{--            </li>--}}
{{--        @endif--}}
{{--        <!-- next end -->--}}
{{--    </ul>--}}
{{--@endif--}}
{{--<div style="height: 50px;"></div>--}}

@if ($paginator->hasPages())
    <div class="flex items-end my-2 justify-center">

        @if ( ! $paginator->onFirstPage())
            {{-- First Page Link --}}
{{--            <a--}}
{{--                class="mx-1 px-4 py-2 border-2 text-white font-bold text-center hover:bg-blue-400 hover:border-blue-400 rounded-full  cursor-pointer"--}}
{{--                wire:click="gotoPage(1)" style="background-color: #545454">--}}
{{--                <<--}}
{{--            </a>--}}
            @if($paginator->currentPage() > 2)
                {{-- Previous Page Link --}}
                <a
                    class="mx-1 px-4 py-2  border-2  text-white font-bold text-center rounded-full  cursor-pointer"
                    wire:click="previousPage"style="background-color: #545454"
                >
                    <
                </a>
            @endif
        @endif

        <!-- Pagination Elements -->
        @foreach ($elements as $element)
            <!-- Array Of Links -->
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    <!--  Use three dots when current page is greater than 3.  -->
                    @if ($paginator->currentPage() > 3 && $page === 2)
                        <div class="text-blue-800  lg:w-6 w-5 contents">
                            <span class="font-bold">.</span>
                            <span class="font-bold">.</span>
                            <span class="font-bold">.</span>
                        </div>
                    @endif

                    <!--  Show active page two pages before and after it.  -->
                    @if ($page == $paginator->currentPage())
                        <span
                            class="mx-1 px-4 py-2 border-2 text-white font-bold text-center  rounded-full  cursor-pointer" style="background-color: #545454">{{ $page }}</span>
                    @elseif ($page === $paginator->currentPage() + 1 || $page === $paginator->currentPage() + 2 || $page === $paginator->currentPage() - 1 || $page === $paginator->currentPage() - 2)
                        <a class="mx-1 px-4 py-2 border-2 border-black text-blue-900 font-bold text-center  rounded-full  cursor-pointer"
                           wire:click="gotoPage({{$page}})">{{ $page }}</a>
                    @endif

                    <!--  Use three dots when current page is away from end.  -->
                    @if ($paginator->currentPage() < $paginator->lastPage() - 2  && $page === $paginator->lastPage() - 1)
                        <div class="text-blue-800 lg:w-6 w-5 contents">
                            <span class="font-bold">.</span>
                            <span class="font-bold">.</span>
                            <span class="font-bold">.</span>
                        </div>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            @if($paginator->lastPage() - $paginator->currentPage() >= 2)
                <a class="mx-1 px-4 py-2 border-2  text-white font-bold text-center rounded-full  cursor-pointer"
                   wire:click="nextPage"
                   rel="next" style="background-color: #545454">
                    >
                </a>
            @endif
{{--            <a--}}
{{--                class="mx-1 px-4 py-2 border-2 text-white font-bold text-center rounded-full  cursor-pointer"--}}
{{--                wire:click="gotoPage({{ $paginator->lastPage() }})"--}}
{{--                style="background-color: #545454">--}}
{{--                >>--}}
{{--            </a>--}}
        @endif
    </div>
@endif
