<x-admin-layout>

  <div class="py-8">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <a href="{{ route('admin.menus.index') }}"
        class="px-4 py-2 focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Menu
        index</a>
      <div class="m-2 p-2 w-full">
        <div class="px-4 py-2 flex justify-center text-2xl w-full">
          <h1 class="text-slate-900 font-bold">Edit Menu </h1>
        </div>
      </div>
      <div class="bg-slate-300 max-w-sm mx-auto p-8 rounded-lg shadow-lg">
        <form class="max-w-sm mx-auto" method="POST" action="{{ route('admin.menus.update', $menu->id) }} "
          enctype="multipart/form-data">
          @method('PUT')
          @csrf
          <div class="mb-5">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
            <input type="text" id="name"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              name="name" value="{{ $menu->name }}">
            @error('name')
            <div class="text-sm text-red-400">{{ $message }}</div>
            @enderror
          </div>
          
          <div class="max-w-sm mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="image">Upload Image</label>
            <input type="file" id="image" name="image"
              class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
              @error('image')
              <div class="text-sm text-red-400">{{ $message }}</div>
              @enderror
            <label class="block mt-2 text-sm font-medium text-gray-900 dark:text-white" for="image">Preview :</label>
              <div class="flex justify-center py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap">
                <img src="{{ Storage::url($menu->image) }}" class="w-16 h-16 rounded-lg"
              </div>
          </div>
          <div class="max-w-sm mb-5">
            <label for="description"
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
            <textarea id="description" rows="4"
              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              name="description">{{ $menu->description }}</textarea>
            @error('description')
            <div class="text-sm text-red-400">{{ $message }}</div>
            @enderror
          </div>
          <div class="max-w-sm mb-5">
            <label for="categories"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Choose Categories</label>
            <select id="categories" name="categories[]" class="form-multiselect w-full max-w-xs text-gray-900 bg-gray-50 rounded-lg border border-gray-300 overflow-auto" multiple>
              @foreach ($categories as $category)
              <option value="{{ $category->id }}" @selected($menu->categories->contains($category))>{{ $category->name }}</option>
              @endforeach
            </select>
          </div>
          <div class="max-w-sm mb-5">
            <label for="price" class="block text-sm font-medium text-gray-700"> Price </label>
            <div class="mt-1">
              <input type="number" min="0.00" max="10000.00" step="0.01" id="price" value="{{ $menu->price }}" name="price"
                class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
            </div>
            @error('price')
            <div class="text-sm text-red-400">{{ $message }}</div>
            @enderror
          </div>
          <button type="submit"
            class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Submit</button>
        </form>
      </div>
    </div>
  </div>
</x-admin-layout>