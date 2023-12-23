<x-admin-layout>
    @if(session('success'))
    <div id="toast-success" class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800">
       <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
           <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
               <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
           </svg>
           <span class="sr-only">Check icon</span>
       </div>
       <div class="ms-3 text-sm font-normal">{{ session('success') }}</div>
   </div>
    @endif
     <div class="py-12">
       <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
           <div class="flex justify-between m-2 p-2">
               <div class="px-4 py-2 flex items-center text-2xl">
               <h1 class="text-slate-900 font-bold">Menus</h1>
               </div>
               <a href="{{ route('admin.menus.create') }}" class="px-4 py-2 focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">New Menu</a>
           </div>
           <div class="relative overflow-x-auto">
               <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                   <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                       <tr>
                           <th scope="col" class="px-6 py-3">
                               No
                           </th>
                           <th scope="col" class="px-6 py-3">
                               Name
                           </th>
                           <th scope="col" class="px-6 py-3">
                               Image
                           </th>
                           <th scope="col" class="px-6 py-3">
                               Description
                           </th>
                           <th scope="col" class="px-6 py-3">
                                Price
                            </th>
                           <th scope="col" class="px-6 py-3">
                               Actions
                           </th>
                       </tr>
                   </thead>
                   <tbody>
                       @foreach ($menus as $menu)
                       <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                           <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                               {{ $loop->iteration }}
                           </th>
                           <td class="px-6 py-4">
                               {{ $menu->name; }}
                           </td>
                           <td class="py-4 px-6 text-sm font-medium text-gray-900whitespace-nowrap dark:text-white">
                               <img src="{{ Storage::url($menu->image) }}"
                                   class="w-16 h-16 rounded-lg"
                           </td>
                           <td class="px-6 py-4">
                               {{ $menu->description }}
                           </td>
                           <td class="px-6 py-4">
                            {{ $menu->price }}
                        </td>
                           <td class="px-6 py-4">
                               <div class="flex w-3/5">
                                   <a href="{{ route('admin.menus.edit',$menu->id) }}" class="py-2 px-4 text-white rounded-lg bg-yellow-600 hover:bg-yellow-700">Edit</a>
                                   <form action="{{ route('admin.menus.destroy', $menu->id) }}" method="POST" onsubmit="return confirm('Are you sure ?');">
                                   @csrf
                                   @method('DELETE')
                                       <button type="submit" class="mx-3 py-2 px-4 bg-red-600 hover:bg-red-700 rounded-lg text-white">Delete</button>
                                   </form>
                               </div>
                           </td>
                       </tr>
                       @endforeach
                   </tbody>
               </table>
           </div>
     </div>
     </div>
   </x-admin-layout>