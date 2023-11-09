
<?php
    // include "../../Connections/Database.php";
    // include "../../Helper/Styles/style.php";
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
</head>
    <body>
        <header>
            <div class="container">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                    <a class="navbar-brand" href="Registration.php">Inventory System</a>
                </div>
                </nav>
            </div>
        </header>


        <main>
            <section>
                <div class= "title col-md-12">
                    <h1>Registration Form</h1>
                </div>
            </section>
            <section>
                <form action = "../../Connections/submit.php" method = "post" class="row g-3" name = "myform" onsubmit="return validateForm()">
                    <div class="col-md-12">
                        <label for="fname" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="fname" name = "fname" title = "Enter your first name" >
                        
                    </div>
                    <div class="col-md-12">
                        <label for="lname" class="form-label">Last name</label>
                        <input type="text" class="form-control" id="lname" name = "lname"  title = "Enter your last name" >
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="col-md-12">
                        <label for="dob" class="form-label">Date of Birth</label>
                        <input class="form-control" type="date" name="DOB" id="dob"  title = "Enter your Date of Birth" >
                    </div>
                    <div class="col-md-12">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name = "email"  title = "Enter your Email Address" >
                    </div>
                    <div class="col-md-12">
                        <label for="phone" class = "form-label">Mobile Number</label>
                        <input type="tel" class=" form-control" id="phone" name = "phone"  title= "please enter you phone number without country code" placeholder = "Enter phone number without country code eg: 2345987452">
                    </div>      
                    <div class = "col-md-12">
                           <label class = "col-md-12" name = "gridRadios">Gender</label>
                            <div class="col-sm-10 col-md-12">
                                <div class = "form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="male">
                                    <label class="form-check-label" for="gridRadios1" name = "male">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="female">
                                    <label class="form-check-label" for="gridRadios2" name = "female">
                                        Female
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="others">
                                    <label class="form-check-label" for="gridRadios3" name = "others">
                                        Others
                                    </label>
                                </div>
                            </div>
                        </div>

                    <div class="col-md-12">
                        <label for="department" class="form-label">Department</label>
                        <input type="text" class="form-control" id="department" name = "department">
                    </div>

                    <div class="col-md-12">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name = "username" >
                    </div>
                    <div class="col-md-12">
                        <label for="passwd" class="form-label">Password</label>
                        <input type="password" class="form-control" id="passwd" name = "password"  >
                    </div>
                    <div class="col-md-12">
                        <label for="confirm" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="conform" name = "confirm"  >
                    </div>
                
                    
                    <div class="col-md-6">
                        <label for="profile" class="form-label">Upload Profile</label>
                        <input type="file" class="form-control" id="profile" name = "profile"  >
                    </div>
                    
                    <div class = "col-md-12">
                        <label for = "checkbox" class = "form-check-label">
                            <input type = "checkbox" id = "checkbox" name = "terms" >
                            Please agree <a href = "#"> terms</a> & <a href = "#"> Conditions</a>
                        </label>
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Address</label>
                            <div class="form-floating col-md-12">
                                <select class="country form-select" id="country" name = "country" >
                                    <?php
                                        $country = "SELECT name, id from countries";
                                        $result = mysqli_query($conn, $country);
                                        if (mysqli_num_rows($result) > 0) {
                                          // output data of each row
                                          while($row = mysqli_fetch_assoc($result)) {
                                            echo "<option value= ".$row["id"].">".$row["name"]."</option>";
                                            
                                        }
                                    } else {
                                        echo "0 results";
                                    }
                                    ?>
                                </select>
                                <label for="floatingSelectGrid" name = "country">Country</label>
                            </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <select id="state" class="state form-select" name = "state">
                                <!-- <option selected>Choose...</option> -->
                                
                            </select>
                            <label for="floatingSelectGrid">State</label>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-floating">
                            <select id="city" class="city form-select" name = "city">
                                <option selected>Select City</option>
                            </select>
                            <label for="floatingSelectGrid">City</label>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <label for="pincode" class="form-label">PIN/ZIP Code</label>
                        <input type="text" class="form-control" id="pincode" name = "pincode"  >
                    </div>
                    <div class="col-md-6">
                        <label for="District" class="form-label">District</label>
                        <input type="text" class="form-control" id="District" name = "District"  >
                    </div>
                    
                    <div class="col-md-12">
                        <label for="street" class="form-label">Street Address</label>
                        
                        <textarea id="addresss" cols="58" rows="5" name = "fulladdress"></textarea>
                    </div>
                    <div class="register col-12">
                        <input type = "submit" class="btn btn-primary" value = "Register" id = "submit">
                    </div>
                </form>        
            </section>
        </main>

        
        <footer>
            <div class = "copyright col-md-12">
                <h3>Copyright &copy; 2023</h3>
            </div>
        </footer>
    


        <script src = ../../Helper/javascript/validate.js></script>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- <script src= '../../Helper/javascript/Jquery/inventory.js'></script> -->
    <script>
       $(document).ready(function()
        {
            $('#country').on('change', function() {
            var countryID = $(this).val();
            alert(countryID);
            $.ajax({
                url: "../../Connections/states.php",
                type: "POST",
                data: { idofcountry: countryID },
                success : function (data) {
                    $("#state").html(data)
                }
                })
            });
        }); 
       $(document).ready(function()
        {
            $('#state').on('change', function() {
            var stateid = $(this).val();
            alert(stateid);
            $.ajax({
                url: "../../Connections/city.php",
                type: "POST",
                data: { id: stateid },
                success : function (data) {
                    $("#city").html(data)
                }
                })
            });
        }); 
    

    </script>
</html>

 



