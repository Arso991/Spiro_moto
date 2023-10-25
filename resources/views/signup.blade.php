@extends("layouts.master-register")
@section("title", "Signup")
@section("methode", "Inscription")
@section("form")
    <form action="{{ route("registerStore") }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if (session('message'))
            <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                <strong>Enrégistrement effectué !</strong> <br> L'étudiant a bien été enrégistré dans la liste de l'école229
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <ul>
                    @foreach ($errors->all() as $error )
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
            <input type="text" value="{{ old("lastName") }}" name="lastName" class="form-control" placeholder="Nom" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
            <input type="text" value="{{ old("firstName") }}" name="firstName" class="form-control" placeholder="Prénom" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
            <input type="text" value="{{ old("email") }}" name="email" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1">
        </div> 
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-camera"></i></span>
            <input type="file" class="form-control" name="picture" placeholder="Photo" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>
            <input type="password" class="form-control" name="password" placeholder="Mot de passe" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>
            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirmez mot de passe" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="submit__btn">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
            <h3>Se connecter <span><a href="{{ route("signIn") }}">ici</a></span></h3>
        </div>
    </form>
@endsection