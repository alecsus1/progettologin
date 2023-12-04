@extends('layout2')
@section('title','ProgettoLogin')
@section('content')
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
    <h3 class="float-md-start mb-0"></h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        @auth
        <a class="nav-link fw-bold py-1 px-0 active" aria-current="page" href="#">Home</a>
        @else
        <a class="nav-link fw-bold py-1 px-0 active" aria-current="page" href="#">Home</a>
        <a class="nav-link fw-bold py-1 px-0" href="/register">Registrati</a>
        <a class="nav-link fw-bold py-1 px-0" href="/login">Accedi</a>
        @endauth
      </nav>
    </div>
  </header>

  <main class="px-3">
    <h1>Benvenuti nel mio sito</h1>
    @auth
    <p class="lead">Ciao {{auth()->user()->name}}</p>
    <p class="lead">
      <a href="/logout" class="btn btn-lg btn-light fw-bold border-white bg-white">Esci</a>
    </p>
    @endauth
  </main>
  <footer class="mt-auto text-white-50">
  </footer>
</div>

@endsection

