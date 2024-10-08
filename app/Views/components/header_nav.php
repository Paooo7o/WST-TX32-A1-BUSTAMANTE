<!-- Header -->
<nav class="navbar navbar-expand-sm navbar-dark navbar-custom">
            <div class="container">
                <a href="welcome_message.php" class="navbar-brand text-uppercase fs-5">
                    <img src="assets/images/Etihad-Airways-Logo.png" alt="Logo" width="70" class="d-inline-block align-middle">
                    Etihad Airways
                </a>

                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="list1">
                    <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="<?= base_url()?>" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url().'about'?>" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url().'information'?>" class="nav-link">Information</a>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>
