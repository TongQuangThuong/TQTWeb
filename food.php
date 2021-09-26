<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Food</title>
    <link rel="stylesheet" href="food.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 p-wow" style="background-color: #fff;">
                <img src="IMG/wow1.png" alt="" style="width: 40%;">
            </div>

            <div class="col-md-8 p-menu" style="background-color: #fff;">
                <!-- <ul>
                                <li><a href="#"></a>Home</li>
                                <li><a href="#"></a>Categories</li>
                                <li><a href="#"></a>Foods</li>
                                <li><a href="#"></a>Contact</li>
                            </ul> -->
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                        <!-- <a class="navbar-brand" href="#">Navbar</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button> -->
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav p-menu" style="margin-left: 100px;">
                                <a class="nav-link" href="#" style="color: #ff6b81;">Home</a>
                                <a class="nav-link" href="#" style="color: #ff6b81;">Categories</a>
                                <a class="nav-link" href="#" style="color: #ff6b81;">Foods</a>
                                <a class="nav-link " href="#" aria-disabled="true" style="color: #ff6b81;">Contact</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <!-- container1 -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 p-search">
                <div class="input-group mb-3">
                    <input style="width:40%;" type="text" class="form" placeholder="Search For Food..."
                        aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button style="background-color:#ff6b81 ;" class="btn btn-secondary" type="button"
                        id="button-addon2">Search</button>
                </div>

            </div>
        </div>

    </div>
    <!-- container2 -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 p-food" style="background-color: #ececec;">
                <p style="text-align: center;">Food Menu</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 p-menutop" style="background-color: #ececec;">
                <!--  -->
                <div class="card mb-3 p-menu1" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img style="width:70%;padding-left:20px;padding-top:25px;" src="IMG/title.jpg"
                                class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Food Tile</h5>
                                <h5>$2.3</h5>
                                <p class="card-text">Made italian Sauce, Chicken, and organice vegetables</p>
                                <input type="submit" style="background-color: #ff6b81; color:#fff;border-radius: 5%;"
                                    value="Oder Now">
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->

            </div>
            <div class="col-md-6 p-menutop" style="background-color: #ececec;">

                <!--  -->
                <div class="card mb-3 p-menu2" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img style="width:70%;padding-left:20px;padding-top:25px;" src="IMG/hamsito.jpg"
                                class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Food Tile</h5>
                                <h5>$2.3</h5>
                                <p class="card-text">Made italian Sauce, Chicken, and organice vegetables</p>
                                <input type="submit" style="background-color: #ff6b81; color:#fff;border-radius: 5%;"
                                    value="Oder Now">
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
            </div>
        </div>
        <!-- row1 -->
        <div class="row">
            <div class="col-md-6 p-menutop" style="background-color: #ececec;">
                <!--  -->
                <div class="card mb-3 p-menu1" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img style="width:70%;padding-left:20px;padding-top:25px;" src="IMG/hamsito.jpg"
                                class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Food Tile</h5>
                                <h5>$2.3</h5>
                                <p class="card-text">Made italian Sauce, Chicken, and organice vegetables</p>
                                <input type="submit" style="background-color: #ff6b81; color:#fff;border-radius: 5%;"
                                    value="Oder Now">
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->

            </div>
            <div class="col-md-6 p-menutop" style="background-color: #ececec;">

                <!--  -->
                <div class="card mb-3 p-menu2" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img style="width:70%;padding-left:20px;padding-top:25px;" src="IMG/title.jpg"
                                class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Food Tile</h5>
                                <h5>$2.3</h5>
                                <p class="card-text">Made italian Sauce, Chicken, and organice vegetables</p>
                                <input type="submit" style="background-color: #ff6b81; color:#fff;border-radius: 5%;"
                                    value="Oder Now">
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
            </div>
        </div>
        <!-- row2 -->
        <div class="row">
            <div class="col-md-6 p-menutop" style="background-color: #ececec;">
                <!--  -->
                <div class="card mb-3 p-menu1" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img style="width:70%;padding-left:20px;padding-top:25px;" src="IMG/title.jpg"
                                class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Food Tile</h5>
                                <h5>$2.3</h5>
                                <p class="card-text">Made italian Sauce, Chicken, and organice vegetables</p>
                                <input type="submit" style="background-color: #ff6b81; color:#fff;border-radius: 5%;"
                                    value="Oder Now">
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->

            </div>
            <div class="col-md-6 p-menutop" style="background-color: #ececec;">

                <!--  -->
                <div class="card mb-3 p-menu2" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img style="width:70%;padding-left:20px;padding-top:25px;" src="IMG/hacao.jpg"
                                class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Food Tile</h5>
                                <h5>$2.3</h5>
                                <p class="card-text">Made italian Sauce, Chicken, and organice vegetables</p>
                                <input type="submit" style="background-color: #ff6b81; color:#fff;border-radius: 5%;"
                                    value="Oder Now">
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
            </div>
        </div>
        <!-- row3 -->
        <div class="row">
            <div class="col-md-12" style="background-color: #ececec;">
                <a href="#" style="text-decoration: none;">
                    <p style="color: #ff6b81; text-align: center; margin-top: 5px;">See All Foods</p>
                </a>
            </div>
        </div>
        <!-- row4 -->

    </div>
    <!-- container3 -->
    <div class="container">
        <div class="row">
               <div class="col-md-5" style="background-color: #fff;"></div>  
               <div class="col-md-2 p-img" style="background-color: #fff;">
                   <a href="https://www.facebook.com/thuong.tongquang.3"><img src="IMG/face.png" alt=""></a>
                   <a href="https://www.facebook.com/thuong.tongquang.3"><img src="IMG/is.png" alt=""></a>
                   <a href="https://www.facebook.com/thuong.tongquang.3"><img src="IMG/tw.png" alt=""></a>
               </div>  
               <div class="col-md-5" style="background-color: #fff;"></div>  
        </div>
        <!-- row 1 -->
       <div class="row">
       <p style="text-align: center;">All rights reserved. Designrd By  <span><a style="text-decoration: none; color:#ff6b81;" href="http://www.tlu.edu.vn/"> CSE.TLU</a></span></p>
       </div>
    </div>
</body>

</html>