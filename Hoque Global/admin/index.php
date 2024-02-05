<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "bundle.php"; ?>
</head>
<body>
    <div class="login-panel">
        <h2 class="mb-3">Admin Panel</h2>
        <div id="loginSuccess" class="success"></div>
        <div id="loginError" class="error"></div>
        <form id="adminLogin">
            <div class="form-group">
                <input type="text" class="form-control" name="username" placeholder="User ID">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <div class="form-group text-right">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
        </form>
    </div>
</body>
</html>