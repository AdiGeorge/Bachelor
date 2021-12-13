<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div id="landing_page" class="subpage">
        <div id="header">
            <div id="nav">
                <?php include(__DIR__.'/components/nav.html') ?>
            </div>
            <div id="search">
                <h1>Welcome to ...</h1>
                <h3>Find the best appratments</h3>
                <form>
                    <input name="search" type="text" placeholder="Where would you like to move?">
                    <button class="search_btn">Search</button>
                </form>
            </div>
            <div class="border_bottom"></div>
        </div>

        <div id="main">
            <h1>Sponsored appratments</h1>
            <div id="sponsored">
            </div>
        </div>
    </div>

    <div id="details" class="subpage">
        <div id="nav">
            <?php include(__DIR__.'/components/nav_logged_in.php') ?>
        </div>
        <?php require_once(__DIR__.'/components/appartment_subpage.php')?>
    </div>

    <div id="add_appartment" class="subpage">
    <div id="nav">
            <?php include(__DIR__.'/components/nav_logged_in.php') ?>
        </div>
        <?php require_once(__DIR__.'/components/create-appartment.php')?>

    </div>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="js/app.js"></script>
</body>

</html>