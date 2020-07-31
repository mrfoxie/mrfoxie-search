<!DOCTYPE html>
<html>

<head>
    <title>Mr. Foxie</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1,
            shrink-to-fit=no" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="shortcut icon" href="assets/images/mrfoxie.png" type="image/x-icon">
    <style>
        body {
            background-color: #f5f5f5;
            background-image: url('assets/images/bg-chat-tile-light_9e8a2898faedb7db9bf5638405cf81ae.png');
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
        }
        
        .card {
            position: fixed;
            top: 0%;
            bottom: 0%;
            left: 0%;
            right: 0%;
            margin: auto;
            width: 350px;
            height: 490px;
            border: 1px solid #ffffff;
            box-shadow: inset 0px 0px 10px #f42b03, 0px 0px 10px #f42b03;
        }
        
        .input-group-text {
            background-color: transparent;
            border-color: #f42b03;
        }
        
        input {
            color: #ffffff;
        }
        
        input.form-control {
            background-color: transparent;
            color: #f42b03;
            border-color: #f42b03;
        }
        
        input[type="text"]:focus {
            background-color: transparent;
            border-color: #ffffff;
            color: #F42B03;
            box-shadow: inset 0px 0px 10px #f42b03, 0px 0px 10px #f42b03;
        }
        
        input[type="text"]::placeholder {
            color: #f42b03;
        }
        
        .alert {
            color: #f42b03;
            text-shadow: 0px 0px 10px #F42B03;
            border: none;
            background-color: transparent;
        }
        
         ::selection {
            background-color: #f42b03;
            color: #ffffff;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-4">
                <div class="card text-light">
                    <a href="#"><img class="card-img-top" src="assets/images/mrfoxie.png" alt="logo" /></a>
                    <form action="search.php" method="get">
                        <div class="card-body">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1" style="color: #f42b03;">@</span></div>
                                <input type="text" class="form-control" placeholder="Type here to search." aria-label="Search" aria-describedby="basic-addon1" name="term" required />
                            </div>
                            <div class="alert alert-info" role="alert">
                                <strong>Press Enter</strong> to search
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first,
then Popper.js,
then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>