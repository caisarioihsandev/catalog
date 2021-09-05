<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= WEBSITE_TITLE . " | " . $data['title'] ?></title>
    <link rel="stylesheet" href="<?= ASSETS; ?>/template/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= ASSETS; ?>/template/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?= ASSETS; ?>/template/css/templatemo-style.css">
<!--
    
TemplateMo 556 Catalog-Z

https://templatemo.com/tm-556-catalog-z

-->
</head>
<body>
    <!-- Page Loader -->
    <div id="loader-wrapper">
        <div id="loader"></div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

    </div>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= ROOT; ?>">
                <i class="fas fa-film mr-2"></i>
                <?= WEBSITE_TITLE; ?>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link nav-link-1 <?php echo $data['page'] == 'home' ? "active" : ""?>" aria-current="page" href="<?= ROOT; ?>/home">Photos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-2 <?php echo $data['page'] == 'videos' ? "active" : ""?>" href="<?= ROOT; ?>/videos">Videos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-3 <?php echo $data['page'] == 'about' ? "active" : ""?>" href="<?= ROOT; ?>/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-4 <?php echo $data['page'] == 'contact' ? "active" : ""?>" href="<?= ROOT; ?>/contact">Contact</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>