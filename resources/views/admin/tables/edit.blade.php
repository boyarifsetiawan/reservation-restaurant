<x-admin-layout>

  <div class="py-8">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <a href="{{ route('admin.tables.index') }}"
        class="px-4 py-2 focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Table
        index</a>
      <div class="m-2 p-2 w-full">
        <div class="px-4 py-2 flex justify-center text-2xl w-full">
          <h1 class="text-slate-900 font-bold">Edit Table </h1>
        </div>
      </div>
      <div class="bg-slate-300 min-w-lg mx-auto p-8 rounded-lg shadow-lg">
        <form class="min-w-md mx-auto" method="POST" action="{{ route('admin.tables.update',$table->id) }} ">
          @csrf
          @method('PUT')
            <div class="max-w-sm mb-5">
              <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
              <input type="text" id="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                name="name" value="{{ $table->name }}">
              @error('name')
              <div class="text-sm text-red-400">{{ $message }}</div>
              @enderror
            </div>
            <div class="max-w-sm mb-5">
              <label for="guest_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Guest Number</label>
              <input type="number" id="guest_number"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                name="guest_number" value="{{ $table->guest_number }}">
              @error('guest_number')
              <div class="text-sm text-red-400">{{ $message }}</div>
              @enderror
            </div>
            <div class="max-w-sm mb-5">
              <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
              <select id="status" name="status" class="form-multiselect w-full max-w-xs text-gray-900 bg-gray-50 rounded-lg border border-gray-300 overflow-auto">
                <option disabled selected >--choose status--</option>
                @foreach (App\Enums\TableStatus::cases() as $status)
                <option value="{{ $status->value }}" @selected($table->status->value == $status->value)>{{ $status->name }}</option>
                @endforeach
              </select>
                @error('status')
                <div class="text-sm text-red-400">{{ $message }}</div>
                @enderror
            </div>
            <div class="max-w-sm mb-5">
              <label for="location" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Location</label>
              <select id="location" name="location" class="form-multiselect w-full max-w-xs text-gray-900 bg-gray-50 rounded-lg border border-gray-300 overflow-auto">
                <option disabled selected >--choose location--</option>
                @foreach (App\Enums\TableLocation::cases() as $location)
                <option value="{{ $location->value }}" @selected($table->location->value == $location->value)>{{ $location->name }}</option>
                @endforeach
              </select>
              @error('location')
              <div class="text-sm text-red-400">{{ $message }}</div>
              @enderror
            </div>
            <button type="submit"
              class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</x-admin-layout>