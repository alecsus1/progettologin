@extends('layout')
@section('title','ProgettoLogin')
@section('content')
@if ($errors->any())
    <div>
        <div>Ci sono degli errori</div>
        <ul>
            @foreach ($errors->all() as $e)
            <li>{{$e}}</li>
            @endforeach
        </ul>
    </div>
@endif    

<form action="/register" method="POST">
    @csrf
    <h1 class="h3 mb-3 fw-normal">Registrazione</h1>
    <div class="form-floating">
      <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="floatingInput">
      <label for="floatingInput">Nome</label>
    </div>
    <div class="form-floating">
      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingEmail">
      <label for="floatingEmail">Email</label>
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="floatingPassword">
      <label for="floatingPassword">Password</label>
    </div>
    <div class="form-floating">
      <input type="password" name="password_confirmation" class="form-control @error('password') is-invalid @enderror" id="pass">
      <label for="floatingConfirmPassword">Conferma Password</label>
    </div>
    <button class="btn btn-primary w-100 py-2" type="submit">Registra</button>
    
</form>
<a class="nav-link fw-bold py-1 px-0" href="/home">Torna alla Home</a>
@endsection
<!-- <div>
    <label for="name">Nome</label>
    <input type="text" name="name" id="name">
</div>
<div>
    <label for="email">Email</label>
    <input type="email" name="email" id="email">
</div>
<div>
    <label for="password">Password</label>
    <input type="password" name="password" id="password">
</div>
<div>
    <label for="password_confirmation">Conferma Password</label>
    <input type="password" name="password_confirmation" id="password_confirmation">
</div>
<div> -->
    