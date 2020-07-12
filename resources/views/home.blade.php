@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Busqueda de comercio</div>
                   
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <form method="GET" action="{{ route('home') }}">
                            @csrf
                            <input class="form-control" type="text" name="commerce" placeholder="Comercio" value="{{ old('commerce') }}">
                            
                            
                            <select class="custom-select" name="category"  value="{{ old('category') }}">
                                <option disabled selected>Selecciona una Categoría</option>
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select> 
                            
                            
                            <select class="custom-select" name="departament" value="{{ old('departament') }}">
                                <option disabled selected>Selecciona un Municipio</option>
                                @foreach ($departaments as $departament)
                                <option value="{{ $departament->id }}">{{ $departament->name }}</option>
                                @endforeach
                            </select>

                            <button class="btn btn-success mt-2 float-right" type="submit" name="buscar">Buscar</button>
                            
                        </form>


                </div>
               
            </div>
            <div>
                <table class="table table-dark mt-4">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($comercio as $item)
                          <tr>
                          <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->name }}</td>
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
@endsection
