@extends('app')
@section('content')
    <h2 class="pt-5 mb-5">Message List</h2>
    <div class="mb-2">
        <a href="{{ route('contact.index') }}">Create Message</a>
    </div>
    <section>
        <table class="table table-striped table-hover table-bordered">
            <thead class= "table-dark text-center">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Message</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($messages as $msg)
                    <tr>
                        <th scope="row">{{ $msg->id }}</th>
                        <td>{{ $msg->name }}</td>
                        <td>{{ $msg->email }}</td>
                        <td>{{ $msg->subject }}</td>
                        <td>{{ $msg->message }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
