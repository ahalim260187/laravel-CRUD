<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot>
    @if (session('success'))
        <div class="bg-green-100 text-green-700 p-4 rounded">
            {{ session('success') }}
        </div>
    @endif
    <h1 class="font-bold text-lg">Jobs Available </h1>
    <ul>
        @foreach ($jobs as $job)
            <li style="padding: 10px; background-color: cornsilk; margin:10px; border-radius: 50px"> <a
                    href="{{ route('jobs.show', [$job['id']]) }}"><strong>{{ $job['name'] }}</strong> : Salary :
                    {{ $job['salary'] }}</a>
                <div class="text-laracast">Employer Of : {{ $job->employer->name }}</div>
            </li>
        @endforeach
    </ul>
    {{ $jobs->links() }}
</x-layout>
