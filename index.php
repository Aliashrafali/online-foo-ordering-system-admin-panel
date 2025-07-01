<?php
    include 'title.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= $title; ?></title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-12 p-0 m-0">
                        <div class="sidebar">
                            <div class="sidebar-top">
                                <h4 class="text-center">Admin Panel</h4>
                            </div>
                            <div class="sidebar-bottom">
                                <nav>
                                    <a href="javascript:void(0)" id="active"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                                    <a href="javascript:void(0)" onclick="ShowCategory()"><i class="fas fa-signal"></i> Category <i id="drop" class="fas fa-angle-right"></i></a>
                                        <div id="submenu">
                                            <a href="javascript:void(0)"><i class="far fa-circle"></i> Add</a>
                                            <a href="javascript:void(0)"><i class="far fa-circle"></i> View</a>
                                        </div>
                                    <a href="javascript:void(0)"><i class="fas fa-hamburger"></i> Food <i id="drop1" class="fas fa-angle-right"></i></a>
                                    <a href="javascript:void(0)"><i class="fab fa-first-order"></i> Order <i id="drop2" class="fas fa-angle-right"></i></a>
                                    <a href="javascript:void(0)"><i class="fas fa-weight"></i> Status <i id="drop3" class="fas fa-angle-right"></i></a>
                                    <a href="javascript:void(0)"><i class="fas fa-rupee-sign"></i> Transaction <i id="drop4" class="fas fa-angle-right"></i></a>
                                    <a href="javascript:void(0)"><i class="fas fa-question"></i> Help</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <script src="js/custom.js"></script>
    </body>
</html>