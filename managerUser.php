<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="managerUser.css">
    <title>Trang Quản lý</title>
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
    <hr style="color: black; font-size: 5px; margin-top: -3px;">
    <!-- container 1 -->
    <div class="container">
        <div class="row p-mana">
            <div class="col-md-12">
                <h3>Manager User</h3>
            </div>
        </div>
    </div>
    <!-- container 2 -->
    <div class="container">
        <div class="col-md-12">
            <Button style="width: 130px;height: 42px;background-color: #1e90ff;color: #fff;">Add new User</Button>
        </div>
    </div>
    <!-- container 3 -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">S.N.</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">Use Name</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example"
                                    style="padding: 5px;">
                                    <button type="button" class="btn"
                                        style="background-color: #1e90ff; color: #fff;margin-left: 5px;">Change
                                        Password</button>
                                    <button type="button" class="btn"
                                        style="background-color: #7bed9f;color: black;margin-left: 5px;">Update
                                        Admin</button>
                                    <button type="button" class="btn"
                                        style="background-color: #ff6b81;color: #fff;margin-left: 5px;">Delete
                                        Admin</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example"
                                    style="padding: 5px;">
                                    <button type="button" class="btn"
                                        style="background-color: #1e90ff; color: #fff;margin-left: 5px;">Change
                                        Password</button>
                                    <button type="button" class="btn"
                                        style="background-color: #7bed9f;color: black;margin-left: 5px;">Update
                                        Admin</button>
                                    <button type="button" class="btn"
                                        style="background-color: #ff6b81;color: #fff;margin-left: 5px;">Delete
                                        Admin</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example"
                                    style="padding: 5px;">
                                    <button type="button" class="btn"
                                        style="background-color: #1e90ff; color: #fff;margin-left: 5px;">Change
                                        Password</button>
                                    <button type="button" class="btn"
                                        style="background-color: #7bed9f;color: black;margin-left: 5px;">Update
                                        Admin</button>
                                    <button type="button" class="btn"
                                        style="background-color: #ff6b81;color: #fff;margin-left: 5px;">Delete
                                        Admin</button>
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