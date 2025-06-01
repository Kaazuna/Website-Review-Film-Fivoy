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
                        <img src="{{ asset('images/Setting.png') }}" alt="film" width="60" height="60"
                            class="me-2">
                        <h4><b>Manage Film</b></h4>
                    </a>
                </li>
                <li class="nav-item mb-4">
                    <a href="#" class="nav-link text-white d-flex align-items-center">
                        <img src="{{ asset('images/alert.png') }}" alt="film" width="60" height="60"
                            class="me-2">
                        <h4><b>Report</b></h4>
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
            <nav class="navbar px-3" style="background-color: rgb(63, 51, 51)">
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
            <div class="bg-black text-white px-5 pb-5" style="max-height: 90vh; overflow-y: auto;">
                <div class="d-flex justify-content-center my-4">
                    <button class="btn btn-primary btn-sm" style=" width: 500px; height:50px;"><h3>+ Tambah Film</h3></button>
                </div>
                <div class="d-flex flex-wrap gap-4">
                    @for ($i = 0; $i < 12; $i++)
                        <div class="d-flex bg-dark rounded p-2" style="width: 23%; min-width: 250px;">
                            <img src="{{ asset('images/A.jpg') }}" alt="Poster"
                                style="width: 100px; height: 150px; object-fit: cover; border-radius: 5px;">
                            <div class="ms-3 d-flex flex-column justify-content-between">
                                <div>
                                    <h6 class="mb-2 text-white">Captain America: Civil War</h6>
                                </div>
                                <div class="d-flex flex-column gap-1">
                                    <button class="btn btn-primary btn-sm">Edit</button>
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>


            <!-- Bootstrap JS -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
