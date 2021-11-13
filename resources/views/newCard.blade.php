@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Crear Tarjeta</div>

                <div class="card-body">
                <form class="row g-3" form method="POST" action="{{ route('saveCard') }}">
                    @csrf
                    <div class="col-md-12">
                        <label class="form-label">Nombre Empresa</label>
                        <input type="text" class="form-control @error('nombre') is-invalid @enderror" name="name" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>
                        @error('nombre')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Nit</label>
                        <input type="text" class="form-control @error('nit') is-invalid @enderror" name="nit" value="{{ old('nit') }}" required autocomplete="nit" autofocus>
                        @error('nit')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Dirección</label>
                        <input type="direccion" class="form-control @error('direccion') is-invalid @enderror" name="direccion" value="{{ old('direccion') }}" required autocomplete="direccion">
                        @error('direccion')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label class="form-label">Telefono</label>
                        <input type="number" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ old('telefono') }}" required autocomplete="telefono">
                    </div>
                    <div class="col-6">
                        <label class="form-label">Celular</label>
                        <input type="number" class="form-control @error('celular') is-invalid @enderror" name="celular" value="{{ old('celular') }}" required autocomplete="celular" autofocus>
                        @error('celular')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label class="form-label">Ciudad</label>
                        <select class="form-control @error('ciudad') is-invalid @enderror" name="ciudad">
                            <option value="">Seleccione ...</option>
                            @foreach( $cities as $city)
                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                            @endforeach
                        </select>
                        @error('ciudad')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Categoria</label>
                        <select class="form-control @error('categoria') is-invalid @enderror" name="categoria">
                            <option value="">Seleccione ...</option>
                            @foreach( $categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('categoria')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Horario Apertura</label>
                        <input type="time" class="form-control @error('apertura') is-invalid @enderror" name="apertura" required autocomplete="apertura">
                        @error('apertura')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Horario Cierre</label>
                        <input type="time" class="form-control @error('cierre') is-invalid @enderror" name="cierre" required autocomplete="cierre">
                        @error('cierre')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Descripción</label>
                        <textarea class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" required autocomplete="descripcion"></textarea>
                        @error('cierre')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    
                    <div class="col-12 py-3 text-right">
                        <button type="submit" class="btn btn-primary">Crear</button>
                        <a type="button" href="{{ route('profile') }}" class="btn btn-danger">Cancelar</a>
                    </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
