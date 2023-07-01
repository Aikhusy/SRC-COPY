<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand fs-3 me-4 text-uppercase" href="#">toko madura</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-4">
                <li class="nav-item">
                    <a class="nav-link {{ ($active === "product") ? 'active' : '' }} material-symbols-rounded" aria-current="page" href="{{ route('produk.display') }}">box</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active === "order") ? 'active' : '' }} material-symbols-rounded" href="{{route('invoice.show')}}">receipt_long</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active === "cart") ? 'active' : '' }} material-symbols-rounded" href="{{route('produk.shoppingCart')}}">shopping_cart</a>
                </li>
            </ul>
            <div class="row">
                <span class="col col-sm-2">
                    <a class=" btn btn-danger material-symbols-rounded text-white mx-2"
                    href="{{ route('landingPage') }}">logout</a>
                </span>
                <form class="col d-flex" role="search" method="GET" action="{{ route('search', $active) }}">
                    <input class="form-control ms-2" type="search" placeholder="Search.." aria-label="Search"
                        name="search" value="{{ request('search') }}">
                    <button class="btn btn-outline-success material-symbols-rounded" type="submit">search</button>
                </form>
            </div>
        </div>
    </div>
</nav>
