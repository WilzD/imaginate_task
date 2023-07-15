<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="{{url('/')}}">Ecommerce Site</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto">
        <a class="nav-link active" aria-current="page" href="/">Home</a>
        <a class="nav-link" href="{{url('category')}}">Category</a>
        <a class="nav-link" href="{{url('cart')}}">Cart</a>
        
        <a class="nav-link" href="{{url('login')}}">Login</a>
        <a class="nav-link" href="{{url('register')}}">Register</a>

      </div>
    </div>
  </div>
</nav>