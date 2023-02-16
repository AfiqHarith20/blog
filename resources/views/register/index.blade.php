@extends("layouts.main")

@section('container')

<main class="form-registration w-100 m-auto">
    <form>
      
      <h1 class="h3 mb-3 fw-normal">Register New User</h1>
  
      <div class="form-floating">
        <input type="text" name="name" class="form-control" id="name" placeholder="Name">
        <label for="name">Name</label>
      </div>
      <div class="form-floating">
        <input type="username" name="username" class="form-control" id="username" placeholder="Username">
        <label for="username">Username</label>
      </div>
      <div class="form-floating">
        <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
        <label for="email">Email</label>
      </div>
      <div class="form-floating">
        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
      
    </form>
    <small class="d-block mt-3">Already Register ? <a href="/login">Sign In Now!</a></small>
  </main>
@endsection