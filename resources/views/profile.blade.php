@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="row">
            <div class="col-md-6">
                <div>
                    <a href="{{ route('newCard') }}" class="btn btn-primary active" role="button" data-bs-toggle="button" aria-pressed="true">Crear Tarjeta</a>
                </div>
                <br>
                <div class="card" style="width: 18rem;">
                <img src="{{ asset('images/logos/profile.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3 class="card-title">{{ Auth::user()->name }} {{ Auth::user()->last_name }}</h3>
                </div>
                </div>
            </div>
            <div class="col-md-6">
                <table>
                    <tr>
                        <th><h4>Mis Tarjetas</h4></th>
                    </tr>
                    <tr>
                        @foreach ( $cards as $card)
                        <tr>
                            <td>
                                <div class="card" >
                                    <div class="row g-0">
                                        <div class="col-md-6">
                                        <img src="{{ asset($card->path) }}" class="img-fluid rounded-start" alt="...">
                                        </div>
                                        <div class="col-md-5">
                                        <div class="card-body">
                                            <h5 class="card-title">{{$card->name}}</h5>
                                            <p class="card-text">{{$card->category->name}}</p>
                                            <p class="card-text"><b>{{$card->city->name}}</b></p>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{route('viewCard', $card->id)}}" class="btn btn-success">Ver</a>
                                            <a href="{{route('editCard', $card->id)}}" class="btn btn-warning">Editar</a>
                                            <a href="{{route('deleteCard', $card->id)}}" class="btn btn-danger">Eliminar</a>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                          </tr>  
                        @endforeach
                        
                    </tr>
                </table>
                
            </div>
        </div>  
    </div>
</div>
@endsection
