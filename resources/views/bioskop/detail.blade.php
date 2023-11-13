@extends('layouts.main')

@section('container')
<div class="text-center items-center mt-32">
    <div class="flex justify-center items-center mt-32">
        <div class="flex flex-col text-center items-center py-9 px-9 bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <img class=" mr-8 object-cover w-full h-96 md:h-auto md:w-48 md:rounded-lg" src={{$bioskops->logo}} alt="">
            <div class="flex flex-col justify-between leading-normal">
                <h5 class="mb-4 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-left">{{$bioskops->name}}</h5>
                <p class="mb-4 mr-3 font-normal text-gray-700 dark:text-gray-400 text-left">{{$bioskops->description}}</p>
                <p class="mb-2 font-normal text-gray-700 dark:text-gray-400 text-left">{{$bioskops->adress}}</p>
                <p class="mb-5 font-normal text-gray-700 dark:text-gray-400 text-left">{{$bioskops->city}}</p>
                <div class="flex items-center mt-2.5 mb-5">
                    <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-3">{{$bioskops->phone}}</span>
                    <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-3">{{$bioskops->email}}</span>
                </div>
            </div>
        </div>
    </div>
    <a href="/bioskops/all">
        <button type="button" class="mt-12 text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-12 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Back</button>
    </a>
</div>
@endsection
