<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        body{
            background-image: url(assets/img/backk.jpg)
        }
        .btn{
            width:100%
        }

        
    </style>

</head>
<body>
    
    <div class="container"> <!--start of container-->
        <div class="row"> <!--start of row-->
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto"> <!--start of col-->
                <div class="card my-5">
                    <div class="card-body">
                        <h5 class="text my-3 text-center">::: Book Shop :::</h5>
                        <form action="" class="form my-2" role="form" method="POST">
                            <input class="form-control" type="text" placeholder="Enter your name" id="userName">
                            <input class="form-control my-2" type="password" name="password" id="password" placeholder="Enter your Password">
                            <!-- <input type="number" class="form-control my-2" name="Contact number" placeholder="Contact Number" id="Number"> -->
                            <input type="submit" class="btn btn-danger my-2 btn-block" name="Sumbit" id="submit">

                            <hr class="my-3">
                            <p class="text-center">Enter your username and password</p>
                        </form>
                    </div>
                </div>
            </div><!--end of col-->
        </div> <!--end of row-->
    </div><!--end of container-->

   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <script>

        $('#submit').click(
            function(){
                inputValidation();
            }
        );

        
        function inputValidation(callBack){
            if ($('#userName').val().length === 0){
                alert('Username cannot be empty')
                return false;
            }else if($('#password').val().length === 0){
                alert('Passowrd cannot be empty')
                return false;
            }
        }

    </script>
        
</body>
</html>