@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                   
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <form method="GET" action="{{ route('home') }}">
                            @csrf
                            <input type="text" name="commerce" placeholder="Comercio">
                            
                            
                            <select name="category" id="">
                                <option value="">Ninguno</option>
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select> 
                            
                            
                            <select name="departament" id="">
                                <option value="">Ninguno</option>
                                @foreach ($departaments as $departament)
                                <option value="{{ $departament->id }}" >{{ $departament->name }}</option>
                                @endforeach
                            </select>

                            <button type="submit">Buscar</button>
                            
                        </form>


                </div>
               
            </div>
            <div>
                <ul>
                    @foreach ($commerio as $item) 
                    <li>{{$item->name}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
