<!-- For basic structuring guidelines used part of this template : https://github.com/almasaeed2010/AdminLTE/releases -->
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>App</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <!-- css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin="anonymous">
    <!-- this injects CSS from template -->
    <link href="<?= base_url('surgery_system-develop/assets/css/style.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css"
          integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
</head>
<body>
<?php if ($_SESSION['logged_in'] === true) : ?>
    <header class="main-header">
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <div class="container-fluid">
                <a type="button" class="btn btn-primary navbar-btn navbar-right"
                        href="<?= base_url('index.php/login/logout/') ?>"
                        style="margin-right: 0;">Logout</a>
            </div><!-- /.container-fluid -->
        </nav>
    </header>
<?php else : ?>
    <div>

    </div>
<?php endif; ?>

<main id="site-content" role="main">
    <?php if (isset($_SESSION)) : ?>


    <?php endif; ?>
