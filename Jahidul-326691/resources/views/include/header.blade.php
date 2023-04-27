<nav class="navbar navbar-expand-lg navbar-light bg-dark navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">LOOGOO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('home') }}">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('productAdd') }}">Add Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('category') }}">Add Category</a>
                </li>

            </ul>

        </div>
    </div>
</nav>
