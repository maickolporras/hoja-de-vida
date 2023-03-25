<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm mb-3 sticky-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <i class="fa-solid fa-house"></i>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                    <a class="nav-link" href="study.php">
                        <i class="fa-solid fa-graduation-cap"></i> ESTUDIOS
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="job.php">
                        <i class="fa-solid fa-graduation-cap"></i> EXPERIENCIA LABORAL
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">
                        <i class="fa-solid fa-hand-sparkles"></i> HABILIDADES
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">
                        <i class="fa-solid fa-file-contract"></i> CURSOS REALIZADOS
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="modal" href="#modalContacto">
                            <i class="fa-solid fa-envelope"></i> CONTACTAME                           
                        </a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-light" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
    </div>
</nav>
<!-- Modal -->
<div class="modal fade" id="modalContacto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
            <div class="modal-header bg-dark text-white text-center" style="display: block;">
                <h1 class="modal-title fs-5" id="exampleModalLabel">
                    Formulario de contacto
                    <a type="button" href="" data-bs-dismiss="modal" aria-label="Close" class="ms-5 link-danger">
                        <i class="fa-solid fa-circle-xmark text-danger"></i>
                    </a>
                </h1>
                
            </div>
            <div class="modal-body">
                <form class="row g-3">
                    <div class="col-md-6 ">
                        <label for="nombres" class="form-label">Nombres</label>
                        <input type="text" class="form-control" id="nombres">
                    </div>
                    <div class="col-md-6">
                        <label for="apellidos" class="form-label">Apellidos</label>
                        <input type="text" class="form-control" id="apellidos">
                    </div>
                    <div class="col-12">
                        <label for="email" class="form-label">Correo</label>
                        <input type="email" class="form-control" id="email" placeholder="correo electronico">
                    </div>
                    <div class="col-12">
                        <label for="asunto" class="form-label">Asunto</label>
                        <input type="text" class="form-control" id="asunto" placeholder="Apartment, studio, or floor">
                    </div>
                    <div class="col-md-12">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <textarea class="form-control" id="descripcion">
                        </textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer bg-success bg-opacity-50">
                <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal"><i class="fa-regular fa-circle-xmark" style="color: #000000;"></i></button>
                <button type="button" class="btn btn-primary bg-danger"><i class="fa-solid fa-paper-plane"></i></button>
                <button type="button" class="btn btn-primary" type="submit"><i class="fa-brands fa-facebook"></i></button>
            </div>
        </div>
    </div>
</div>