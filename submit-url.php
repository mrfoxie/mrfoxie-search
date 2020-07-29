<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Submit Url</title>
    <link rel="shortcut icon" href="assets/images/mrfoxie.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #0c0c0c;
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
            background-color: transparent;
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
        
        input[type="url"]:focus {
            background-color: transparent;
            border-color: #ffffff;
            color: #ffffff;
            box-shadow: inset 0px 0px 10px #f42b03, 0px 0px 10px #f42b03;
        }
        
        input[type="url"]::placeholder {
            color: #f42b03;
        }
        
        .btn {
            color: #ffffff;
            border: 1px solid #ffffff;
            box-shadow: inset 0px 0px 10px #f42b03, 0px 0px 10px #f42b03;
        }
        
        .btn:hover {
            transition: 0.5s;
            color: #f42b03;
        }
        
        .alert {
            margin-top: 10px;
            text-align: center;
            background: #ffffff;
            background-size: 200% auto;
            color: #000;
            background-clip: text;
            text-fill-color: transparent;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: shine 1.6s linear infinite;
        }
        
        @keyframes shine {
            0% {
                text-shadow: 0px 0px 10px #f42b03, 0px 0px 20px #f42b03;
            }
            50% {
                text-shadow: 0px 0px 0px #f42b03;
            }
            100% {
                text-shadow: 0px 0px 10px #f42b03, 0px 0px 20px #f42b03;
            }
        }
    </style>
</head>

<body>
    <div class="alert textGradient fixed-bottom" role="alert">
        <strong></strong>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card text-light">
                    <img class="card-img-top" src="assets/images/mrfoxie.png" alt="" />
                    <form method="post" id="formSubmitUrl">
                        <div class="card-body">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1" style="color: #f42b03;">@</span></div>
                                <input type="url" class="form-control" name="url" placeholder="Submit URL here..." required aria-label="Search" aria-describedby="basic-addon1" name="url" required />
                            </div>
                            <input style="width: 100%;" id="buttonSubmit" class="btn btn-lg" type="submit" value="Submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $("#formSubmitUrl").submit(function(e) {
                e.preventDefault();
                $(".textGradient").text("Processing Please wait...");
                $("#buttonSubmit").prop('disabled', true);
                $.ajax({
                    type: 'post',
                    url: 'crawl.php',
                    data: $('form').serialize(),
                    success: function() {
                        $("#buttonSubmit").text('disabled', false);
                        $(".textGradient").html("The system has received the url");
                    }
                });
            })
        })
    </script>
</body>

</html>