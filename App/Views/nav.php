<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <?php
                if (isset($admin)) {
                    include_once VIEW_DIR . '/navs/admin.php';
                } else {
                    include_once VIEW_DIR . '/navs/site.php';
                }
                ?>
            </ul>
            <ul class="navbar-nav">
                <?php if (\App\Helpers\SessionHelper::isUserLoggedIn()): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= SITE_URL . '/' .'admin/dashboard' ?>">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= SITE_URL . '/' .'logout' ?>">Logout</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= SITE_URL . '/' .'login' ?>">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= SITE_URL . '/' .'registration' ?>">Registration</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>