@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<style>
    button{
        height: 100%;
    }

    .link{
        text-decoration: none;
    }

    .btnhistory {
    border-radius: 4px;
    background-color: #f4511e;
    border: none;
    color: #FFFFFF;
    text-align: center;
    font-size: 28px;
    padding: 20px;
    width: 100%;
    transition: all 0.5s;
    cursor: pointer;
    margin: 5px;
    }
    .btnsend {
    border-radius: 4px;
    background-color: springgreen;
    border: none;
    color: #FFFFFF;
    text-align: center;
    font-size: 28px;
    padding: 20px;
    width: 100%;
    transition: all 0.5s;
    cursor: pointer;
    margin: 5px;
    }
    .btntemplate {
    border-radius: 4px;
    background-color: royalblue;
    border: none;
    color: #FFFFFF;
    text-align: center;
    font-size: 28px;
    padding: 20px;
    width: 100%;
    transition: all 0.5s;
    cursor: pointer;
    margin: 5px;
    }

    .btndb{
    border-radius: 4px;
    background-color: white;
    border: none;
    color: #000;
    text-align: center;
    font-size: 28px;
    padding: 20px;
    width: 100%;
    transition: all 0.5s;
    cursor: pointer;
    margin: 5px;
    border: 2px solid black;
    }

button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

button:hover span {
  padding-right: 25px;
}

button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
    <div class="row">
        <div class="col-md-4">
            <a href="/email"><button class="btnhistory"><span><i class="fas fa-history"></i> Email History</span></button></a>
        </div>
        <div class="col-md-4">
            <a href="/email/create"><button class="btnsend"><span><i class="fas fa-envelope"></i> Send Email</span></button></a>
        </div>
        <div class="col-md-4">
            <button class="btntemplate"><span><i class="fas fa-image"></i> Email Template</span></button>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-12">
            <button class="btndb bg">
                <table align="center">
                <tr>
                    <td>
                        <span><i class="fas fa-arrow-up"></i> Email Terkirim</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        {{ $count }}
                    </td>
                </tr>
            </table>
        </button>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-12">
            <button class="btndb bg">
                <table align="center">
                <tr>
                    <td>
                        <span><i class="fas fa-user"></i> User Terdaftar</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        {{ $users }}
                    </td>
                </tr>
            </table>
        </button>
        </div>
    </div>
@endsection
