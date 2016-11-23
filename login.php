<?php
if (isset($_POST['name']) && isset($_POST['pwd'])) {
    $pwd = md5($_POST['pwd']);
    $acc = getRows("SELECT * FROM users WHERE name='{$_POST['name']}' AND pwd='{$pwd}'");

    if (count($acc)) {
        $acc = $acc[0];
        $_SESSION['login'] = 1;
        $_SESSION['user'] = $acc->account;
        header("Location: ./");
        die();
    } else {
        ?>
        <div class="alert alert-danger" role="alert">帳號或密碼錯誤</div>
        <?php
    }
}
?>
<div class="row">
    <div class="col-sm-4 col-sm-offset-4">
        <form class="form" role="form" method="post" action="./?page=login" id="login-nav" method="POST">
            <div class="form-group">
                <label class="sr-only" for="exampleInputName2">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputName2" placeholder="Name"
                       required="">
            </div>
            <div class="form-group">
                <label class="sr-only" for="exampleInputPassword2">Password</label>
                <input type="text" name="pwd" class="form-control" id="exampleInputPassword2" placeholder="Password"
                       required="">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Sign in</button>
            </div>
        </form>
    </div>
</div>