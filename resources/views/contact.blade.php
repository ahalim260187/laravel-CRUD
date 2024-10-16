@extends('app')
@section('content')
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card w-100" style="max-width: 600px;">
            <div class="card-header bg-dark text-white text-center">
                Contact Form
            </div>
            <div class="card-body">
                {{-- <form action="{{ route('contact.submit') }}" method="POST"> --}}
                <form id="ajax-form">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter your name"
                            name="name" value="{{ old('name') }}">
                        <span class="error-name text text-danger"></span>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email"
                            name="email" value="{{ old('email') }}">
                        <span class="error-email text text-danger"></span>
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" class="form-control" id="subject" placeholder="Enter subject" name="subject"
                            value="{{ old('subject') }}">
                        <span class="error-subject text text-danger"></span>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="4" placeholder="Enter your message" name="message"
                            value="{{ old('message') }}"></textarea>
                        <span class="error-message text text-danger"></span>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </form>
                <div id="success-message" class="text-success"></div>
            </div>
        </div>
    </div>
    {{-- <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <!-- Button to trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
            Add Message
        </button>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="formModalLabel">Contact Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your name"
                                name="name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email"
                                name="email">
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject" placeholder="Enter subject"
                                name="'subject">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" rows="4" placeholder="Enter your message" name="message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            $('#ajax-form').on('submit', function(event) {
                event.preventDefault(); // Mencegah form dari refresh halaman

                $.ajax({
                    url: '{{ route('contact.submit') }}',
                    method: 'POST',
                    data: $(this).serialize(),
                    success: function(response) {
                        // Menampilkan pesan sukses jika tidak ada error
                        $('#success-message').text(response.success);
                        $('.text-danger').text(''); // Menghapus pesan error sebelumnya
                        window.location.href = '{{ route('contact.message') }}';
                    },
                    error: function(xhr) {
                        // console.log(xhr); // Tambahkan ini untuk melihat respons
                        if (xhr.responseJSON && xhr.responseJSON.errors) {
                            var errors = xhr.responseJSON.errors;
                            $('.text-danger').text(''); // Menghapus pesan error sebelumnya
                            if (errors.name) {
                                $('.error-name').text(errors.name[0]); // Menampilkan error name
                            }
                            if (errors.email) {
                                $('.error-email').text(errors.email[
                                    0]); // Menampilkan error email
                            }
                            if (errors.subject) {
                                $('.error-subject').text(errors.subject[0]);
                            }
                            if (errors.message) {
                                $('.error-message').text(errors.message[0]);
                            }
                        } else {
                            console.log('Unexpected error response:', xhr);
                        }
                    }
                });
            });
        });
    </script>
@endpush
