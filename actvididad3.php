<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV - Edgar Miranda Severiche</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .cv-header {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            color: white;
            padding: 3rem 2rem;
            border-radius: 0.5rem 0.5rem 0 0;
        }
        .sidebar {
            background-color: #ffffff;
            border-right: 1px solid #e9ecef;
            height: 100%;
        }
        .main-content {
            background-color: #ffffff;
        }
        .section-title {
            color: #1e3c72;
            border-bottom: 2px solid #e9ecef;
            padding-bottom: 0.5rem;
            margin-bottom: 1.5rem;
            font-weight: 600;
        }
        .progress {
            height: 8px;
        }
        .badge-tech {
            background-color: #e3fafc;
            color: #0c8599;
            font-weight: 500;
        }
    </style>
</head>
<body>

<div class="container my-5 shadow-sm p-0 rounded">
    
    <div class="cv-header text-center text-md-start d-md-flex align-items-center justify-content-between">
        <div>
            <h1 class="display-5 fw-bold mb-1">Edgar Miranda Severiche</h1>
            <p class="lead mb-0">Estudiante de Ingeniería en Sistemas | Desarrollador de Software</p>
        </div>
        <div class="mt-3 mt-md-0">
            <a href="mailto:tu.correo@email.com" class="btn btn-outline-light btn-sm m-1"><i class="fas fa-envelope me-2"></i>Contacto</a>
            <a href="#" class="btn btn-outline-light btn-sm m-1"><i class="fab fa-github me-2"></i>GitHub</a>
        </div>
    </div>

    <div class="row g-0">
        <div class="col-lg-4 sidebar p-4">
            
            <div class="mb-4">
                <h5 class="fw-bold text-uppercase mb-3" style="color: #1e3c72;">Datos Personales</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><i class="fas fa-calendar-alt text-muted me-2"></i> 26 años (11/10/1999)</li>
                    <li class="mb-2"><i class="fas fa-map-marker-alt text-muted me-2"></i> Santa Cruz, Bolivia</li>
                    <li class="mb-2"><i class="fas fa-envelope text-muted me-2"></i> mufrus17@gmail.com</li>
                    
                </ul>
            </div>

            <div class="mb-4">
                <h5 class="fw-bold text-uppercase mb-3" style="color: #1e3c72;">Habilidades</h5>
                
                <div class="mb-3">
                    <div class="d-flex justify-content-between mb-1">
                        <span class="small fw-bold">Laravel & PHP</span>
                        <span class="small text-muted">Avanzado</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 85%"></div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="d-flex justify-content-between mb-1">
                        <span class="small fw-bold">Docker & WSL2</span>
                        <span class="small text-muted">Intermedio</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 75%"></div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="d-flex justify-content-between mb-1">
                        <span class="small fw-bold">Bases de Datos (MySQL)</span>
                        <span class="small text-muted">Avanzado</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%"></div>
                    </div>
                </div>
            </div>

            <div>
                <h5 class="fw-bold text-uppercase mb-3" style="color: #1e3c72;">Idiomas</h5>
                <p class="mb-1"><strong>Español:</strong> Nativo</p>
                <p class="mb-0"><strong>Inglés:</strong> Intermedio</p>
            </div>
        </div>

        <div class="col-lg-8 main-content p-4">
            
            <div class="mb-4">
                <h4 class="section-title"><i class="fas fa-user me-2"></i>Perfil Profesional</h4>
                <p class="text-secondary">
                    Estudiante de Ingeniería en Sistemas apasionado por el desarrollo web backend y la infraestructura moderna. Cuento con experiencia práctica en la creación de aplicaciones con el ecosistema Laravel, gestión de entornos mediante contenedores Docker y optimización de bases de datos. Comprometido con el aprendizaje continuo y las buenas prácticas de desarrollo.
                </p>
            </div>

            <div class="mb-4">
                <h4 class="section-title"><i class="fas fa-code me-2"></i>Proyectos Destacados</h4>
                
                <div class="mb-3">
                    <div class="d-flex justify-content-between">
                        <h5 class="mb-1 fw-bold">Sistema "CASA HOGAR"</h5>
                        <span class="text-muted small">2026</span>
                    </div>
                    <p class="text-secondary mb-2">Desarrollo de un sistema para la gestión y reserva de propiedades vacacionales internacionales. Implementación de lógica de negocio compleja para disponibilidad hotelera.</p>
                    <div>
                        <span class="badge badge-tech me-1">Laravel</span>
                        <span class="badge badge-tech me-1">MySQL</span>
                        <span class="badge badge-tech me-1">Docker</span>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <h4 class="section-title"><i class="fas fa-graduation-cap me-2"></i>Educación</h4>
                
                <div class="mb-3">
                    <div class="d-flex justify-content-between">
                        <h5 class="mb-1 fw-bold">Ingeniería en Sistemas</h5>
                        <span class="text-muted small">En curso</span>
                    </div>
                    <p class="text-muted mb-0"><em>Universidad Privada Cumbre Santa Cruz, Bolivia</em></p>
                </div>
            </div>

            <div>
                <h4 class="section-title"><i class="fas fa-briefcase me-2"></i>Experiencia / Logros</h4>
                
                <div class="mb-3">
                    <div class="d-flex justify-content-between">
                        <h5 class="mb-1 fw-bold">Desarrollo y Despliegue de Proyectos</h5>
                        <span class="text-muted small">2025 - 2026</span>
                    </div>
                    <ul class="text-secondary small mt-2">
                        <li>Migración exitosa de entornos de desarrollo locales a Docker.</li>
                        <li>Configuración y conexión de stacks completos (PHP, phpMyAdmin, MySQL) mediante Docker Compose.</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>