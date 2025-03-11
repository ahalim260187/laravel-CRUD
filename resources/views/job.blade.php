<x-layout>
    <x-slot:heading>
        Job Details
    </x-slot>
    <h1 class="font-bold text-3xl text-orange-600">Job Title : {{ $job['name'] }}</h1>
    <h2 class="font-bold text-1xl text-orange-600">Job Salary : {{ $job['salary'] }}</h2>

</x-layout>
