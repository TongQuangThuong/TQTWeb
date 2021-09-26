<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="managerCategories.css">
    <title>Danh mục người quản lý</title>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light " style="background-color: #fff;">
        <div class="container">

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav p-menu" style="margin-left: 450px;">
                    <a class="nav-link" style="color: #ff6b81;" href="home.php">Home</a>
                    <a class="nav-link" style="color: #ff6b81;" href="#">Admin</a>
                    <a class="nav-link" style="color: #ff6b81;" href="#">Categories</a>
                    <a class="nav-link" style="color: #ff6b81;" href="#">Food</a>
                    <a class="nav-link" style="color: #ff6b81;" href="#">Oder</a>
                    <a class="nav-link" style="color: #ff6b81;" href="#">Logout</a>
                </div>
            </div>

        </div>
    </nav>
    
    


<!-- container 1  -->
<div class="container"><hr style="color: black; font-size: 5px; margin-top: -3px;">
        <div class="row p-mana">
            <div class="col-md-12">
                <h3>Manager Categories</h3>
            </div>
        </div>
    </div>
<!-- container 2 -->
<div class="container">
        <div class="col-md-12">
            <Button style="width: 130px;height: 42px;background-color: #1e90ff;color: #fff;">Add Categories</Button>
        </div>
    </div>
<!-- container 3 -->
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table" >
                    <thead>
                        <tr>
                            <th scope="col">S.N.</th>
                            <th scope="col">Title</th>
                            <th scope="col">Image</th>
                            <th scope="col">Featured</th>
                            <th scope="col">Active</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="table_lin">
                            <th scope="row">1.</th>
                            <td>Pizza</td>
                           
                            <td> <img style="width: 6.73rem; height:8.26rem ;" src="IMG/piza1.jpg" alt=""> </td>
                             <td>Yes</td>
                            <td>Yes</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example"
                                    style="padding: 5px;">
                                   
                                    <button type="button" class="btn"
                                        style="background-color: #7bed9f;color: black;margin-left: 5px;">Update
                                        Categories</button>
                                    <button type="button" class="btn"
                                        style="background-color: #ff6b81;color: #fff;margin-left: 5px;">Delete
                                        Categories</button>
                                </div>
                            </td>
                        </tr>
                        <tr class="table_lin">
                            <th scope="row">2.</th>
                            <td>Burger</td>
                            
                            <td><img style="width: 6.73rem; height:8.26rem ;" src="IMG/buger.jpg" alt=""> </td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example"
                                    style="padding: 5px;">
                                    
                                    <button type="button" class="btn"
                                        style="background-color: #7bed9f;color: black;margin-left: 5px;">Update
                                        Categories</button>
                                    <button type="button" class="btn"
                                        style="background-color: #ff6b81;color: #fff;margin-left: 5px;">Delete
                                        Categories</button>
                                </div>
                            </td>
                        </tr>
                        <tr class="table_lin">
                            <th scope="row">3.</th>
                            <td>Momo</td>
                            
                            <td><img style="width: 6.73rem; height:8.26rem ;" src="IMG/mo.jpg" alt=""> </td>
                            <td>No</td>
                            <td>Yes</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example"
                                    style="padding: 5px;">
                                    
                                    <button type="button" class="btn"
                                        style="background-color: #7bed9f;color: black;margin-left: 5px;">Update
                                        Categories</button>
                                    <button type="button" class="btn"
                                        style="background-color: #ff6b81;color: #fff;margin-left: 5px;">Delete
                                        Categories</button>
                                </div>
                            </td>
                        </tr>
                        <tr class="table_lin">
                            <th scope="row">4.</th>
                            <td>Momo</td>
                            
                            <td><img style="width: 6.73rem; height:100% ;" src="IMG/tr4.jpg" alt=""> </td>
                            <td>No</td>
                            <td>Yes</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example"
                                    style="padding: 5px;">
                                    
                                    <button type="button" class="btn"
                                        style="background-color: #7bed9f;color: black;margin-left: 5px;">Update
                                        Categories</button>
                                    <button type="button" class="btn"
                                        style="background-color: #ff6b81;color: #fff;margin-left: 5px;">Delete
                                        Categories</button>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>

    </div>
<!-- container 4 -->
<div class="container">
        <div class="row">
            <div class="col-md-12" style="background-color: #ff6b81;">
                <p style="text-align: center; color: #fff;">2020 All righst reserved. Food house. Developed By - <span><a href="#">cse 485</a></span></p>
            </div>
        </div>
    </div>
<!-- container 5 -->
</body>
</html>