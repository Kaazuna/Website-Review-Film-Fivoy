<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('app.css') }}">
    <style>
        .sidebar {
            background-color: #1a1a2e;
            width: 280px;
            display: flex;
            flex-direction: column;
        }
        
        .profile-section {
            background-color: #f8f9fa;
            border-radius: 15px;
            padding: 20px;
            margin: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        
        .profile-header {
            display: flex;
            align-items: flex-start; 
            margin-bottom: 5px;
        }
        
        .profile-info-container {
            display: flex;
            flex-direction: column;
            margin-left: 20px;
        }
        
        .profile-pic {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
        }
        
        .profile-actions {
            margin-top: 5px;
        }
        
        .profile-details {
            margin-top: 25px;
        }
        
        .detail-item {
            margin-bottom: 10px;
            padding-bottom: 10px;
            border-bottom: 1px solid #eaeaea;
        }
        
        .username {
            margin-bottom: 5px;
        }
        
        /* Added style for active menu item */
        .nav-item.active {
            background-color: blue; 
            border-radius: 25px;
            width: 1000px;
        }
    </style>
</head>

<body>
    <div class="d-flex" style="height: 100vh; overflow: hidden;">
        <!-- Sidebar -->
        <div class="sidebar text-white p-3" style="background-color:#343a40">
            <a href="#" class="text-white p-3 h1" style="text-decoration:none"><b>FIVOY</b></a>
            <ul class="nav flex-column">
                <li class="nav-item mb-4">
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
                <li class="nav-item mb-4 active"> <!-- Added 'active' class here -->
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
        <div class="flex-grow-1 d-flex flex-column overflow-hidden" style="background-color:black">
            <!-- Top Navbar -->
            <nav class="navbar navbar-dark bg-black px-3">
                <form class="d-flex flex-grow-1 me-3" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search..." aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
                <a href=""><img src="{{ asset('images/account.png') }}" alt="Profile" class="rounded-circle"
                        width="40" height="40"></a>
            </nav>

            <!-- Main Content -->
            <div class="flex-grow-1 overflow-auto p-4">
                <div class="profile-section">
                    <!-- Profile Header -->
                    <div class="profile-header">
                        <img src="{{ asset('images/account.png') }}" alt="Profile" class="profile-pic">
                        <div class="profile-info-container">
                            <h2 class="username">zakwanterangbulan03</h2>
                            <!-- Profile Actions -->
                            <div class="profile-actions">
                                <button class="btn btn-primary" style="background-color:#3000f0;width:170px">Edit Nama</button>
                                <button class="btn btn-primary" style="background-color:#3000f0;width:170px">Edit Foto Profile</button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Profile Details -->
                    <div class="profile-details">
                        <h5 class="mb-3">Gender</h5>
                        <div class="detail-item">
                            <p class="mb-1">Laki Laki</p>
                        </div>
                        
                        <h5 class="mb-3 mt-4">Alamat</h5>
                        <div class="detail-item">
                            <p class="mb-1">Mendalo city, jl ihsyam no 102</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>