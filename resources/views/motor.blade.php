@extends("layouts.master")
@section("content")
    <div class="motor__wrapper">
        <div class="motor__card__content">
            <div class="motor__card__top">
                <img src="{{ asset("img/chapchapv.png") }}" alt="">
            </div>
            <div class="motor__card__bottom">
                <h2>Puissance : <span>2.5 KW</span></h2>
                <h2>Vitesse : <span>65 KM</span></h2>
                <h2>Portée : <span>90 KM</span></h2>
                <h2>Temps d'échange : <span>2 - 3 minutes</span></h2>
                <h2>Poids net : <span>92 KG</span></h2>
            </div>
            <div class="motor__card__button">
                <button class="btn btn-xm btn-primary">PLUS</button>
            </div>
        </div>

        <div class="motor__card__content">
            <div class="motor__card__top">
                <img src="{{ asset("img/chapchapv.png") }}" alt="">
            </div>
            <div class="motor__card__bottom">
                <h2>Puissance : <span>2.5 KW</span></h2>
                <h2>Vitesse : <span>65 KM</span></h2>
                <h2>Portée : <span>90 KM</span></h2>
                <h2>Temps d'échange : <span>2-3 minutes</span></h2>
                <h2>Poids net : <span>92 KG</span></h2>
            </div>
            <div class="motor__card__button">
                <button class="btn btn-xm btn-primary">PLUS</button>
            </div>
        </div>
    </div>
    <div class="table__wrapper">
        <h3 class="main__title">
            Clients
        </h3>
        <div class="table__container">
            <table>
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prénoms</th>
                        <th>Téléphone</th>
                        <th>Adresse</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Kakpo</td>
                        <td>Brice</td>
                        <td>229689547</td>
                        <td>Cotonou</td>
                        <td>Active</td>
                        <td><button class="btn btn-sm btn-primary">Edit</button></td>
                    </tr>
                    <tr>
                        <td>Kakpo</td>
                        <td>Brice</td>
                        <td>229689547</td>
                        <td>Cotonou</td>
                        <td>Active</td>
                        <td><button class="btn btn-sm btn-primary">Edit</button></td>
                    </tr>
                    <tr>
                        <td>Kakpo</td>
                        <td>Brice</td>
                        <td>229689547</td>
                        <td>Cotonou</td>
                        <td>Active</td>
                        <td><button class="btn btn-sm btn-primary">Edit</button></td>
                    </tr>
                    <tr>
                        <td>Kakpo</td>
                        <td>Brice</td>
                        <td>229689547</td>
                        <td>Cotonou</td>
                        <td>Active</td>
                        <td><button class="btn btn-sm btn-primary">Edit</button></td>
                    </tr>
                    <tr>
                        <td>Kakpo</td>
                        <td>Brice</td>
                        <td>229689547</td>
                        <td>Cotonou</td>
                        <td>Active</td>
                        <td><button class="btn btn-sm btn-primary">Edit</button></td>
                    </tr>
                    <tr>
                        <td>Kakpo</td>
                        <td>Brice</td>
                        <td>229689547</td>
                        <td>Cotonou</td>
                        <td>Active</td>
                        <td><button class="btn btn-sm btn-primary">Edit</button></td>
                    </tr>
                    <tr>
                        <td>Kakpo</td>
                        <td>Brice</td>
                        <td>229689547</td>
                        <td>Cotonou</td>
                        <td>Active</td>
                        <td><button class="btn btn-sm btn-primary">Edit</button></td>
                    </tr>
                    <tr>
                        <td>Kakpo</td>
                        <td>Brice</td>
                        <td>229689547</td>
                        <td>Cotonou</td>
                        <td>Active</td>
                        <td><button class="btn btn-sm btn-primary">Edit</button></td>
                    </tr>
                    <tr>
                        <td>Kakpo</td>
                        <td>Brice</td>
                        <td>229689547</td>
                        <td>Cotonou</td>
                        <td>Active</td>
                        <td><button class="btn btn-sm btn-primary">Edit</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
@endsection