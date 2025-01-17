<?php 
session_start();
if(!$_SESSION['calcuser']){
	header("Location: index.php");
}


?>




<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Net-Worth Calculator</title>
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous"
        />
        <link
        rel="stylesheet"
        href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
        crossorigin="anonymous"
      />
        <link rel="stylesheet" href="main.css" />
    </head>
    <body>
        <!-- Sign-in page -->
        <nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top"  style="background-color: rgb(38, 155, 120)">
            <span>
                    <img
                    src="https://res.cloudinary.com/izik4004/image/upload/v1569344486/Group.png" 
                    alt="logo"
                    style="width: 90px; height: 30px"
                    id="logo-img"
                    />
                </span>
                    <ul class="navbar-nav mr-auto">
                          </ul>
                          <ul class="navbar-nav mr-auto">
                            </ul>
              <ul class="navbar-nav text-dark mr-3">
                    <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user-circle"></i><span class="font-weight-bold"><?php echo $_SESSION['calcuser']; ?></span>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="position: absolute;background-color: rgb(38, 155, 120)">
                            <option value="account">Account</option>
                            <option value="home">Home</option>
                            <option value="signout">Sign OUt</option>
                      </div>
                    </li>
                  </ul>
                  <ul class="navbar-nav mr-3">
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span value="" class="">&#8358</span>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="position: absolute;">
                            <span value=""  class="dropdown-item">&#8352</span>
                            <span value=""  class="dropdown-item">&#8360</span>
                            <span value=""  class="dropdown-item">&#8364</span>
                            <span value=""  class="dropdown-item">&#8371</span>
                            <span value=""  class="dropdown-item">&#8368</span>
                            <span value=""  class="dropdown-item">&#8367</span>
                            <span value=""  class="dropdown-item">&#8366</span>
                            <span value=""  class="dropdown-item">&#8365</span>
                      </div>
                    </li>
                  </ul>
                  <a class="text-light font-weight-bold" href="logout.php">Sign out</a>
          </nav>
        <div class="container-fluid" style="background-color: rgb(65, 89, 94)">
            <h3 class="text-center pt-1 h2 text-light">Welcome <span><?php echo $_SESSION['calcuser']; ?></span></h3>
            <div class="container-fluid bg-light">
                    <h3 class="text-center pt-3 text-dark">Net-Worth Calculator</h3>
                    <div class="row">
                        <div class="col-md-10 m-auto" style="color: rgb(38, 155, 120)">
                                <nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top bg-dark">
                                       
                            <span class="h4">NAME OF ASSETS</span>
                                                <ul class="navbar-nav mr-auto">
                                                      </ul>
                                                      <ul class="navbar-nav mr-auto">
                                                        </ul>
                                                        <span class="float-right h4 mr-auto">MONETARY WORTH</span>
                                          
                                         </nav>
                                         <form action="" method="" class="justify-content-center m-auto">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group m-2">
                                                            <input
                                                                type="text"
                                                                name="value"
                                                                id="value"
                                                                placeholder="Asset 1"
                                                                class="p-4 form-control form-control-lg pl-5"
                                                                required
                                                            />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group m-2">
                                                            <input
                                                                type="text"
                                                                name="value"
                                                                id="value"
                                                                placeholder=" ASSET 1 monetary worth"
                                                                class="p-4 form-control form-control-lg pl-5"
                                                                required
                                                            />
                                                        </div>
                                                    </div> 
                                                        <div class="col-md-6">
                                                                <div class="form-group m-2">
                                                                    <input
                                                                        type="text"
                                                                        name="value"
                                                                        id="value"
                                                                        placeholder=" Asset 2"
                                                                        class="p-4 form-control form-control-lg pl-5"
                                                                        required
                                                                    />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group m-2">
                                                                    <input
                                                                        type="text"
                                                                        name="value"
                                                                        id="value"
                                                                        placeholder="  ASSET 2 monetary worth"
                                                                        class="p-4 form-control form-control-lg pl-5"
                                                                        required
                                                                    />
                                                                </div>
                                                            </div> 
                                                                <div class="col-md-6">
                                                                    <div class="form-group m-2">
                                                                        <input
                                                                            type="text"
                                                                            name="value"
                                                                            id="value"
                                                                            placeholder=" Asset 3"
                                                                            class="p-4 form-control form-control-lg pl-5"
                                                                            required
                                                                        />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group m-2">
                                                                        <input
                                                                            type="text"
                                                                            name="value"
                                                                            id="value"
                                                                            placeholder="  ASSET 3 monetary worth"
                                                                            class="p-4 form-control form-control-lg pl-5"
                                                                            required
                                                                        />
                                                                    </div>
                                                                </div> 
                                                                    <div class="col-md-6">
                                                                        <div class="form-group m-2">
                                                                            <input
                                                                                type="text"
                                                                                name="value"
                                                                                id="value"
                                                                                placeholder=" Asset 4"
                                                                                class="p-4 form-control form-control-lg pl-5"
                                                                                required
                                                                            />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group m-2">
                                                                            <input
                                                                                type="text"
                                                                                name="value"
                                                                                id="value"
                                                                                placeholder="  ASSET 4 monetary worth"
                                                                                class="p-4 form-control form-control-lg pl-5"
                                                                                required
                                                                            />
                                                                        </div>
                                                                    </div>                                       
                                                </div>
                                                <div class="form-group p-2">
                                                    <input
                                                        type="submit"
                                                        name="submit"
                                                        id="submit"
                                                        value="CLEAR"
                                                        class="p-2 btn col-8 col-md-1 text-light font-weight-bold"
                                                        style="background-color: rgb(38, 155, 120); box-shadow: -1px 1px 2px black"
                                                    />
                                                </div>
                                            </form>
                        </div>
                    </div>
                    <div class="row mt-4">
                            <div class="col-md-10 m-auto" style="color: rgb(38, 155, 120)">
                                <nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top bg-dark">
                                       
                                    <span class="h4">NAME OF LIABILITY</span>
                                                        <ul class="navbar-nav mr-auto">
                                                              </ul>
                                                              <ul class="navbar-nav mr-auto">
                                                                </ul>
                                                                <span class="float-right h4 mr-auto">MONETARY WORTH</span>
                                                  
                                                 </nav>
                                             <form action="" method="" class="justify-content-center m-auto">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group m-2">
                                                                <input
                                                                    type="text"
                                                                    name="value"
                                                                    id="value"
                                                                    placeholder=" Liability 1"
                                                                    class="p-4 form-control form-control-lg pl-5"
                                                                    required
                                                                />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group m-2">
                                                                <input
                                                                    type="text"
                                                                    name="value"
                                                                    id="value"
                                                                    placeholder="LIABILITY 1 monetary worth"
                                                                    class="p-4 form-control form-control-lg pl-5"
                                                                    required
                                                                />
                                                            </div>
                                                        </div> 
                                                            <div class="col-md-6">
                                                                    <div class="form-group m-2">
                                                                        <input
                                                                            type="text"
                                                                            name="value"
                                                                            id="value"
                                                                            placeholder="  Liability 2"
                                                                            class="p-4 form-control form-control-lg pl-5"
                                                                            required
                                                                        />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group m-2">
                                                                        <input
                                                                            type="text"
                                                                            name="value"
                                                                            id="value"
                                                                            placeholder=" LIABILITY 2 monetary worth"
                                                                            class="p-4 form-control form-control-lg pl-5"
                                                                            required
                                                                        />
                                                                    </div>
                                                                </div> 
                                                                    <div class="col-md-6">
                                                                        <div class="form-group m-2">
                                                                            <input
                                                                                type="text"
                                                                                name="value"
                                                                                id="value"
                                                                                placeholder="  Liability 3"
                                                                                class="p-4 form-control form-control-lg pl-5"
                                                                                required
                                                                            />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group m-2">
                                                                            <input
                                                                                type="text"
                                                                                name="value"
                                                                                id="value"
                                                                                placeholder=" LIABILITY 3 monetary worth"
                                                                                class="p-4 form-control form-control-lg pl-5"
                                                                                required
                                                                            />
                                                                        </div>
                                                                    </div> 
                                                                        <div class="col-md-6">
                                                                            <div class="form-group m-2">
                                                                                <input
                                                                                    type="text"
                                                                                    name="value"
                                                                                    id="value"
                                                                                    placeholder="  Liability 4"
                                                                                    class="p-4 form-control form-control-lg pl-5"
                                                                                    required
                                                                                />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group m-2">
                                                                                <input
                                                                                    type="text"
                                                                                    name="value"
                                                                                    id="value"
                                                                                    placeholder=" LIABILITY 4 monetary worth"
                                                                                    class="p-4 form-control form-control-lg pl-5"
                                                                                    required
                                                                                />
                                                                            </div>
                                                                        </div>                                       
                                                    </div>
                                                    <div class="form-group p-2">
                                                        <input
                                                            type="submit"
                                                            name="submit"
                                                            id="submit"
                                                            value="CLEAR"
                                                            class="p-2 btn col-8 col-md-1 text-light font-weight-bold"
                                                            style="background-color: rgb(38, 155, 120); box-shadow: -1px 1px 2px black"
                                                        />
                                                    </div>
                                                    <div class="form-group col-9 col-md-3 mb-5 mt-3 m-auto">
                                                        
                                                    <a href="#" class="btn pr-3 p-md-3 p-sm-2 pl-0 text-light text-center mb-5 col-12 mt-4" style="background-color:rgb(38, 155, 120); box-shadow: -1px 1px 2px black ">Your total net worth:</a>
                                                    </div>
                                                </form>
                            </div>
                        </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="./app.js"></script>
    </body>
</html>
