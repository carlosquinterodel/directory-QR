@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="row">

            <div class="col-md-12">
            <div class="text-right">

            </div>
           
                <table>
                    <tr>
                        <th><h4>Directorio</h4></th>
                        <div class="text-right ">
                            <a href="{{ route('home') }}" class="btn btn-primary active" role="button" data-bs-toggle="button" aria-pressed="true">Inicio</a>
                        </div>
                        
                    </tr>
                    <tr>
                        @foreach ( $cards as $card)
                        <tr>
                            <td>
                                <div class="card" >
                                    <div class="row">
                                        <div class="col-md-3">
                                        <img src="{{ asset($card->path) }}" class="img-fluid rounded-start" alt="...">
                                        </div>
                                        <div>
                                            <div class="card-body">
                                                <h5 class="card-title">{{$card->name}}</h5>
                                                <p class="card-text">{{$card->category->name}}</p>
                                                <p class="card-text"><b>{{$card->city->name}}</b></p>
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