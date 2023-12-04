@extends('layout')
@section('title','ProgettoLogin')
@section('content')
@if ($errors->has('email'))
    <div>
        <div>Ci sono degli errori</div>
        <ul>
            @foreach ($errors->all() as $e)
            <li>{{$e}}</li>
            @endforeach
        </ul>
    </div>
@endif   

  <form action="/login" method="POST" >
     @csrf
  
    <h1 class="h3 mb-3 fw-normal">Inserisci le tue credenziali</h1>
    <div class="form-floating">
      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Indirizzo email</label>
  
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control @error('email') is-invalid @enderror" id="pass" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
  
    <button class="btn btn-primary w-100 py-2" type="submit">Accedi</button>
    <p class="mt-5 mb-3 text-body-secondary"></p>
  </form>
  <a class="nav-link fw-bold py-1 px-0" href="/home">Torna alla Home</a>

@endsection
  

