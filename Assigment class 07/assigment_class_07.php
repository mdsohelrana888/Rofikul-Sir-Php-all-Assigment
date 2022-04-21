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
                .quiz-container {
    margin: auto;
    height: auto;
    background-color: #ffffff;
    width: 460px;
    max-width: 100%;
    border-radius: 5px;
}
.quiz-header{
    padding: 45px;
}
h2{
    padding: 15px 20px;
    text-align: center;
}
li{
    list-style: none;
    padding: 6px 0;
    display: flex;
    align-items: center;
}
li label{
    padding-left: 8px;
}
#questions{
    margin: 0;
    text-align: left;
    padding: 0 0 15px 0;
}
button{
    width: 100%;
    border: none;
    padding: 15px;
    font-size: 18px;
    color: #ffffff;
    background-color: #b71540;
    transition: 0.5s;
    border-radius: 0 0 5px 5px;
}
button:hover{
    background-color: #850628;
}
        </style>
</head>
<body>
        <!-- Question 01:
Make a simple exam design using html css
Then make a exam by using these questions
Your questions must be come randomize order -->
<?php 
        $questionSets   =  [
                        [
                        'question' => 'What does HTML stands for?',
                        'options'  => [
                                'Hypertext Machine language', 'Hypertext and links markup language.
                                ', 'Hypertext Markup Language.
                                ', 'Hightext machine language.
'
                        ]
                        ],
                        [
                        'question' => 'Which of the following HTML Elements is used for making any text bold ?
                        ',
                        'options'  => [
                                'P', 'B', 'Div', 'bold'
                        ]
                        ],
                        [
                        'question' => 'What is the font-size of the h1 heading tag?
                        ',
                        'options'  => [
                                '1.5 em
                                ', '2 em
                                ', '2.17 em
                                ', '3.5 em
                                '
                        ]
                        ],
                        [
                        'question' => 'How many heading tags are there in HTML5?

                        ',
                        'options'  => [
                                '2
                                ', '4
                                ', '7
                                ', '6
                                '
                        ]
                        ],
                        [
                        'question' => 'Which of the following attributes is used to add link to any element?
                        ',
                        'options'  => [
                                'newref
                                ', 'href
                                ', 'ref
                                ', 'link
                                '
                        ]
                        ],
                        [
                        'question' => '. 

                        What is the internet?
                        ',
                        'options'  => [
                                'A collection of webpages
                                ', '2 em
                                ', 'A server on a network
                                ', '3.5 em
                                '
                        ]
                        ],
                        [
                        'question' => 'You should save HTML files with which file extension?
                        ',
                        'options'  => [
                                '.jpg
                                ', '.html
                                ', '.em
                                ', '.php
                                '
                        ]
                        ],
                        [
                            'question' => 'You should save HTML files with which file extension?
                            ',
                            'options'  => [
                                    '.jpg
                                    ', '.html
                                    ', '.em
                                    ', '.php
                                    '
                            ]
                            ],
                            [
                                'question' => 'You should save HTML files with which file extension?
                                ',
                                'options'  => [
                                        '.jpg
                                        ', '.html
                                        ', '.em
                                        ', '.php
                                        '
                                ]
                                ],
                                [
                                    'question' => 'You should save HTML files with which file extension?
                                    ',
                                    'options'  => [
                                            '.jpg
                                            ', '.html
                                            ', '.em
                                            ', '.php
                                            '
                                    ]
                                    ],
        ];
        ?>
    <div class="quiz-container" id="quiz">
        <div class="quiz-header">
                <?php   
                shuffle($questionSets);
                foreach ($questionSets as $key => $questionSet) { 
                        
                        ?>
                
                <br><h2 id="questions"><?php echo 'Q'.++$key.")".$questionSet['question']; ?></h2>
            <ul>
            <?php   
                 
                        $newarrays = $questionSet['options'];
                        shuffle($newarrays);
                
                        foreach ($newarrays as $key => $option) {
                                
                        
                        ?>
                <li>
                    <input type="radio" name="answer1" class="answer" id="a"><label for="a" id="a_text"><?php echo $option; ?></label></input>
                </li>
                <?php } ?>
            </ul>
            <?php } ?>
        </div>
        <button type="button" id="button">Submet</button>
    </div>

    <br>
    <br>
    <br>
    <br>
    <br
<!--Question 02:=====================================================================
Let’s make a website which only contains our teams section.
Now create an array of our teams at least three elements and make the our team section dynamic using php.
Make an array of our teams including image
Make a section of our team by using html css
And dynamic the section by php -->
        <?php 
$TeamMembers          =[ 
        ['Socailicon' => '<i class = "fa fa-facebook-f"></i> <i class           = "fa fa-twitter"></i> <i class           = "fa fa-instagram"></i> <i class = "fa fa-linkedin"></i>' , 'name' => 'Jillur Rahman', 'bloodgroup'       => 'O+', 'age'  => 29 , 'Postion' => 'CEO','image'           => 'image1.jpg',
     
        'link' => ['https://www.facebook.com/','https://www.facebook.com/','https://www.facebook.com/'],
],

        ['Socailicon' => '<i class = "fa fa-facebook-f"></i> <i class           = "fa fa-twitter"></i> <i class           = "fa fa-instagram"></i> <i class = "fa fa-linkedin"></i>' , 'name' => 'Rofikul Islam Rafi ', 'bloodgroup' => 'AB+', 'age' => 30 , 'Postion' => 'Instructor','image'    => 'image2.jpg',
        'link' => ['https://www.facebook.com/','https://www.facebook.com/','https://www.facebook.com/'],

],



        ['Socailicon' => '<i class = "fa fa-facebook-f"></i> <bloodgroupi class = "fa fa-twitter"></bloodgroupi> <i class = "fa fa-instagram"></i> <i class = "fa fa-linkedin"></i>' , 'name' => 'Labib Hasan Rana', 'bloodgroup'    => 'O-', 'age'  => 20 , 'Postion' => 'Co-Instructor','image' => 'image3.jpg',

        'link' => ['https://www.facebook.com/','https://www.facebook.com/','https://www.facebook.com/'] 
],

        ['Socailicon' => '<i class = "fa fa-facebook-f"></i> <i class           = "fa fa-twitter"></i> <i class           = "fa fa-instagram"></i> <i class = "fa fa-linkedin"></i>' , 'name' => 'Nurul Islam','bloodgroup'          => 'B+',  'age' => 26 , 'Postion' => 'Instructor','image'    => 'image4.jpg' ,
        'link' => ['https://www.facebook.com/','https://www.facebook.com/','https://www.facebook.com/'] 
]
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

                                        <?php
                                        $singleicon = $TeamMember['link'];
                                        
                                        ?>
                                                <li class="list-inline-item"><a href="<?php
                                                 echo $singleicon[0];
                                                ?>" class="social-link"><?php echo $TeamMember['Socailicon']; ?></a></li>
                                                <li class="list-inline-item"><a href="<?php
                                                 echo $singleicon[1];
                                                ?>" class="social-link"></a></li>
                                                <li class="list-inline-item"><a href="<?php
                                                 echo $singleicon[2];
                                                ?>" class="social-link"></a></li>
                                                <li class="list-inline-item"><a href="<?php
                                                 echo $singleicon[3];
                                                ?>" class="social-link"></a></li>
                                        </ul>
                                </div>
                        </div><!-- End -->
                        <?php } ?>
                </div>
        </div>




</body>
</html>