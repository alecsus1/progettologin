<html>
<head>
    <title>@yield('title')</title>
<!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->
@vite(['resources/sass/app.scss', 'resources/js/app.js'])
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
</head>
<body class="d-flex align-items-center py-4 bg-body-tertiary"> 
 <main class="form-signin w-100 m-auto">
@yield('content')

 </main>
</body>
</html>
