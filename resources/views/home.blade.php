 <x-app-layout>
 <!-- Posts Section -->
 <section class="w-full md:w-2/3 flex flex-col items-center px-3" style="width: min-content">

   @foreach ($posts as $post)


   @include('components.post-item',['post'=>$post])

    {{-- <x-post-item :post="$post" /><x-post-item/> --}}

   @endforeach


   <!-- Pagination -->
   {{ $posts->links()  }}


</section>

{{--<x-sidebar></x-sidebar>--}}


     <section class="w-full md:w-2/3 flex flex-col items-center px-3" >

         @foreach ($posts as $post)


             @include('components.post-item',['post'=>$post])

             {{-- <x-post-item :post="$post" /><x-post-item/> --}}

         @endforeach


         <!-- Pagination -->
         {{ $posts->links()  }}


     </section>
</x-app-layout>
