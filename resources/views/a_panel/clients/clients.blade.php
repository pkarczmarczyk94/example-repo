@extends('a_panel')

@section('content')

<div class="container">


<div class="row mt-5">
    <div class="col-12">
        <p class="fs-3">Klienci</p>
    </div>
</div>

<div class="row mt-2">

    <div class="col-4">
        <div class="first-element">
            <div class="row">
                <div class="col-6">
                    <h4>Total</h4>
                    <strong>{{ $allClients }}</strong>
                </div>
                <div class="col-6">
                    <i class="fa fa-send-o fa-3x"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="col-4">
        <div class="first-element">
            <div class="row">
                <div class="col-6">
                    <h4>Ten tydzień</h4>
                    <strong>{{ $weekClients }}</strong>
                </div>
                <div class="col-6">
                    <i class="fa fa-send-o fa-3x"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="col-4">
        <div class="first-element">
            <div class="row">
                <div class="col-6">
                    <h4>Ten miesiąc</h4>
                    <strong>{{ $monthClients }}</strong>
                </div>
                <div class="col-6">
                    <i class="fa fa-send-o fa-3x"></i>
                </div>
            </div>
        </div>
    </div>

</div>


    <div class="row mt-5">

        <div class="col-12">
            <h4>Lista klientów</h4>
            <div class="second-element">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Imie</th>
                    <th scope="col">Nazwisko</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefon</th>
                    <th scope="col">Profil</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clientsList as $client)
                    <tr>
                    <th scope="row">{{ $client->id }}</th>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->surname }}</td>
                    <td>{{ $client->email }}</td>
                    <td>{{ $client->phone }}</td>
                    <td><a href="{{ URL::to('/a_clients' , [$client->id] )}}"><button type="button" class="btn btn-info">Edytuj</button></a>
                        <a href="{{ URL::to('/a_clients_archive' , [$client->id] )}}"><button type="button" class="btn btn-warning">Archiwizuj</button></a>
                    </td>   
                    </tr>
                    @endforeach
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>

@endsection('content')