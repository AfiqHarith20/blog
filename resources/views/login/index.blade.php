@extends("layouts.main")

@section('container')

  <main class="form-signin w-100 m-auto">

@if(session()-> has('success'))
  <div class="alert alert-success" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

    <form>
      <h1 class="h3 mb-3 fw-normal">Please Sign In</h1>
  
      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
      
    </form>
    <small class="d-block mt-3">Not Registered ? <a href="/register">Register Now!</a></small>
  </main>
@endsection