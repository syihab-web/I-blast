@extends('layouts.app')

<style>
    tr{
        padding-left: 10%;
        margin: 10%;
    }
    td{
        padding: 2%;
        padding-bottom: 4%;
        padding-left: 10%;
    }
    .bg{
        border-radius: 4%;
    }
</style>
@section('content')
            <table align="center" class="bg" style="width: 80%;">
                <tr>
                    <td></td>
                    <td><img src="{{ asset('assets/image/'.$email['image']) }}" width="100" alt=""></td>
                </tr>
                <tr>
                    <td>Id Email</td>
                    <td>{{ $email['id'] }}</td>
                </tr>
                <tr>
                    <td>Email Pengirim</td>
                    <td>{{ $email->from }}</td>
                </tr>
                <tr>
                    <td>Email Tujuan</td>
                    <td>{{ $email['to'] }}</td>
                </tr>
                <tr>
                    <td>Subject</td>
                    <td>{{ $email['subject'] }}</td>
                </tr>
                <tr>
                    <td>File Lampiran</td>
                    <td>{{ $email['file'] }}</td>
                </tr>
                <tr>
                    <td>Pesan</td>
                    <td>{{ $email['pesan'] }}</td>
                </tr>
                <tr>
                    <td>
                        <a href="/email" class="btn btn-info">Back</a>
                    </td>
                </tr>
            </table>
@endsection
