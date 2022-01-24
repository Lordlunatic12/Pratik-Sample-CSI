<?php
    $conn = mysqli_connect("localhost", "root", "", "csi_registration");
    if ($conn) {
        echo '<script>alert("Database connected successfully")</script>';
    } else {
        echo '<script>alert("Database connection failed")</script>';
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $Fname = $_POST["Fname"];
		$Lname = $_POST["Lname"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirm_password = $_POST["confirm_password"];
        $mobile = $_POST["mobile"];
        $dob = $_POST["dob"];
        $gender = $_POST["Gender"];
        $address = $_POST["address"];
        $city = $_POST["city"];
        $pincode = $_POST["pin"];
        $state = $_POST["state"];
        $qualification = $_POST["qualification"];
		$Specialization = $_POST["Specialization"];


        $sql = "INSERT INTO Registered_Users VALUES ('$Fname', '$Lname', '$email', '$password', '$confirm_password', '$mobile', '$dob', '$gender', '$address', '$city', '$pincode', '$state', '$qualification', '$Specialization' );";

        $result = mysqli_query($conn,$sql);

        if ($result) {
            echo '<script>alert("Registration Successful")</script>';
        } else {
            echo '<script>alert("Some error occurred")</script>';
        }
    }
?>


   
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta content="width=device-width,initial-scale=1"name="viewport">
<link href="RegForm.css" rel=stylesheet>
<script src="RegForm.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <head>
        <link href="./csifavicon.jpg" rel="icon" type="image/jpg">
        <title>
           CSI Pratik Bhosale
        </title>
    </head>
    <body>
    
        <!-- NAVIGATION BAR-->
        <section id="nav-bar">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbarNavDropdown"></div>
                          <ul class="title">
                                <li>
                                    <img src="./logo.png" >
                                    <span><b>Computer Society Of India</b><sup>&trade;</sup><sub><b>Since 1965</b></sub></span>
                                </li>  
                           </ul>
                           <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./Homepage.html">Home</a>
                                </li>
                            </ul>
                </div>
                   
            </nav>
        </section>

            <!--Sign-Up Form-->
            <div class="form-structor">
                <h3 style="color:black; font-size: 35px;"><br/><center>Sign-Up</center></h3> 
            <div class = "Reg-Form" align="center">
                <form name="MyForm" method="POST" action="#" onsubmit="return validateform()" >
                <table align="center" cellpadding="10" class="form-holder">

                    <!--First Name-->
                    <tr>
                        <td><b>First Name:</b></td>
                        <td>
                            <input type="text" name="Fname" required>
                        </td>
                    </tr>

                     <!--Last Name-->
                     <tr>
                        <td><b>Last Name:</b></td>
                        <td>
                            <input type="text" name="Lname" required>
                        </td>
                    </tr>

                    <!--Email-->
                    <tr>
                        <td><b>Email Id:</b></td>
                        <td>
                            <input type="email" name="email" required>
                        </td>
                    </tr>

                    <!--Password-->
                    <tr>
                        <td><b>Password:</b></td>
                        <td>
                            <input type="password" name="password" maxlength="10" minlength="5" required>
                            <p style="font-size: 15px;padding-top: 0px;padding-bottom: 5px;">(min = 5,max = 10 characters)</p>
                        </td>
                    </tr>

                    <!--Confirm Password-->
                    <tr>
                        <td><b>Confirm Password:</b></td>
                        <td>
                            <input type="password" name="confirm_password" maxlength="10" minlength="5">
                        </td>
                    </tr>

                    <!--Mobile-->
                    <tr>
                        <td><b>Mobile No:</b></td>
                        <td>
                            <input type="tel" name="mobile" placeholder="XXXXXXXXXX" maxlength="10">
                        </td>
                    </tr>

                    <!--DOB-->
                    <tr>
                        <td><b>Date of Birth:</b></td>
                        <td>
                            <input type="date" name="dob" style="cursor:pointer">
                        </td>
                    </tr>

                    <!--Gender-->
                    <tr>
                        <td><b>Gender:</b></td>
                        <td>
                                <input type="radio" name="Gender"  value="Male">Male
                                <input type="radio" name="Gender"  value="Female">Female
                                <input type="radio" name="Gender"  value="Others">Others
                        </td>
                    </tr>

                    <!--Address-->
                    <tr>
                        <td><b>Address:</b></td>
                        <td>
                            <textarea name="address" rows="5" cols="22" ></textarea>
                        </td>
                    </tr>

                    <!--City-->
                    <tr>
                        <td><b>City:</b></td>
                        <td>
                            <input type="text" name="city">
                        </td>
                    </tr>

                    <!--Pin Code-->
                    <tr>
                        <td><b>Pin Code:</b></td>
                        <td>
                            <input type="number" name="pin" maxlength="6">
                        </td>
                    </tr>

                    <!--State-->
                    <tr>
                        <td><b>State:</b></td>
                        <td>
                            <input type="text" name="state">
                        </td>
                    </tr>

                    <!--Qualification-->
                    <tr>
                        <td><b>Qualification:</b></td>
                        <td>
                            <select name="qualification">
                                <option value="">Select Your Qualification</option>
                                <option value="Diploma">Diploma</option>
                                <option value="Graduate">Graduate</option>
                                <option value="BE/BTech">BE/BTech</option>
                                <option value="ME/MTech">ME/MTech</option>
                                <option value="ME/MTech">ME/MTech</option>
                                <option value="PHD">PHD</option>
                            </select>
                        </td>
                    </tr>

                    <!--Specialization-->
                    <tr>
                        <td><b>Specialization:</b></td>
                        <td>
                            <br/><input type="radio" name="Specialization" value="Computer_Science">Computer Science<br/>
                                <input type="radio" name="Specialization" value="Information_Technology">Information Technology<br/>
                                <input type="radio" name="Specialization" value=">Computer_Application">Computer Application
                        </td>
                    </tr>

                    <!--Submit and Reset-->
                    <tr>
                        <td align="center" colspan="3"><b>
                            <input type="submit" class="submit-btn" onclick="">
                            <input type="reset" class="reset-btn"></b>
                    </td>
                </tr>
                </table>
                </form> 
            </div>
            </div>
            
            <!--Copyright and HyperLinks-->
            <footer id="footer">
                <div class="hyperlinks">
                    <b>&copy;Designed by <a href="https://github.com/Lordlunatic12" target="_blank">Pratik Bhosale</a>&nbsp&nbsp
                    <a href="https://github.com/Lordlunatic12" class="fa fa-github" target="_blank"></a>&nbsp&nbsp
                    <a href="https://www.linkedin.com/in/pratik-bhosale-121101/" class="fa fa-linkedin" target="_blank" style="color:#0077b5"></a></b>
                </div>
            </div>
            </footer>
    </body>
    
        