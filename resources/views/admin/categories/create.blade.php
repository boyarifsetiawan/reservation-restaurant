<x-admin-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Admin Dashboard') }}
      </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-start m-2 p-2">
            <a href="{{ route('admin.categories.index') }}" class="px-4 py-2 focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Categories Index</a>
        </div>
        <div class="bg-slate-300 max-w-sm mx-auto p-8 rounded-lg shadow-lg">
          <form class="max-w-sm mx-auto" method="POST" action="{{ route('admin.categories.store') }} " enctype="multipart/form-data">
            @csrf
            <div class="mb-5">
              <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category Name</label>
              <input type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="name">
              @error('name')
                <div class="text-sm text-red-400">{{ $message }}</div>
              @enderror
            </div>
            <div class="max-w-sm mb-5">
              <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="image">Upload Image</label>
              <input type="file" id="image" name="image" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5"/>
              @error('image')
                <div class="text-sm text-red-400">{{ $message }}</div>
              @enderror
            </div>
            <div class="max-w-sm mb-5">
              <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
              <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="description"></textarea>
            @error('description')
              <div class="text-sm text-red-400">{{ $message }}</div>
            @enderror
            </div>
            <button type="submit" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Submit</button>
          </form>
        </div>
    </div>
  </div>
</x-admin-layout>