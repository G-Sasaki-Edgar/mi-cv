<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinepolis - Cartelera</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-color: #0b0f19;
            color: #ffffff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .navbar {
            background-color: #1a2332 !important;
        }
        .carousel-item {
            height: 450px;
        }
        .carousel-item img {
            object-fit: cover;
            height: 100%;
            filter: brightness(60%);
        }
        .movie-card {
            background-color: #1a2332;
            border: none;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .movie-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 123, 255, 0.2);
        }
        .movie-card img {
            height: 400px;
            object-fit: cover;
        }
        .badge-genre {
            background-color: #0d6efd;
            font-size: 0.75rem;
        }
        .btn-buy {
            background-color: #ffc107;
            color: #0b0f19;
            font-weight: 600;
        }
        .btn-buy:hover {
            background-color: #ffca2c;
            color: #0b0f19;
        }
        footer {
            background-color: #070a10;
            padding: 2rem 0;
            margin-top: 4rem;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold text-uppercase text-warning" href="#"><i class="fas fa-film me-2"></i>CineStar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">Cartelera</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Próximamente</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Promociones</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="cineCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#cineCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#cineCarousel" data-bs-slide-to="1"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://picsum.photos/1200/500?random=1" class="d-block w-100" alt="Estreno 1">
                <div class="carousel-caption d-none d-md-block text-start">
                    <h2 class="display-4 fw-bold">¡Estreno de la Semana!</h2>
                    <p class="lead">No te pierdas la película más esperada del año en la mejor resolución.</p>
                    <a href="#" class="btn btn-warning btn-lg fw-bold">Comprar Boletos</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://picsum.photos/1200/500?random=2" class="d-block w-100" alt="Estreno 2">
                <div class="carousel-caption d-none d-md-block text-start">
                    <h2 class="display-4 fw-bold">Vuelven los Clásicos</h2>
                    <p class="lead">Disfruta de funciones especiales los fines de semana.</p>
                    <a href="#" class="btn btn-primary btn-lg fw-bold">Ver Horarios</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#cineCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#cineCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-bold"><i class="fas fa-ticket-alt text-warning me-2"></i>Películas en Cartelera</h3>
            <select class="form-select form-select-sm w-auto bg-dark text-light border-secondary">
                <option selected>Todas las sucursales</option>
                <option>Santa Cruz Norte</option>
                <option>Santa Cruz Sur</option>
            </select>
        </div>

        <div class="row g-4">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card movie-card h-100">
                    <img src="https://picsum.photos/400/600?random=11" class="card-img-top" alt="Película 1">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <span class="badge badge-genre mb-2">Acción / Sci-Fi</span>
                            <h5 class="card-title fw-bold text-white mb-1">Mundo Futuro</h5>
                            <p class="text-muted small mb-3"><i class="far fa-clock me-1"></i> 125 min | <i class="fas fa-star text-warning me-1"></i> 4.8</p>
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-buy btn-sm"><i class="fas fa-shopping-cart me-2"></i>Comprar</button>
                            <button class="btn btn-outline-light btn-sm">Ver Trailer</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card movie-card h-100">
                    <img src="https://picsum.photos/400/600?random=12" class="card-img-top" alt="Película 2">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <span class="badge badge-genre mb-2">Aventura / Animación</span>
                            <h5 class="card-title fw-bold text-white mb-1">El Bosque Perdido</h5>
                            <p class="text-muted small mb-3"><i class="far fa-clock me-1"></i> 95 min | <i class="fas fa-star text-warning me-1"></i> 4.5</p>
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-buy btn-sm"><i class="fas fa-shopping-cart me-2"></i>Comprar</button>
                            <button class="btn btn-outline-light btn-sm">Ver Trailer</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card movie-card h-100">
                    <img src="https://picsum.photos/400/600?random=13" class="card-img-top" alt="Película 3">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <span class="badge badge-genre mb-2">Terror / Suspenso</span>
                            <h5 class="card-title fw-bold text-white mb-1">La Sombra Oscura</h5>
                            <p class="text-muted small mb-3"><i class="far fa-clock me-1"></i> 110 min | <i class="fas fa-star text-warning me-1"></i> 4.2</p>
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-buy btn-sm"><i class="fas fa-shopping-cart me-2"></i>Comprar</button>
                            <button class="btn btn-outline-light btn-sm">Ver Trailer</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card movie-card h-100">
                    <img src="https://picsum.photos/400/600?random=14" class="card-img-top" alt="Película 4">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <span class="badge badge-genre mb-2">Drama / Romance</span>
                            <h5 class="card-title fw-bold text-white mb-1">Caminos Cruzados</h5>
                            <p class="text-muted small mb-3"><i class="far fa-clock me-1"></i> 135 min | <i class="fas fa-star text-warning me-1"></i> 4.7</p>
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-buy btn-sm"><i class="fas fa-shopping-cart me-2"></i>Comprar</button>
                            <button class="btn btn-outline-light btn-sm">Ver Trailer</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-center text-muted border-top border-secondary">
        <div class="container">
            <p class="mb-1">© 2026 CineStar Bolivia - Santa Cruz.</p>
            <p class="small mb-0">Desarrollado con fines de práctica en Bootstrap 5</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bundle.min.js"></script>
</body>
</html>