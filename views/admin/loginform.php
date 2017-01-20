<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
     <link rel="stylesheet" href= "/views/admin/css/style.css">
    <title>Login form</title>

</head>
<body translate="no">
    <div class="wrapper">
        <?PHP
//        print_r($_FILES);
        ?>
      <form id = "form-signin">
            <fieldset>
                <legend>Login</legend>
                <div id="error">
                </div>
                <p>
                    <label for="username" >User name</label>
                    <input id="username" name="username" autocomplete="on" required="required" maxlength="8"/>
                </p>
                <p>
                    <label for="password">Password</label>
                    <input id="password" name="password" type="password" required="required" maxlength="8"/>
                </p>
                <button id = "admin-enter">Enter</button>
            </fieldset>
        </form>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script>

<script src="views/admin/js/login_ajax.js"></script>
</body>
</html>