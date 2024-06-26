<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>
<style>
    .navbar-dark .nav-item .nav-link {
        color: #fff;
    }

    .navbar-dark .nav-item .nav-link:hover {
        background-color: rgba(255, 255, 255, 0.1);
        transition: all 0.3s ease;
        border-radius: 0.25rem;
        color: #fff;
    }

    .fa-li {
        position: relative;
        left: 0;
    }
</style>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <!-- Container wrapper -->
        <div class="container">
            <!-- Navbar brand -->
            <a class="navbar-brand" href="#"><img id="MDB-logo" src="https://mdbcdn.b-cdn.net/wp-content/uploads/2018/06/logo-mdb-jquery-small.png" alt="MDB Logo" draggable="false" height="30" /></a>

            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left links -->
                <ul class="navbar-nav me-3">
                    <li class="nav-item">
                        <a class="nav-link active d-flex align-items-center" aria-current="page" href="#"><i class="fas fa-bars pe-2"></i>Menu</a>
                    </li>
                </ul>
                <!-- Left links -->

                <form class="d-flex align-items-center w-100 form-search">
                    <div class="input-group">
                        <button class="btn btn-light dropdown-toggle shadow-0" type="button" data-mdb-toggle="dropdown" aria-expanded="false" style="padding-bottom: 0.4rem;">
                            All
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark fa-ul">
                            <li>
                                <a class="dropdown-item" href="#"><span class="fa-li pe-2"><i class="fas fa-search"></i></span>All</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"><span class="fa-li pe-2"><i class="fas fa-film"></i></span>Titles</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"><span class="fa-li pe-2"><i class="fas fa-tv"></i></span>TV
                                    Episodes</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"><span class="fa-li pe-2"><i class="fas fa-user-friends"></i></span>Celebs</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"><span class="fa-li pe-2"><i class="fas fa-building"></i></span>Companies</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"><span class="fa-li pe-2"><i class="fas fa-key"></i></span>Keywords</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"><span class="fa-li pe-2"><i class="fas fa-search-plus"></i></span>Advanced
                                    search<i class="fas fa-chevron-right ps-2"></i></a>
                            </li>
                        </ul>
                        <input type="search" class="form-control" placeholder="Search" aria-label="Search" />
                    </div>
                    <a href="#!" class="text-white"><i class="fas fa-search ps-3"></i></a>
                </form>

                <ul class="navbar-nav ms-3">
                    <li class="nav-item me-3">
                        <a class="nav-link d-flex align-items-center" href="\test-sample\log_in_form\update_users.php">Update</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center me-3" href="\test-sample\log_in_form\select_users.php">
                            <i class="fas fa-bookmark pe-2"></i> Users
                        </a>
                    </li>
                    <li class="nav-item" style="width: 65px;">
                        <a class="nav-link d-flex align-items-center" href="\test-sample\log_in_form\login.php">Sign In</a>
                    </li>
                </ul>
            </div>
            <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
</body>

</html>