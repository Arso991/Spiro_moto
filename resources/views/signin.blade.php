@extends("layouts.master-register")
@section("title", "Signin")
@section("methode", "Connexion")
@section("form")
    <form action="{{ route("authentificate") }}" method="POST">
        @csrf
        @if (session('error'))
            <div class="alert alert-dabger alert-dismissible fade show text-center" role="alert">
                <strong>Message !</strong> <br> {{ session("error") }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
            <input type="text" value="{{ old("email") }}" name="email" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1">
        </div> 
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>
            <input type="password" name="password" class="form-control" placeholder="Mot de passe" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="submit__btn">
            <button class="btn btn-primary">Se connecter</button>
            <h3>S'inscrire <span><a href="{{ route("signUp") }}">ici</a></span></h3>
        </div>
    </form>
@endsection