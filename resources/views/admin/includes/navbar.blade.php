
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid ms-5">
        <a class="navbar-brand " href="#" >DashBoard</a>
        <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            </ul>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="http://127.0.0.1:8000/admin">Home</a>
                </li>
            </li>
            <a class="nav-link" href="../">eCommerce</a>
            </li>
            <li class="nav-item ">
            <a class="nav-link" href="{{route('products.index')}}">Products</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{route('categories.index')}}">Categories</a>
                </li>

            <li class="nav-item me-5">
            <a class="nav-link" href="{{route('users.index')}}">Users</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>

