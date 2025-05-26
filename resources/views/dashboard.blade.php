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
                <li class="nav-item mb-4" style="background-color: blue; border-radius:25px; width:1000px;">
                    <a href="#" class="nav-link text-white d-flex align-items-center">
                        <img src="{{ asset('images/filmm.png') }}" alt="film" width="60" height="60"
                            class="me-2">
                        <h4><b>Film</b></h4>
                    </a>
                </li>
                <li class="nav-item mb-4">
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
                <form class="d-flex flex-grow-1 me-3" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search..." aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
                <a href=""><img src="{{ asset('images/account.png') }}" alt="Profile" class="rounded-circle"
                        width="40" height="40"></a>
                <a href=""><img src="{{ asset('images/account.png') }}" alt="Profile" class="rounded-circle"
                        width="40" height="40"></a>
            </nav>

            <!-- Main Content -->
            <div class="content-area overflow-auto ps-5" style="background-color:black; color:white; padding:1rem">
                <div class="d-flex justify-content-between align-items-center">
                    <h2><b>Popular Films</b></h2>
                    <a href="#" class="btn btn-outline-light btn-sm">See All</a>
                </div>
                <div class="d-flex gap-3 overflow-auto pb-3">
                    @for ($i = 0; $i < 10; $i++)
                        <a href="#" class="text-decoration-none">
                            <div class="card bg-dark border-0" style="width: 240px;">
                                <div class="ratio" style="--bs-aspect-ratio: 50%;">
                                    <img src="{{ asset('images/A.jpg') }}" class="card-img-top"
                                        style="object-fit: cover;">
                                </div>
                                <div class="card-body text-white p-2">
                                    <small>{{ $i % 2 == 0 ? 'Seporsi Mie Ayam Sebelum Mati' : 'Lorem ipsum dolor sit amet' }}</small>
                                </div>
                            </div>
                        </a>
                    @endfor
                </div>

                <hr>
                <div class="d-flex justify-content-between align-items-center">
                    <h2><b>Recommended For You</b></h2>
                    <a href="#" class="btn btn-outline-light btn-sm">See All</a>
                </div>
                <div class="d-flex gap-3 overflow-auto pb-3">
                    @for ($i = 0; $i < 10; $i++)
                        <a href="#" class="text-decoration-none">
                            <div class="card bg-dark border-0" style="width: 240px;">
                                <div class="ratio" style="--bs-aspect-ratio: 50%;">
                                    <img src="{{ asset('images/A.jpg') }}" class="card-img-top"
                                        style="object-fit: cover;">
                                </div>
                                <div class="card-body text-white p-2">
                                    <small>{{ $i % 2 == 0 ? 'Seporsi Mie Ayam Sebelum Mati' : 'Lorem ipsum dolor sit amet' }}</small>
                                </div>
                            </div>
                        </a>
                    @endfor
                </div>

                <hr>
                <div class="d-flex justify-content-between align-items-center">
                    <h2><b>Horror Movies</b></h2>
                    <a href="#" class="btn btn-outline-light btn-sm">See All</a>
                </div>
                <div class="d-flex gap-3 overflow-auto pb-3">
                    @for ($i = 0; $i < 10; $i++)
                        <a href="#" class="text-decoration-none">
                            <div class="card bg-dark border-0" style="width: 240px;">
                                <div class="ratio" style="--bs-aspect-ratio: 50%;">
                                    <img src="{{ asset('images/A.jpg') }}" class="card-img-top"
                                        style="object-fit: cover;">
                                </div>
                                <div class="card-body text-white p-2">
                                    <small>{{ $i % 2 == 0 ? 'Seporsi Mie Ayam Sebelum Mati' : 'Lorem ipsum dolor sit amet' }}</small>
                                </div>
                            </div>
                        </a>
                    @endfor
                </div>

            </div>
        </div>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
