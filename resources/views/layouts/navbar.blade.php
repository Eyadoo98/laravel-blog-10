<!-- Topic Nav -->
<nav class="w-full py-4 border-t border-b" x-data="{ open: false }">
    <div class="block sm:hidden">
        <a href="#"
           class="block md:hidden text-base font-bold uppercase text-center flex justify-center items-center"
           @click="open = !open">
            Topics <i :class="open ? 'fa-chevron-down' : 'fa-chevron-up'" class="fas ml-2"></i>
        </a>
    </div>
    <div :class="open ? 'block' : 'hidden'" class="w-full flex-grow sm:flex sm:items-center sm:w-auto">
        <div class="w-full  mx-auto flex flex-col sm:flex-row items-center justify-end text-sm font-bold uppercase mt-0 px-6 py-2">
            <a href="#" class="hover:bg-gray-400 rounded py-2 px-4 mx-2 text-black">المدونة</a>
            <a href="#download-section" class="hover:bg-gray-400 rounded py-2 px-4 mx-2 text-black">تحميل التطبيق</a>
            <a href="#properties" class="hover:bg-gray-400 rounded py-2 px-4 mx-2 text-black">الخصائص</a>
            {{--                <a href="#" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">English</a>--}}
            <a href="{{route('home')}}" class="hover:bg-gray-400 rounded py-2 px-4 mx-2 text-black">
                <img src="{{url('images/main_logo.jpeg')}}" alt="main logo" width="50px">
            </a>
        </div>
    </div>
</nav>
