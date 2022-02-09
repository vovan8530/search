<?php
/* @var \App\Models\Host[] $hosts */
/* @var \App\Models\Host $host */
?>

<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Hosts List') }}
    </h2>

    <!-- component -->
    <div class="text-gray-900 bg-gray-200">
      <div class="px-3 py-4 flex justify-center">
        <table class="w-full text-md bg-white shadow-md rounded mb-4">
          <tbody>
          <tr class="border-b">
            <th class="text-left p-3 px-5">№</th>
            <th class="text-left p-3 px-5">Host</th>
          </tr>
          @foreach($hosts as $host)
            <tr class="border-b hover:bg-orange-100 bg-gray-100">
              <td class="p-3 px-5">{{$loop->index + 1}}</td>
              <td  class="p-3 px-5">{{$host->name}}</td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </x-slot>
</x-app-layout>
