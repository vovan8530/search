<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Search IP') }}
    </h2>

    <!-- component -->
    <div class="flex-row">
      <form class=" max-w-lg" action="{{route('search')}}" method="POST">
        @csrf
        <div class="md:flex md:items-center mb-6">
          <div class="md:w-1/3">
          </div>
          <div class="md:w-2/3">
            <input
              class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
              id="inline-full-name"
              placeholder="host name"
              name="name"
              type="text"
              required
              value="{{ old('name')}}">
          </div>
        </div>
        <div class="md:flex md:items-center">
          <div class="md:w-1/3"></div>
          <div class="md:w-2/3">
            <button
              class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
              type="submit">
              Search
            </button>
          </div>
        </div>
      </form>
    </div>

  </x-slot>
</x-app-layout>
