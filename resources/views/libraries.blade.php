<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('app.css') }}">
    <style>
        body {
            background-color: black;
            color: white;
        }

        .sidebar {
            background-color: #1a1a2e;
            width: 280px;
            display: flex;
            flex-direction: column;
            overflow: hidden;
            position: relative;
            background-color: #2c2f3f;
        }

        .nav-link img {
            width: 30px;
            height: 30px;
        }

        .logout-btn {
            background-color: red;
            border: none;
            padding: 10px;
            border-radius: 10px;
            font-weight: bold;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #111;
        }

        .topbar button {
            border: none;
            padding: 10px 20px;
            border-radius: 10px;
            font-weight: bold;
        }

        .btn-az {
            background-color: #2e2eff;
            color: white;
        }

        .library-list {
            padding: 20px;
            overflow-y: auto;
            height: calc(100vh - 70px);
        }

        .movie-item {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .movie-item img {
            width: 80px;
            height: 110px;
            object-fit: cover;
            border-radius: 10px;
            margin-right: 15px;
        }

        .movie-info h5 {
            margin: 0;
        }

        .star {
            color: gold;
        }

        .nav-item.active {
            background-color: blue;
            /* biru terang sesuai tombol Edit */
            border-radius: 10px;
            padding-left: 10px;
            padding-right: 10px;
            width: 300px
        }
    </style>
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
        <div class="flex-grow-1 d-flex flex-column">
            <div class="topbar" style="padding-bottom:20px;">
                <div style="margin-top:50px">
                    <button class="bg-dark text-white" style="width:300px;height:60px;">History</button>
                    <button class="btn-az" style="width:300px;height:60px;">A-Z LIST</button>
                </div>
                <div class="d-flex align-items-center gap-3" style="margin-top:60px;">
                    <img src="https://img.icons8.com/ios-glyphs/30/ffffff/appointment-reminders.png"
                        style="width:50px;height:50px" />
                    <img src="https://img.icons8.com/ios-filled/50/ffffff/user.png" width="50" height="50" />
                </div>
            </div>

            <!-- Main Content -->
            <div class="content-area overflow-auto" style="background-color:black; color:white; padding:1rem;">
                <div class="container-fluid px-4">
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
                                                    <img src="{{ asset('images/A.jpg') }}"
                                                        class="img-fluid rounded-start" alt="...">
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body" style="color: white">
                                                    <h5 class="card-title">Card title</h5>
                                                    <p class="card-text">This is a wider card with supporting text
                                                        below.</p>
                                                    <p class="card-text"><small class="text-body-secondary">Last updated
                                                            3 mins ago</small></p>
                                                    <a href="#"
                                                        class="btn btn-sm btn-outline-light mt-2">Lihat</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>

                    <hr>

                    <!-- Kemarin -->
                    <div>
                        <h2><b>Kemarin</b></h2>
                        <div
                            style="background-color:rgb(63, 52, 52); color:white; padding:1rem; border-radius:10px; max-height: 400px; overflow-y: auto;">
                            <div style="display: flex; flex-wrap: wrap; gap: 1rem;">
                                @for ($i = 0; $i < 10; $i++)
                                    <!-- card sama seperti di atas -->
                                @endfor
                            </div>
                        </div>
                    </div>

                    <hr>

                    <!-- Pernah Dilihat -->
                    <div>
                        <h2><b>Pernah Dilihat</b></h2>
                        <div
                            style="background-color:rgb(63, 52, 52); color:white; padding:1rem; border-radius:10px; max-height: 400px; overflow-y: auto;">
                            <div style="display: flex; flex-wrap: wrap; gap: 1rem;">
                                @for ($i = 0; $i < 10; $i++)
                                    <!-- card sama seperti di atas -->
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Bootstrap JS -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
