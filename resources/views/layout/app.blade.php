<html>
<head>
    <title>{{ $title ?? 'Page Title'}}</title>
<style>
    .form-signin {
    max-width: 330px;
    padding: 1rem;
    }

    .form-signin .form-floating:focus-within {
    z-index: 2;
    }
    /*
    .form-signin input[type="email"] {
    margin-bottom: -1px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
    }
    */
    .form-signin input[id="pass"] {
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    }
</style>
    @livewireStyles
</head>
<body class="d-flex align-items-center py-4 bg-body-tertiary"> 
 <main class="form-signin w-100 m-auto">
   @yield('content')

 </main>
    @livewireScripts
</body>
</html>
