<?php
/**
 * Created by IntelliJ IDEA.
 * User: s911415
 * Date: 2016/11/23
 * Time: 20:48
 */
ob_start();
session_start();
include('inc.php');
include('func.php');


$action = @$_REQUEST['action'] ?: '';

if (!empty($action) && function_exists($action)) $action();

?>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Sample GuestBook</title>
    <link href="bootstrap.min.css" rel="stylesheet"/>
    <script src="bootstrap.min.js"></script>
    <style>
        .caption h3 {
            margin-top: 10px;
        }

        .content {
            white-space: pre-line;
        }
    </style>
</head>
<body>
<header>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">GuestBook</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="./">Home</a></li>
                    <li><a href="#">POST</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <?php
                    if (isset($_SESSION['login'])) {
                        ?>
                        <li><a href="./?action=Logout">Logout</a></li>
                        <?php
                    } else {
                        ?>
                        <li><a href="./?page=login">Login</a></li>
                        <?php
                    }
                    ?>
                </ul>
                <form class="navbar-form navbar-right">
                    <div class="form-group">
                        <input type="text" class="form-control" name="search" placeholder="Search Post"
                               value="<?= @$_GET['search'] ?>">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>
<main class="container">
    <?php
    $page = @$_REQUEST['page'] ?: '';
    if (empty($page)) $page = 'main';
    require($page . '.php');
    ?>
</main>
<hr/>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                asdf
            </div>
        </div>
    </div>
</footer>
</body>
</html>

