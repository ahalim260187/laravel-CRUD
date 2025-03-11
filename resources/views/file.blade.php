@extends('app')
@section('content')
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card w-100" style="max-width: 600px;">
            <div class="card-header bg-dark text-white text-center">
                File Uploud
            </div>
            <div class="card-body">
                <form action="{{ route('file.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Uploud</label>
                        <input type="file" class="form-control" id="file" name="file">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </form>
                <div id="success-message" class="text-success"></div>
            </div>
        </div>
    </div>
@endsection
