@extends('layouts.main')

@section('container')
<div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-16 my-10">
  <h3 class="text-3xl font-bold  dark:text-black text-center mb-10">POPULAR FILM</h3>
  <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
          <tr>
              <th scope="col" class="px-6 py-3">
                  Poster Path
              </th>
              <th scope="col" class="px-6 py-3">
                  Title
              </th>
              <th scope="col" class="px-6 py-3">
                  Genre
              </th>
              <th scope="col" class="px-6 py-3">
                  Viewed
              </th>
              <th scope="col" class="px-6 py-3">
                  Action
            </th>
          </tr>
      </thead>
      <tbody>
        @foreach ($films as $films)
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
          <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
            <img class="w-32" src={{$films["poster_path"]}} alt="">
          </th>
          <td class="px-6 py-4">
            {{$films["title"]}}
          </td>
          <td class="px-6 py-4">
            {{$films["genre"]}}
          </td>
          <td class="px-6 py-4">
            {{$films["views"]}}
          </td>
          <td class="px-6 py-4">
            <a href="/films/detail/{{$films["id"]}}">
              <button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Detail</button>
            </a>
          </td>
      </tr>
  </tbody>
@endforeach       
  </table>
</div>

@endsection