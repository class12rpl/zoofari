@extends('admin.layouts.main')
@section('content')
    <div class="row">
        <div class="col-lg grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ $title }}</h4>
                    </p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($mails as $mail)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $mail->name }}</td>
                                        <td>{{ $mail->email }}</td>
                                        <td>
                                            <a href="/mail/{{ $mail->id }}" class="btn btn-primary"><i
                                                    class="mdi mdi-cursor-default"></i></a>
                                            <form action="/mail/{{ $mail->id }}" method="post" class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Yakin ingin menghapus data in?')"><i
                                                        class="mdi mdi-delete"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
