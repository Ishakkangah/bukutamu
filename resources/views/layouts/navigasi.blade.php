<nav class="navbar navbar-expand-lg navbar-light shadow-sm   bg-white">
    <div class="container">
        <a class="navbar-brand" href="/"><img src="{{ asset('img/kominfo.png') }}" alt="Kominfo Oki"
                width="250em"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="container">
                <ul class="navbar-nav mr-auto">
                    {{-- disini bisa dimasukan link terserah anda --}}
                </ul>
                <form class="form-inline my-2 my-lg-0" action="{{ asset('cari') }}" method="get">
                    <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Cari.."
                        aria-label="Search">
                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit"><i
                            class="bi bi-search-heart"></i>Search</button>
                </form>
            </div>
        </div>
    </div>
</nav>
