<!-- resources/views/messages/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="h4 mt-5"><i class="fa-solid fa-users-line"></i> Admin Dashboard</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @forelse($messages as $message)
                    <tr>
                        <td>{{ $message->id }}</td>
                        <td>{{ $message->name }}</td>
                        <td>{{ $message->email }}</td>
                        <td>{{ $message->subject }}</td>
                        <td>{{ $message->message }}</td>
                        <td>
                            <a href="#" onclick="deleteMessage({{ $message->id }});">
                                <button type="button" class="btn btn-warning">Delete</button>
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">No messages found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <script>
        function deleteMessage(id) {
            var confirmMessage = `Are you sure you want to delete message with ID ${id}?`;

            alertify.confirm(confirmMessage, function () {
                // Make an AJAX request to delete the message
                // You can use Axios or jQuery.ajax here
            }, function () {
                // Handle cancel button if needed
            });
        }
    </script>
@endsection
