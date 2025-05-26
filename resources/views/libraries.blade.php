<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('app.css') }}">
</head>

<body>
    <div class="d-flex" style="height: 100vh; overflow: hidden;">
        <!-- Sidebar -->
        <div class="sidebar text-white p-3">
            <a href="#" class="text-white p-3 h1" style="text-decoration:none"><b>FIVOY</b></a>
            <ul class="nav flex-column">
                <li class="nav-item mb-4">
                    <a href="#" class="nav-link text-white d-flex align-items-center">
                        <img src="{{ asset('images/filmm.png') }}" alt="film" width="60" height="60"
                            class="me-2">
                        <h4><b>Film</b></h4>
                    </a>
                </li>
                <li class="nav-item mb-4" style="background-color: blue; border-radius:25px; width:1000px;">
                    <a href="#" class="nav-link text-white d-flex align-items-center">
                        <img src="{{ asset('images/history.png') }}" alt="film" width="60" height="60"
                            class="me-2">
                        <h4><b>Libraries</b></h4>
                    </a>
                </li>
                <li class="nav-item mb-4">
                    <a href="#" class="nav-link text-white d-flex align-items-center">
                        <img src="{{ asset('images/favorites.png') }}" alt="film" width="60" height="60"
                            class="me-2">
                        <h4><b>Favorites</b></h4>
                    </a>
                </li>
                <li class="nav-item mb-4">
                    <a href="#" class="nav-link text-white d-flex align-items-center">
                        <img src="{{ asset('images/account1.png') }}" alt="film" width="60" height="60"
                            class="me-2">
                        <h4><b>Account</b></h4>
                    </a>
                </li>
            </ul>
            <div class="mt-auto">
                <a href="/logout" class="btn btn-danger w-100">Logout</a>
            </div>
        </div>

        <!-- Main Area (navbar + content) -->
        <div class="flex-grow-1 d-flex flex-column overflow-hidden">
            <!-- Top Navbar -->
            <nav class="navbar navbar-dark bg-black px-3">
                <button type="button" class="btn btn-primary btn-lg"
                    style="width:300px; margin-left:50px;">HISTORY</button>
                <button type="button" class="btn btn-secondary btn-lg" style="width:300px">A-Z LIST</button>
                <a href=""><img src="{{ asset('images/account.png') }}" alt="Profile" class="rounded-circle"
                        width="40" height="40"></a>
                <a href=""><img src="{{ asset('images/account.png') }}" alt="Profile" class="rounded-circle"
                        width="40" height="40"></a>
            </nav>
            <!-- Main Content -->
            <div class="content-area overflow-auto ps-5" style="background-color:black; color:white; padding:1rem">
                <div>
                    <h2><b>Hari Ini</b></h2>
                    <div
                        style="background-color:rgb(63, 52, 52); color:white; padding:1rem; border-radius:10px; max-height: 400px; overflow-y: auto;">
                        <div style="display: flex; flex-wrap: wrap; gap: 1rem;">
                            @for ($i = 0; $i < 10; $i++)
                                <div class="card"
                                    style="width: 350px; background-color:rgb(63, 52, 52); border: none;">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <div style="aspect-ratio: 2 / 3; overflow: hidden;">
                                                <img src="{{ asset('images/A.jpg') }}" class="img-fluid rounded-start"
                                                    alt="...">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body" style="color: white">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">This is a wider card with supporting text below.
                                                </p>
                                                <p class="card-text"><small class="text-body-secondary">Last updated 3
                                                        mins ago</small></p>
                                                <a href="#" class="btn btn-sm btn-outline-light mt-2">Lihat</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
                <hr>
                 <div>
                    <h2><b>Kemarin</b></h2>
                    <div
                        style="background-color:rgb(63, 52, 52); color:white; padding:1rem; border-radius:10px; max-height: 400px; overflow-y: auto;">
                        <div style="display: flex; flex-wrap: wrap; gap: 1rem;">
                            @for ($i = 0; $i < 10; $i++)
                                <div class="card"
                                    style="width: 350px; background-color:rgb(63, 52, 52); border: none;">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <div style="aspect-ratio: 2 / 3; overflow: hidden;">
                                                <img src="{{ asset('images/A.jpg') }}" class="img-fluid rounded-start"
                                                    alt="...">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body" style="color: white">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">This is a wider card with supporting text below.
                                                </p>
                                                <p class="card-text"><small class="text-body-secondary">Last updated 3
                                                        mins ago</small></p>
                                                <a href="#" class="btn btn-sm btn-outline-light mt-2">Lihat</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
                <hr>
                 <div>
                    <h2><b>Pernah Dilihat</b></h2>
                    <div
                        style="background-color:rgb(63, 52, 52); color:white; padding:1rem; border-radius:10px; max-height: 400px; overflow-y: auto;">
                        <div style="display: flex; flex-wrap: wrap; gap: 1rem; ">
                            @for ($i = 0; $i < 10; $i++)
                                <div class="card"
                                    style="width: 350px; background-color:rgb(63, 52, 52); border: none;">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <div style="aspect-ratio: 2 / 3; overflow: hidden;">
                                                <img src="{{ asset('images/A.jpg') }}" class="img-fluid rounded-start"
                                                    alt="...">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body" style="color: white">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">This is a wider card with supporting text below.
                                                </p>
                                                <p class="card-text"><small class="text-body-secondary">Last updated 3
                                                        mins ago</small></p>
                                                <a href="#" class="btn btn-sm btn-outline-light mt-2">Lihat</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>

          

            <!-- Bootstrap JS -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
