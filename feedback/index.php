<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Feedback Form</title>
        <!-- BOOTSTRAP CDN Links -->
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
        <!-- Custom CSS file -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
        <style>
        body{
        background-image: linear-gradient(rgba(255,255,255,0.75),rgba(255,255,255,0.75)), url('../images/b4.jpg');
        }
        h1{
        text-align: center;
        font-size: 2.5em;
        text-transform: uppercase;
        color: black;
        font-weight: 600;
        font-family: 'Montserrat', sans-serif;
        letter-spacing: 6px;
        line-height: 1.5;
        }
        .wrap {
        justify-content: center;
        padding: 2.3em;
        width: 60%;
        margin: 2em auto;
        background: rgba(1, 14, 21, 0.62);
        }
        .h2-tag{
        text-align: center;
        margin-top: 4%;
        }
        @media (max-width: 768px){
        .wrap{
        width: 100%;
        }
        }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="../images/logo.jpg" alt="" width="30" height="24" class="d-inline-block align-text-top">
                    Apartment
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="../index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../notification.php">Notification</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Expenses
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="../festival.php">Festival</a></li>
                                <li><a class="dropdown-item" href="../maintenance/maintenance.php">Maintenance</a></li>
                                <li><a class="dropdown-item" href="../extra.php">Extra</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../contact.php">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php">Feedback</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--<h1 style="margin-top: 100px;">Feedback Form</h1>-->
        <div class="container" style="margin-top: 100px;">
            <div class="wrap">
                <h2 class="h2-tag">Please help us to serve you better by taking a couple of minutes!</h2><br>
                <form method="post" action="register.php" class="form-content-section" enctype="multipart/form-data" name="feedbackForm">
                    
                    <div class="form-floating mb-4">
                        <div class="rateyo" style="" id= "rating"
                            data-rateyo-rating="4.0"
                            data-rateyo-num-stars="5"
                            data-rateyo-score="3">
                        </div>
                        <span class='result' style="color: white;">Rating : 0</span>
                        <input type="hidden" name="rating">
                    </div>
                    
                    <div class="form-floating mb-4">
                        <input type="text" name="name" class="form-control" id="nameErr" placeholder="Enter Name...">
                        <label for="floatingName">Name</label>
                    </div>
                    
                    <div class="form-floating mb-4">
                        <input type="email" name="email" class="form-control" id="emailErr" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    
                    <div class="form-floating mb-4">
                        <textarea name="suggestion" class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea">Comments</label>
                    </div>
                    
                    <div class="d-grid gap-2 col-3 mx-auto">
                        <button type="submit" class="btn btn-dark" name="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <script>
        
        $(function (){
        $(".rateyo").rateYo().on("rateyo.change", function (e, data){
        var rating = data.rating;
        $(this).parent().find('.score').text('score : '+ $(this).attr('data-rateyo-score'));
        $(this).parent().find('.result').text('Rating : '+ rating);
        $(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
        });
        });
        </script>
    </body>
</html>