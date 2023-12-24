<x-admin-layout>

  <div class="py-8">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <a href="{{ route('admin.reservations.index') }}"
        class="px-4 py-2 focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Reservation
        index</a>
      <div class="m-2 p-2 w-full">
        <div class="px-4 py-2 flex justify-center text-2xl w-full">
          <h1 class="text-slate-900 font-bold">Create Reservation </h1>
        </div>
      </div>
      <div class="bg-slate-300 min-w-lg mx-auto p-8 rounded-lg shadow-lg">
        <form class="flex flex-col lg:flex-row min-w-lg mx-auto" method="POST" action="{{ route('admin.reservations.store') }} "
          enctype="multipart/form-data">
          @csrf
            <div class="w-1/2">
              <div class="min-w-lg mb-5">
                <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                <input type="text" id="first_name"
                  class="bg-gray-50 w-3/5 border border-gray-300 text-gray-900 text-sm rounded-lg"
                  name="first_name">
                @error('first_name')
                <div class="text-sm text-red-400">{{ $message }}</div>
                @enderror
              </div>
              <div class="min-w-lg mb-5">
                <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900">Last Name</label>
                  <input type="text" id="last_name"
                    class="bg-gray-50 w-3/5 border border-gray-300 text-gray-900 text-sm rounded-lg"
                    name="last_name">
                  @error('last_name')
                  <div class="text-sm text-red-400">{{ $message }}</div>
                  @enderror
              </div>
              <div class="min-w-lg mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                  <input type="email" id="email"
                    class="bg-gray-50 w-3/5 border border-gray-300 text-gray-900 text-sm rounded-lg"
                    name="email">
                    @error('email')
                    <div class="text-sm text-red-400">{{ $message }}</div>
                    @enderror
              </div>
            </div>
            <div class="w-1/2">
              <div class="min-w-lg mb-5">
                <label for="tel_number" class="block mb-2 text-sm font-medium text-gray-900">Tel Number</label>
                  <input type="text" id="tel_number"
                    class="bg-gray-50 w-3/5 border border-gray-300 text-gray-900 text-sm rounded-lg"
                    name="tel_number">
                  @error('tel_number')
                  <div class="text-sm text-red-400">{{ $message }}</div>
                  @enderror
              </div>
              <div class="min-w-lg mb-5">
                <label for="res_date" class="block mb-2 text-sm font-medium text-gray-900">Res Date</label>
                  <input type="datetime-local" id="res_date"
                    class="bg-gray-50 w-3/5 border border-gray-300 text-gray-900 text-sm rounded-lg"
                    name="res_date">
                  @error('res_date')
                  <div class="text-sm text-red-400">{{ $message }}</div>
                  @enderror
              </div>
              <div class="min-w-lg mb-5">
                <label for="table_id"
                class="block mb-2 text-sm font-medium text-gray-900">Table</label>
                <select id="table_id" name="table_id" class="form-multiselect w-full max-w-xs text-gray-900 bg-gray-50 w-3/5 rounded-lg border border-gray-300 overflow-auto">
                  @foreach ($tables as $table)
                  <option value="{{ $table->id }}">{{ $table->name }} ({{ $table->guest_number }} Guests)</option>
                  @endforeach
                </select>
              </div>
              <button type="submit"
                class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Submit</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</x-admin-layout>