<nav class="navbar navbar-expand-lg bg-body-tertiary ms-auto">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{asset('assets')}}//image/logo.avif" class="img-fluid" style="height: 80px" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mb-2 mb-lg-0 ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('product') }}">Product</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Product Category
                    </a>
                    <ul class="dropdown-menu">
                        @foreach($categories as $category)
                        <li><a class="dropdown-item" href="{{route('category',['id'=>$category['id']])}}">{{$category['category_name']}}</a></li>
                        @endforeach


                    </ul>
                </li>

            </ul>

        </div>
    </div>
</nav>
