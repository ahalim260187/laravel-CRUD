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
                <div>User : {{ $job->user->first_name }} {{ $job->user->last_name }}</div>
                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <x-action-button href="{{ route('edit-job', $job->id) }}" color="purple">
                        Edit
                    </x-action-button>
                    <form action="{{ route('delete-job', $job->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <x-action-button type="button" href="{{ route('delete-job', $job->id) }}" color="red"
                            onclick="return confirm('Are you sure you want to delete this job?');">
                            Delete
                        </x-action-button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
    {{ $jobs->links() }}
</x-layout>
