<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('app.css') }}">
</head>

<body>

    <div class="content-wrapper" style="overflow-y: auto; height: 100vh;">

        <!-- Main Area (navbar + content) -->
        <div class="flex-grow-1 d-flex flex-column overflow-hidden">
            <!-- Top Navbar -->
            <nav class="navbar navbar-dark bg-black px-3">
                <a href="#" class="text-white p-3 h1" style="text-decoration:none"><b>FIVOY</b></a>
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
            <div class="d-flex flex-column gap-3 px-3 pb-3 bg-black text-white">
                <div class="d-flex mt-5 overflow-hidden" style="padding-left:50px">
                    <img src="{{ asset('images/A.jpg') }}" alt="" width="200px" height="300px"
                        style="border-radius: 20px">
                    <div class="p-3">
                        <h5>Captain America: Civil War</h5>
                        <div class="rating d-flex align-items-center">
                            <i class="fas fa-star text-warning"></i>
                            <span class="ms-2">9,5</span>
                            <button class="btn btn-primary ms-4" type="button">
                                + Add to Favorite
                            </button>
                        </div>

                        <div class="genre d-flex flex-wrap">
                            <button class="btn btn-secondary mt-3 m-1" type="button">Romance</button>
                            <button class="btn btn-secondary mt-3 m-1" type="button">Slice of Life</button>
                            <button class="btn btn-secondary mt-3 m-1" type="button">School</button>
                        </div>

                        <div class="mt-5">
                            <p><strong>Sinopsis:</strong> <br>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum quia pariatur
                                laudantium. Fugiat ipsum officia, cumque nam deserunt harum nobis vero similique
                                dignissimos minima illum ducimus, in dolore. Perferendis, asperiores. Lorem ipsum, dolor
                                sit amet consectetur adipisicing elit. Officiis similique, expedita repudiandae quaerat
                                itaque nulla veniam ad, alias voluptatibus perferendis temporibus tenetur reiciendis
                                inventore quis molestias quisquam quos, accusantium assumenda.
                            </p>
                            <p><strong>Creators:</strong> <br>Alif. Azka, Nabil</p>
                            <p><strong>Stars:</strong> <br>Alya</p>
                        </div>
                    </div>
                </div>

                <hr class="text-white">

                <!-- Bagian Komentar -->
                <div class="px-5">
                    <h3 class="text-white">Comments</h3>

                    <!-- Input Komentar -->
                    <div class="mb-3 d-flex align-items-center gap-2">
                        <textarea class="form-control" id="commentInput" rows="1" style="width: 500px" placeholder="Tulis komentarmu di sini..."></textarea>
                        <button class="btn btn-success mt-2" type="button" style="height: 40px;">Kirim</button>
                    </div>

                    <!-- Daftar Komentar -->
                    <div class="mt-4">
                        <div class="border rounded p-3 mb-2 bg-dark text-white">
                            <strong>Azka</strong><br>
                            Film ini keren banget!
                        </div>
                        <div class="border rounded p-3 mb-2 bg-dark text-white">
                            <strong>Nabil</strong><br>
                            Suka banget sama plot twist-nya.
                        </div>
                        <div class="border rounded p-3 mb-2 bg-dark text-white">
                            <strong>Alya</strong><br>
                            Mantap!! Rekomended.
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
