@extends('admin.layouts.main')
@section('content')
    <div class="row">
        <div class="col-lg-6">
            <a href="/mails" class="btn btn-primary my-3">Back</a>
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td>{{ $mail->name }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>{{ $mail->email }}</td>
                        </tr>
                        <tr>
                            <td>Subject</td>
                            <td>:</td>
                            <td>{{ $mail->subject }}</td>
                        </tr>
                        <tr>
                            <td>Message</td>
                            <td>:</td>
                            <td>{{ $mail->message }}</td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
