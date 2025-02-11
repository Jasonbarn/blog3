


<x-app-layout>
     @section('extra-js')


@section('content')
     <!-- component -->
     <div class="bg-white p-8 rounded-md w-full">
     <div class="flex items-center justify-between pb-6">
          <div>
               <h2 class="text-2xl font-extrabold text-gray-900">Post</h2>
               <span class="text-xs">All post</span>
          </div>
          <div class="flex items-center justify-between">
               <div class="flex bg-gray-50 items-center p-2 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                         <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                    </svg>
                    <input class="bg-gray-50 outline-none ml-1 block" type="text" placeholder="search...">
               </div>
               <div class="lg:ml-40 ml-10 space-x-8">
                    <button class="bg-indigo-600 px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer">New post</button>
                    <button class="bg-indigo-600 px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer">Create</button>
               </div>
          </div>
     </div>
     <div>
          <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
               <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal">
                         <thead>
                         <tr>
                              <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                   username
                              </th>
                              <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                   Name of the Topic
                              </th>
                              
                              <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                   
                                   Subject
                              </th>
                              <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                   
                                   Image
                              </th>
                              
                         </tr>
                         </thead>
                         <tbody>
                         @foreach ($posts as $post)
                              <tr>
                                   <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <a href="{{ route('show', $post->id) }}">
                                             <div class="flex items-center">
                                             <div class="ml-3">
                                                  <p class="text-gray-900 whitespace-no-wrap">
                                                       {{ $post->title }}
                                                  </p>
                                             </div>
                                             </div>
                                        </a>
                                   </td>
                                   <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <a href="{{ route('show', $post->id) }}">
                                             <p class="text-gray-900 whitespace-no-wrap">{{ $post->content }}</p>
                                        </a>
                                   </td>
                                   <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <a href="{{ route('show', $post->id) }}">
                                             <p class="text-gray-900 whitespace-no-wrap">
                                             {{ $post->comments }} :
                                             </p>
                                        </a>
                                   </td>
                                   <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <a href="{{ route('show', $post->id) }}">
                                             <img src="{{$post->image}}" alt=""> <br>
                                        </a>
                                   </td>
                                   <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <a href="{{ route('show', $post->id) }}">
                                             
                                        </a>
                                   </td>
                              </tr>
                         @endforeach
                         </tbody>
               </table>
               <div class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between">
                    
                         <div class="inline-flex mt-2 xs:mt-0">
                         
                         </div>
                    </div>
               </div>
          </div>
     </div>
     </div>
     @endsection
     </x-app-layout>





     <!-- tailwind.config.js -->

 
 
 
 <!-- component -->

 <div class="overflow-x-hidden bg-gray-100">
     <nav class="px-6 py-4 bg-white shadow">
         <div class="container flex flex-col mx-auto md:flex-row md:items-center md:justify-between">
             <div class="flex items-center justify-between">
                 <div>
                     <a href="#" class="text-xl font-bold text-gray-800 md:text-2xl">BLOG</a>
                 </div>
                 <div>
                     <button type="button" class="block text-gray-800 hover:text-gray-600 focus:text-gray-600 focus:outline-none md:hidden">
                         <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                             <path d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                             </path>
                         </svg>
                     </button>
                 </div>
             </div>
             <div class="flex-col hidden md:flex md:flex-row md:-mx-4">
                 <a href="#" class="my-1 text-gray-800 hover:text-blue-500 md:mx-4 md:my-0">HomePage</a>
                 <a href="#" class="my-1 text-gray-800 hover:text-blue-500 md:mx-4 md:my-0">Post</a>
                 <a href="#" class="my-1 text-gray-800 hover:text-blue-500 md:mx-4 md:my-0"></a>
             </div>
         </div>
     </nav>
 
     <div class="px-6 py-8">
         <div class="container flex justify-between mx-auto">
             <div class="w-full lg:w-8/12">
                 <div class="flex items-center justify-between">
                     <h1 class="text-xl font-bold text-gray-700 md:text-2xl">Commentary</h1>
                     <div>
                         <select class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                             <option>Latest</option>
                             <option>Newest</option>
                         </select>
                     </div>
                 </div>
                 @foreach ($posts as $post)
                 <div class="mt-6">
                     <div class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
                         <div class="flex items-center justify-between"><span class="font-light text-gray-600">{{$post->created_at}}</span><a href="#"
                                 class="px-2 py-1 font-bold text-gray-100 bg-gray-600 rounded hover:bg-gray-500">{{$post->title}}<a href="{{ route('show', $post->id) }}"></a>
                         </div>
                         <div class="mt-2"><a href="#" class="text-2xl font-bold text-gray-700 hover:underline">{{$post->title}}</a>
                             <p class="mt-2 text-gray-600">{{$post->content}}</p>
                         </div>
                         <div class="flex items-center justify-between mt-4"><a href="#"
                                 class="text-blue-500 hover:underline">Read more</a>
                             <div><a href="#" class="flex items-center"> <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                              <a href="{{ route('show', $post->id) }}">
                                   <img src="{{$post->image}}" alt=""> <br>
                              </a>
                         </td>
                                     <h1 class="font-bold text-gray-700 hover:underline"><a href="{{ route('show', $post->id) }}"></h1>
                                 </a></div>
                         </div>
                     </div>
                 </div>
                 @endforeach
                 
                 <div class="mt-8">
                     <div class="flex">
                         <a href="#" class="px-3 py-2 mx-1 font-medium text-gray-500 bg-white rounded-md cursor-not-allowed">
                             previous
                         </a>
                     
                         <a href="#" class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-blue-500 hover:text-white">
                             1
                         </a>
                     
                         <a href="#" class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-blue-500 hover:text-white">
                             2
                         </a>
                     
                         <a href="#" class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-blue-500 hover:text-white">
                             3
                         </a>
                     
                         <a href="#" class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-blue-500 hover:text-white">
                             Next
                         </a>
                     </div>
                 </div>
             </div>
             <div class="hidden w-4/12 -mx-8 lg:block">
                 <div class="px-8">
                     <h1 class="mb-4 text-xl font-bold text-gray-700">People who posts</h1>
                     <div class="flex flex-col max-w-sm px-6 py-4 mx-auto bg-white rounded-lg shadow-md">
                         <ul class="-mx-4">
                             <li class="flex items-center"> <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                              <a href="{{ route('show', $post->id) }}">
                                   <img src="{{$post->image}}" alt=""> <br>
                              </a>
                         </td>
                                 <p><a href="#" class="mx-1 font-bold text-gray-700 hover:underline"><a href="{{ route('show', $post->id) }}"></a><span
                                         class="text-sm font-light text-gray-700">publicate</span></p>
                             </li>
                             
                         </td>
                                 <p><a href="#" class="mx-1 font-bold text-gray-700 hover:underline"><a href="{{ route('show', $post->id) }}"></a><span
                                         class="text-sm font-light text-gray-700">publicate</span></p>
                             </li>
                             <li class="flex items-center mt-6"> <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                              <a href="{{ route('show', $post->id) }}">
                                   <img src="{{$post->image}}" alt=""> <br>
                              </a>
                         </td>
                                 <p><a href="#" class="mx-1 font-bold text-gray-700 hover:underline"><a href="{{ route('show', $post->id) }}"></a><span class="text-sm font-light text-gray-700">All post</span>
                                 </p>
                             </li>
                         </ul>
                     </div>
                 </div>
                 <div class="px-8 mt-10">
                     <h1 class="mb-4 text-xl font-bold text-gray-700">Topic</h1>
                     <div class="flex flex-col max-w-sm px-4 py-6 mx-auto bg-white rounded-lg shadow-md">
                         <ul>
                             <li><a href="#" class="mx-1 font-bold text-gray-700 hover:text-gray-600 hover:underline">{{$post->title}}</a></li>
                             <li class="mt-2"><a href="#"
                                     class="mx-1 font-bold text-gray-700 hover:text-gray-600 hover:underline">
                                     Laravel</a></li>
                             
                             </li>
                         </ul>
                     </div>
                 </div>
                 <div class="px-8 mt-10">
                     <h1 class="mb-4 text-xl font-bold text-gray-700">Recent Post</h1>
                     <div class="flex flex-col max-w-sm px-8 py-6 mx-auto bg-white rounded-lg shadow-md">
                         <div class="flex items-center justify-center"><a href="#"
                                 class="px-2 py-1 text-sm text-green-100 bg-gray-600 rounded hover:bg-gray-500">{{$post->title}}</a>
                         </div>
                         <div class="mt-4"><a href="#" class="text-lg font-medium text-gray-700 hover:underline">{{$post->title}}.</a></div>
                         <div class="flex items-center justify-between mt-4">
                             <div class="flex items-center"><img
                                     src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80"
                                     alt="avatar" class="object-cover w-8 h-8 rounded-full"><a href="#"
                                     class="mx-3 text-sm text-gray-700 hover:underline">{{$post->user_id}}</a></div><span
                                 class="text-sm font-light text-gray-600"> {{$post->created_at}}</span>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <footer class="px-6 py-2 text-gray-100 bg-gray-800">
         <div class="container flex flex-col items-center justify-between mx-auto md:flex-row"><a href="#"
                 class="text-2xl font-bold">JB Blog</a>
             <p class="mt-2 md:mt-0">All rights reserved 2024.</p>
             <div class="flex mt-4 mb-2 -mx-2 md:mt-0 md:mb-0"><a href="#"
                     class="mx-2 text-gray-100 hover:text-gray-400"><svg viewBox="0 0 512 512"
                         class="w-4 h-4 fill-current">
                     <path
                         d="M444.17,32H70.28C49.85,32,32,46.7,32,66.89V441.61C32,461.91,49.85,480,70.28,480H444.06C464.6,480,480,461.79,480,441.61V66.89C480.12,46.7,464.6,32,444.17,32ZM170.87,405.43H106.69V205.88h64.18ZM141,175.54h-.46c-20.54,0-33.84-15.29-33.84-34.43,0-19.49,13.65-34.42,34.65-34.42s33.85,14.82,34.31,34.42C175.65,160.25,162.35,175.54,141,175.54ZM405.43,405.43H341.25V296.32c0-26.14-9.34-44-32.56-44-17.74,0-28.24,12-32.91,23.69-1.75,4.2-2.22,9.92-2.22,15.76V405.43H209.38V205.88h64.18v27.77c9.34-13.3,23.93-32.44,57.88-32.44,42.13,0,74,27.77,74,87.64Z">
                     </path>
                 </svg></a><a href="#" class="mx-2 text-gray-100 hover:text-gray-400"><svg viewBox="0 0 512 512"
                     class="w-4 h-4 fill-current">
                     <path
                         d="M455.27,32H56.73A24.74,24.74,0,0,0,32,56.73V455.27A24.74,24.74,0,0,0,56.73,480H256V304H202.45V240H256V189c0-57.86,40.13-89.36,91.82-89.36,24.73,0,51.33,1.86,57.51,2.68v60.43H364.15c-28.12,0-33.48,13.3-33.48,32.9V240h67l-8.75,64H330.67V480h124.6A24.74,24.74,0,0,0,480,455.27V56.73A24.74,24.74,0,0,0,455.27,32Z">
                     </path>
                 </svg></a><a href="#" class="mx-2 text-gray-100 hover:text-gray-400"><svg viewBox="0 0 512 512"
                     class="w-4 h-4 fill-current">
                     <path
                         d="M496,109.5a201.8,201.8,0,0,1-56.55,15.3,97.51,97.51,0,0,0,43.33-53.6,197.74,197.74,0,0,1-62.56,23.5A99.14,99.14,0,0,0,348.31,64c-54.42,0-98.46,43.4-98.46,96.9a93.21,93.21,0,0,0,2.54,22.1,280.7,280.7,0,0,1-203-101.3A95.69,95.69,0,0,0,36,130.4C36,164,53.53,193.7,80,211.1A97.5,97.5,0,0,1,35.22,199v1.2c0,47,34,86.1,79,95a100.76,100.76,0,0,1-25.94,3.4,94.38,94.38,0,0,1-18.51-1.8c12.51,38.5,48.92,66.5,92.05,67.3A199.59,199.59,0,0,1,39.5,405.6,203,203,0,0,1,16,404.2,278.68,278.68,0,0,0,166.74,448c181.36,0,280.44-147.7,280.44-275.8,0-4.2-.11-8.4-.31-12.5A198.48,198.48,0,0,0,496,109.5Z">
                     </path>
                 </svg></a>
             </div>
         </div>
     </footer>
 </div>
 

     