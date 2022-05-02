<?php

    //Starts a session on server to allow connection to database and local host on Apache
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index.css">

    <title>Document</title>
</head>
<body>

    <nav>
        <!-- Logo at top of page -->
        <p>BetterHaven</p>
        <!-- Beginning of header -->
        
        <ul>
        <!-- PHP to show different components of web site based on whether user is logged in or not -->
        <?php
            //Activates if user is logged into session with their User ID
            if(isset($_SESSION["useruid"])){
                //Command to create list of different site navigation tabs
                echo 
                
                "<li><a href='index.php'>Home</a>
            
                    <ul>
                        <li><a href='#'>Campus Resources</a></li>
                        <li><a href='#'>Clearfield Campus</a></li>
                    </ul>
                </li>
                
                
                <li><a href='#'>Admissions</a></li>


                <li><a href='#'>Registrar</a>
            

                    <ul>
                        <li><a href='#'>Registrar Office Information and Announcements</a></li>
                        <li><a href='#'>Academic Calenders</a></li>
                        <li><a href='#'>Academic/Catalog Information</a></li>
                        <li><a href='#'>Graduation</a></li>
                        <li><a href='#'>Registration Information - Fall and Spring Semester</a></li>
                        <li><a href='#'>Registration Information - Winter Intersession</a></li>
                        <li><a href='#'>Registration Information - Summer Sessions</a></li>
                        <li><a href='#'>Transfer Credit Information</a></li>
                        <li><a href='#'>Veterans Information</a></li>
                        <li><a href='#'>Students - Verify Information</a></li>


                    </ul>

            </li>

            <li><a href='#'>Parents</a></li>

            <li><a href='#'>myHaven Help</a></li>
            
            <li><a href='#'>New Students</a>
            
                <ul>
                    <li><a href='#'>Guide for New Students</a></li>
                    <li><a href='#'>Getting Started</a></li>
                    <li><a href='#'>Orienting to Campus</a></li>
                    <li><a href='#'>Financial</a></li>
                    <li><a href='#'>Academic</a></li>
                    <li><a href='#'>Student Life</a></li>

                </ul>

            </li>
            <li><a href='#'>Student</a>
                <ul>
                    <li><a href='#'>Academic Information</a></li>
                    <li><a href='#'>Degree Information</a></li>
                    <li><a href='#'>Course Schedule and Registration</a></li>
                    <li><a href='#'>Housing and Dining Self Service</a></li>
                    <li><a href='#'>National Student Clearinghouse</a></li>
                    <li><a href='#'>Student myHaven Help</a></li>

                </ul>

            </li>

           
            
            <li><a href='#'>Student Accounts</a>
            
                <ul>
                    <li><a href='#'>Pay Bill or Add Flex</a></li>
                    <li><a href='#'>My Student Account</a></li>
                    <li><a href='#'>Office Policies</a></li>
                    <li><a href='#'>Important Links</a></li>
                    <li><a href='#'>SFS Staff</a></li>
                </ul>
            
            </li>
            <li><a href='#'>Financial Aid</a>
                <ul>
                    <li><a href='#'>General Information</a></li>
                    <li><a href='#'>Financial Aid Overview</a></li>
                    <li><a href='#'>Summer Financial Aid</a></li>
                    <li><a href='#'>Military Education</a></li>
                    <li><a href='#'>Graduate Students</a></li>
                </ul>

            </li>
            
            <li><a href='#'>My Pages</a></li>
            <li><a href='#'>Forms</a>
            
                <ul>
                    
                    <li><a href='#'>FERPA</a></li>
                    <li><a href='#'>Students - Verify Information</a></li>
                    <li><a href='#'>Withdrawal/Not Returening Form</a></li>


                </ul>

            </li>
            <li><a href='#'>Quick Links</a>
            
                <ul>
                    <li><a href='#'>myHaven Help</a></li>
                    <li><a href='#'>Acceptable Use Policy</a></li>
                    <li><a href='#'>LHU Internal Community Web Site</a></li>
                    <li><a href='#'>LHU E-Mail</a></li>
                    <li><a href='#'>D2L - Desire2Learn</a></li>
                    <li><a href='#'>Student Handbook</a></li>
                    <li><a href='#'>PASSHE News</a></li>
                    <li><a href='#'>Bookstore</a></li>

                </ul>
                
            </li>";

                

            echo "<li><a href='includes/logout.inc.php'>Logout</a></li>";
            
            //Executes if user is not logged in: still shows Home, Admissions, Registrar, and Parent info
            }else{

                echo 
                
                "<li><a href='index.php'>Home</a>
            
                    <ul>
                        <li><a href='#'>Campus Resources</a></li>
                        <li><a href='#'>Clearfield Campus</a></li>
                    </ul>
                </li>
            
            
                <li><a href='#'>Admissions</a></li>


                <li><a href='#'>Registrar</a>
        

                    <ul>
                        <li><a href='#'>Registrar Office Information and Announcements</a></li>
                        <li><a href='#'>Academic Calenders</a></li>
                        <li><a href='#'>Academic/Catalog Information</a></li>
                        <li><a href='#'>Graduation</a></li>
                        <li><a href='#'>Registration Information - Fall and Spring Semester</a></li>
                        <li><a href='#'>Registration Information - Winter Intersession</a></li>
                        <li><a href='#'>Registration Information - Summer Sessions</a></li>
                        <li><a href='#'>Transfer Credit Information</a></li>
                        <li><a href='#'>Veterans Information</a></li>
                        <li><a href='#'>Students - Verify Information</a></li>


                    </ul>

                </li>

                <li><a href='#'>Parents</a></li>

                <li><a href='#'>myHaven Help</a></li>";


                // Includes the login bar so users can log in 
                include_once 'login.php';

                
            }

            ?>
            
            
            
            </ul>
    </nav>
    
</body>
</html>













<!-- 

<nav>
    <div>
        <a href="index.php"></a>
        <ul>
            
            
        </ul>
    </div>
</nav> -->