@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tarjeta</div>

                <div class="card-body">
                    <div class="container">
                    <a class="btn btn-primary" href="{{route('directory')}}">Directorio</a>
                        <section class="mx-auto my-5" style="max-width: 23rem;">
                            
                            <div class="card map-card">

                            <div class="card-body closed px-0">
                            
                                <div class="bg-white px-4 pb-4 pt-3-5">
                                <h5 class="card-title h5 living-coral-text">{{ $card->name }}</h5>
                                <div class="d-flex justify-content-between living-coral-text">
                                    <h6 class="card-subtitle font-weight-light">{{ $card->category->name }}</h6>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between pt-2 mt-1 text-center text-uppercase living-coral-text">
                                    Información
                                </div>
                                <hr>
                                <table class="table table-borderless">
                                    <tbody>
                                    <tr>
                                        <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="fas fa-map-marker-alt living-coral-text"></i>
                                        </th>
                                        <td class="pb-3 pt-2">{{ $card->address }} - {{ $card->city->name }}</td>
                                    </tr>
                                    <tr class="mt-2">
                                        <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="far fa-clock living-coral-text"></i>
                                        </th>
                                        <td class="pb-3 pt-2"><span class="deep-purple-text me-2"> Abierto desde </span> {{ $card->start }} - {{ $card->end }}</td>
                                    </tr>
                                    <tr class="mt-2">
                                        <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="fas fa-phone living-coral-text"></i>
                                        </th>
                                        <td class="pb-3 pt-2">Telefono: {{ $card->phone }} - {{ $card->movil }}</td>
                                        
                                    </tr>
                                    <tr class="mt-2">
                                        <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="fas fa-info-circle living-coral-text"></i>
                                        </th>
                                        <td class="pb-3 pt-2">{{ $card->description }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                            </div>
                            
                        </section>
                        </div>
                        
                    </div>
                    
            </div>
        </div>
    </div>
</div>
@endsection