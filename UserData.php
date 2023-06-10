<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){ //if the information is sent through post method then only proceed

    $conn = mysqli_connect('localhost','root'); //Connencting to mysql Database

    mysqli_select_db($conn,'visitor_info'); //Selecting the Database to insert data in tables

    //Creating variables for all the info received
    $Name = $_POST['Nam'];
    $phone = $_POST['Mobile'];
    $Mail = $_POST['email'];
    $company=$_POST['Company'];
    $city=$_POST['City'];
    $state=$_POST['State'];
    $Comment = $_POST['comment'];


    //creating a variable that stores Query to insert data
    $query = "INSERT INTO customer_data (`Name`, `Mobile`, `Email`, `Company`, `City`, `State`, `Comment`) VALUES ('$Name','$phone','$Mail','$company','$city','$state','$Comment')";

    //Executing the mysql Query
    mysqli_query($conn,$query);

}
?>


<!DOCTYPE html>
<html>
<head><title>call back </title>
    <link rel="stylesheet" href="form.css" type="text/css">
</head>
<body style="margin:0">

    <!--Body starts here-->
    <section id="body" class="form-container">

    <!--code form Card Starts-->
        <div class="contact_us-form">

        <!--Form Starts-->
            <form name="reg" action="" method="post">
                <fieldset>
                    <legend><h1>Get a call back</h1></legend> 

                    <!--inserting Table in form for organized lables and input fields-->
                    <table rules="none" cellpadding=10>
                        <tr>
                            <td>
                                <label for="Nam">Name:</label></td>  
                            <td>
                                <input type="text" name="Nam" id="Nam" placeholder="Full Name" value="" required ></td>
                        </tr>
                        <tr>  
                            <td>
                                <label>Mobile no:</label></td> 
                            <td>
                                <input type="tel" name="Mobile" placeholder="Example: 5760749983 " value="" required></td>
                        </tr>
                        <tr>
                            <td>
                                <label>Email Id:</label></td> 
                            <td>
                                <input type="email" name="email" placeholder="Example@xyz.com" value="" required></td>
                        </tr>
                        <tr>
                            <td>
                                <label>Company Name:</label></td>  
                            <td>
                                <input type="text" name="Company" placeholder="Company Name" value="" required></td>
                        </tr>
                        <tr>
                            <td>
                                <label>City/Town:</label></td>  
                            <td>
                                <input type="text" name="City" placeholder="City/Town" value="" required></td>
                        </tr>
                        <tr>
                            <td>
                                <label>State:</label></td>  
                            <td>
                                <input type="text" name="State" placeholder="State" value="" required></td>
                        </tr>
                        <tr >
                            <td valign="top">
                                <label>Comments:(If Any)</label></td> 
                            <td>
                                <textarea rows="4" cols="30" name="comment" value="" placeholder="Comment...(Upto 255 characters Only)" required></textarea></td>
                        </tr>
                    </table>
                    <!--Input Fields and Table Ends-->

                    <br>
                    <input type="submit" class="submit" value="submit" onclick="submit();">
                    <input type="reset" class="cancel" value="Cancel" onclick="cancel();">

                </fieldset>
            </form>
            <!--Code For Forms Ends-->

        </div>
    </section>
    <script type="text/javascript" src="userdata.js"></script><!--Loading the javascript for form Verification-->
</body>
</html>
