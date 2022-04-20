<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <!-- Latest compiled and minified CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
                integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
        <link rel="stylesheet" href="style.css">
        <style>
                body {
                        background: #e8cbc0;
                        background: -webkit-linear-gradient(to right, #e8cbc0, #636fa4);
                        background: linear-gradient(to right, #e8cbc0, #636fa4);
                        min-height: 100vh;
                        }
                        .social-link {
                        width: 30px;
                        height: 30px;
                        border: 1px solid #ddd;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        color: #666;
                        border-radius: 50%;
                        transition: all 0.3s;
                        font-size: 0.9rem;
                        }
                        .social-link:hover, .social-link:focus {
                        background: #ddd;
                        text-decoration: none;
                        color: #555;
                }
        </style>
</head>
<body>
<!--Question 02:=====================================================================
Let’s make a website which only contains our teams section.
Now create an array of our teams at least three elements and make the our team section dynamic using php.
Make an array of our teams including image
Make a section of our team by using html css
And dynamic the section by php -->
        <?php 
$TeamMembers          =[ 
        ['Socailicon' => '<i class = "fa fa-facebook-f"></i> <i class           = "fa fa-twitter"></i> <i class           = "fa fa-instagram"></i> <i class = "fa fa-linkedin"></i>' , 'name' => 'Jillur Rahman', 'bloodgroup'       => 'O+', 'age'  => 29 , 'Postion' => 'CEO','image'           => 'image1.jpg'],
        ['Socailicon' => '<i class = "fa fa-facebook-f"></i> <i class           = "fa fa-twitter"></i> <i class           = "fa fa-instagram"></i> <i class = "fa fa-linkedin"></i>' , 'name' => 'Rofikul Islam Rafi ', 'bloodgroup' => 'AB+', 'age' => 30 , 'Postion' => 'Instructor','image'    => 'image2.jpg'],
        ['Socailicon' => '<i class = "fa fa-facebook-f"></i> <bloodgroupi class = "fa fa-twitter"></bloodgroupi> <i class = "fa fa-instagram"></i> <i class = "fa fa-linkedin"></i>' , 'name' => 'Labib Hasan Rana', 'bloodgroup'    => 'O-', 'age'  => 20 , 'Postion' => 'Co-Instructor','image' => 'image3.jpg'],
        ['Socailicon' => '<i class = "fa fa-facebook-f"></i> <i class           = "fa fa-twitter"></i> <i class           = "fa fa-instagram"></i> <i class = "fa fa-linkedin"></i>' , 'name' => 'Nurul Islam','bloodgroup'          => 'B+',  'age' => 26 , 'Postion' => 'Instructor','image'    => 'image4.jpg'] 
];
?>
        <!-- card design Started  ================= -->
        <div class="container py-5">
                <div class="row text-center text-white">
                        <div class="col-lg-8 mx-auto">
                                <h1 class="display-4">Our Team Members </h1> </h1>
                        </div>
                </div>
        </div><!-- End -->
        <div class="container">
                <div class="row text-center">
                        <!-- Team item -->
                        <?php foreach ($TeamMembers as $key => $TeamMember) {
                                ?>
                        <div class="col-xl-3 col-sm-6 mb-5">
                                <div class="bg-white rounded shadow-sm py-5 px-4"><img
                                                src=<?php echo $TeamMember['image']; ?> alt=""
                                                width="100"
                                                class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                        <h5 class="mb-0"> <?php echo $TeamMember['Postion']; ?> </h5><span
                                                class="small text-uppercase text-muted"><?php echo $TeamMember['name']; ?></span><br><span
                                                class="small  text-muted">Age:<?php echo $TeamMember['age']; ?></span><br>
                                                <span
                                                class="small  text-muted">Blood Group:<?php echo $TeamMember['bloodgroup']; ?></span>
                                        <ul class="social mb-0 list-inline mt-3">
                                                <li class="list-inline-item"><a href="#" class="social-link"><i
                                                                        class="fa fa-facebook-f"></i></a></li>
                                                <li class="list-inline-item"><a href="#" class="social-link"><i
                                                                        class="fa fa-twitter"></i></a></li>
                                                <li class="list-inline-item"><a href="#" class="social-link"><i
                                                                        class="fa fa-instagram"></i></a></li>
                                                <li class="list-inline-item"><a href="#" class="social-link"><i
                                                                        class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                </div>
                        </div><!-- End -->
                        <?php } ?>
                </div>
        </div>




</body>
</html>