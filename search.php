<?php
include("config.php");
include("classes/SiteResultsProvider.php");
include("classes/ImageResultsProvider.php");
    if(isset($_GET["term"])){
        $term = $_GET["term"];
    }else{
        exit("please letter search > 0");
    }
    $type = isset($_GET["type"]) ? $_GET["type"] : "sites";
    $page = isset($_GET["page"]) ? $_GET["page"] : 1;
?>
    <!doctype html>
    <html lang="en">

    <head>
        <title>
            <?php echo $term; ?> - Mr. Foxie
        </title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" href="assets/images/mrfoxie.png" type="image/x-icon">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style>
            body {
                background-color: #f5f5f5;
                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
                margin-bottom: 10%;
                word-wrap: break-word;
                text-align: justify;
                background-image: url('assets/images/bg-chat-tile-light_9e8a2898faedb7db9bf5638405cf81ae.png');
            }
            
            input.form-control {
                background-color: transparent;
                color: #f42b03;
                border-color: #f42b03;
            }
            
            input[type="text"]:focus {
                background-color: transparent;
                border-color: #ffffff;
                color: #ffffff;
                box-shadow: inset 0px 0px 10px #f42b03, 0px 0px 10px #f42b03;
            }
            
            input[type="text"]::placeholder {
                color: #f42b03;
            }
            
            .btn {
                color: #0c0c0c;
                background-color: #f42b03;
                border: 1px solid #ffffff;
            }
            
            .btn:hover {
                background-color: transparent;
                border-color: #ffffff;
                box-shadow: inset 0px 0px 10px #f42b03, 0px 0px 10px #f42b03;
            }
            
            .navbar {
                position: sticky;
                top: 0;
                left: 0;
                right: 0;
                margin: auto;
                z-index: 99;
                background-color: #f5f5f5;
                border-color: #f42b03;
                border-bottom: 1px solid #f42b03;
                box-shadow: 0px 05px 10px #f42b03;
            }
            
            .col-lg-8 {
                left: 0;
                right: 0;
                margin: auto;
                padding: 20px;
                background-color: #f5f5f5;
            }
            
            a {
                color: #f42b03;
            }
            
            a:hover {
                color: #0c0c0c;
            }
            
            a.result {
                color: #f42b03;
            }
            
            a.result:hover {
                transition: 0.3s;
                color: #0c0c0c;
                text-shadow: 0px 0px 10px #f42b03;
            }
            
            .resultsCount {
                color: #0c0c0c;
            }
            
            .url,
            .details {
                color: #f42b03aa;
            }
            
            .details:hover {
                transition: 0.3s;
                color: #0c0c0c;
                text-shadow: 0px 0px 10px #f42b03;
            }
            
            .description {
                color: #0c0c0c;
            }
            
            .resultsCount {
                font-size: 10px;
            }
            
            .page-item {
                background-color: #f42b03;
            }
            
            .page-link {
                border: none;
                color: #0c0c0c;
                background-color: #f42b03;
            }
            
            .page-item.active .page-link {
                border: 1px solid #f42b03;
                background-color: #f42b03;
                border-radius: 0rem;
            }
            
            li.page-item:hover a.page-link {
                transition: 0.3s;
                color: #0c0c0c;
                border: 1px solid #f42b03;
                background-color: transparent;
                box-shadow: inset 0px 0px 10px #f42b03, 0px 0px 10px #f42b03;
                border-radius: 0rem;
            }
            
            div.dropdown-menu.show {
                text-align: center;
                color: #ffffff;
                background-color: #0c0c0c;
                border: 1px solid #ffffff;
                box-shadow: inset 0px 0px 10px #f42b03, 0px 0px 10px #f42b03;
            }
            
            a.dropdown-item {
                color: #ffffff;
            }
            
            a.dropdown-item:hover {
                color: #ffffff;
                background-color: #f42b03;
            }
        </style>
    </head>

    <body>
        <nav class="navbar navbar-expand-md navbar-ligh text-dark">
            <img class="navbar-brand" src="assets/images/mrfoxie.png" width="30" alt="">
            <a class="navbar-brand" href="/">Mr. Foxie</a>
            <button style="color:#ffffff; border:1px solid #ffffff; box-shadow: inset 0px 0px 10px #f42b03, 0px 0px 10px #f42b03;" class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="true" aria-label="Toggle navigation">@</button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="<?php echo $type == 'sites' ? 'active' : '' ?>">
                        <a class="nav-link" href="<?php echo " search.php?term=$term&type=sites "; ?>">All links <span class="sr-only">(current)</span></a>
                    </li>
                    <!-- <li class="<?php echo $type == 'images' ? 'active' : '' ?>">
                        <a class="nav-link" href="<?php echo " search.php?term=$term&type=images "; ?>">Images</a>
                    </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Others</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="submit-url.php" target="_blank">Submit Url</a>
                            <a class="dropdown-item" href="https://instagram.com/mistrysiddh" target="_blank">Instagram</a>
                            <a class="dropdown-item" href="https://github.com/mrfoxie/search" target="_blank">GitHub</a>
                        </div>
                    </li>
                </ul>
                <p class="my-2 my-lg-2 text-dark">
                    <?php echo $type; ?>:
                    <?php echo $term; ?>
            </div>
        </nav>
        <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <?php
                    if($type == "sites"){
                        $resultsProvider = new SiteResultsProvider($con);
                        $pageLimit = 20;
                    }else{
                        $resultsProvider = new ImageResultsProvider($con);
                        $pageLimit = 30;
                    }
    
                    $numResults = $resultsProvider->getNumResults($term);
                    echo "<p class='resultsCount'>About $numResults results have been found in the database.</p>";
                    echo $resultsProvider->getResultsHtml($page, $pageLimit, $term);
                ?>
                </div>
                <div class="col-xl-12">
                    <br>
                    <nav aria-label="Page navigation">
                        <ul class="pagination pagination-md justify-content-center">
                            <?php
                                    $pagesToShow = 10;
                                    $pageSize = 20;
                                    $numPages = ceil($numResults / $pageSize);
                                    $pageLefts = min($pagesToShow, $numPages);
                                    $currentPage = $page - floor( $pagesToShow / 2 );
                                    if($currentPage < 1){
                                        $currentPage = 1;
                                    }
                                    if($currentPage + $pageLefts > $numPages + 1) {
                                        $currentPage = $numPages + 1 - $pageLefts; // thì số trang hiện tại bằng tổng số trang + 1 - số trang còn lại
                                    }
                                    while($pageLefts != 0 && $currentPage <= $numPages) {
                                        if($currentPage == $page){
                                            echo "
                                            <li class='page-item active' aria-current='page'>
                                <span class='page-link'>$currentPage<span class='sr-only'>(current)</span></span>
                            </li>";
                                        }else{
                                            echo "
                                            <li class='page-item'><a class='page-link' href='search.php?term=$term&type=$type&page=$currentPage'>$currentPage</a></li>";
                                        }
                                        $currentPage++;
                                        $pageLefts--;
                                    }
                    
                                    ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>
        <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script> -->
        <script type="text/javascript" src="assets/js/script.js"></script>
    </body>

    </html>