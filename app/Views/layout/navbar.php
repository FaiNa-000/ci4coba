<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="https://sefam.com/">Sefam</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-link active" href="<?= base_url('/'); ?>">Home <span class="sr-only">(current)</span></a>
                <a class="nav-link" href="<?= base_url('/pages/about'); ?>">About</a>
                <a class="nav-link" href="<?= base_url('/pages/contact'); ?>">Contact</a>
                <!-- <a class="nav-link" href="<?= base_url('/komik'); ?>">komik</a> -->
                <?php if (logged_in()) : ?>
                    <a class="nav-link" href="<?= base_url('/user'); ?>">dashboard</a>
                <?php else : ?>
                <?php endif; ?>
                <!-- //<a class="nav-item btn btn-primary tombol" href="#" tabindex="-1" aria-disabled="true">lolol</a> -->
            </div>

            <?php if (logged_in()) : ?>
                <a class="btn btn-danger tombol nav-item nav-link" href="<?= base_url('/logout'); ?>">LOGOUT</a>
            <?php else : ?>
                <a class="btn btn-primary tombol nav-item nav-link" href="<?= base_url('/login'); ?>">LOGIN</a>
                <a class="btn btn-warning tombol nav-item nav-link active" href="<?= base_url('/register'); ?>">SIGN UP <span class="sr-only">(current)</span></a>
            <?php endif; ?>

        </div>
    </div>
</nav>
<!-- end navbar -->