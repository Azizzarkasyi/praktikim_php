<link href="css/styles.css" rel="stylesheet" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-lg navbar-light bg-primary position-fixed" style="width: 100%; top: 0; z-index: 2;">
    <div class="container-fluid">
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="/admin" class="nav-item nav-link active">Admin</a>
                <a href="#" class="nav-item nav-link">About</a>
                </div>
            </div>
            <div class="navbar-nav">
                <a href="/login/logout" class="nav-item nav-link">Logout</a>
            </div>
        </div>
    </div>
</nav>

<?= $this->renderSection('content');?>