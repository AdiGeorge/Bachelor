<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div id="signup_page">
        <div id="nav">
        <?php include(__DIR__.'/components/nav.html') ?>
        </div>
        <form class="signup_form" onsubmit="signup(); return false">
          <h2>Create account</h2>
        <div>
            <label for="name">name (min 2 max 20 characters)</label>
            <input id="name" name="name" type="text" placeholder="name" value="aa"
              data-type="string"     
            >
          </div>
          <div>
            <label for="name">email (min 2 max 20 characters)</label>
            <input id="name" name="email" type="text" placeholder="email" value="aa"
              data-type="string"     
            >
          </div>
          <div>
            <label for="name">password (min 2 max 20 characters)</label>
            <input id="name" name="password" type="password" placeholder="password" value="aa"
              data-type="string"     
            >
          </div>
          <button class="signup_btn nav_btn2">signup</button>
        </form>
  <div class="alreadyLogin">
        <h2>Already have an account?</h2>
        <button class="login_btn nav_btn1">login</button>
        </div>

    </div>
    <script src="js/app.js"></script>
</body>
</html>