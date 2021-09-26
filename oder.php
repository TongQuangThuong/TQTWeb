<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Oder</title>
    <link rel="stylesheet" href="Oder.css">
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


    <!-- container 1  -->
    <div class="container">
        <div class="row">
            <div class="col-md-3 p-imgleft" style="background-color:#47b4d1;">
                <img src="IMG/pito.jpg" alt="">
            </div>
            <div class="col" style="background-color: #47b4d1;">
                <!-- main 1 -->
                <div class="row">
                    <p style="color: #fff;text-align: center;font-size:30px; padding-top:7.6rem;">Fill this form to
                        confirm your oder.</p>
                </div>
                <div class="row p-select">
                    <form action="">
                        <fieldset style="border: 1px solid #fff;">
                            <legend>Select Food</legend>
                            <div class=" mb-3" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-md-4 p-imgtit">
                                        <img src="IMG/title.jpg" style="padding: 10px;" class="img-fluid rounded-start"
                                            alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Food Title</h5>
                                            <h5>$2.3</h5>
                                            <p class="card-text">Quantity</p>
                                            <input style="width: 20.8rem;" type="number" id="quantity" min="1" max="20"
                                                value="1">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </fieldset>
                    </form>



                </div>
                <!-- row2 select -->
                <div class="row" style="padding-top: 20px;">

                    <form action="">

                        <fieldset style="border: 1px solid #fff;">
                            <legend>Delivery Details</legend>
                            <div class="mb-3" style="padding: 20px;">
                                <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="  E.g.Vijay Thapa">
                                <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder=" E.g.9843xxxxxx">
                                <label for="exampleFormControlInput1" class="form-label">Email</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="  E.g.hi@vijaythapa.com">
                            </div>
                            <div class="mb-3" style="padding-left: 20px; padding-right:20px;">
                                <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="8"></textarea>
                            </div>
                            <button style="background-color: #ff6b81;color: #fff;margin-left: 20px;">Confirm
                                Oder</button>

                        </fieldset>
                    </form>

                </div>
                <!-- row3 -->

            </div>
            <div class="col-md-3" style="background-color: #47b4d1;"></div>
        </div>
    </div>
    <!-- container 2 -->
    <div class="container">
        <div class="row">
               <div class="col-md-5" style="background-color: #fff;"></div>  
               <div class="col-md-2 p-img" style="background-color: #fff;">
                   <a href="https://www.facebook.com/profile.php?id=100019319836961"><img src="IMG/face.png" alt=""></a>
                   <a href="https://www.facebook.com/profile.php?id=100019319836961"><img src="IMG/is.png" alt=""></a>
                   <a href="https://www.facebook.com/profile.php?id=100019319836961"><img src="IMG/tw.png" alt=""></a>
               </div>  
               <div class="col-md-5" style="background-color: #fff;"></div>  
        </div>
        <!-- row 1 -->
       <div class="row">
       <p style="text-align: center;">All rights reserved. Designrd By  <span><a style="text-decoration: none; color:#ff6b81;" href="http://www.tlu.edu.vn/"> CSE.TLU</a></span></p>
       </div>
    </div>
    <!-- container3 -->
</body>

</html>