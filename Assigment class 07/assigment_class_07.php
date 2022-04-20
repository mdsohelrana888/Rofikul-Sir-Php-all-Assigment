<!doctype html>
<html lang="en">

<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                crossorigin="anonymous">

        <title>Assignments 07</title>
</head>

<body>

        <?php
$inputs = [
        ['name' => 'banana',  'qty' => 10, 'total_price' => 550], 
        ['name' => 'apple',  'qty' => 10, 'total_price' => 550], 
        ['name' => 'kajor',  'qty' => 10, 'total_price' => 550], 
        ['name' => 'pineapple',  'qty' => 10, 'total_price' => 550] 

];

//  foreach ($inputs as $key => $input) {
//          echo $input['name'];
//          echo "<br>";
         
//  }



?>
        <div class="container mt-5 ">
                <table class="table table-hover">
                        <thead>
                                <tr>
                                        <th scope="col"> No </th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                </tr>
                        </thead>
                        <tbody>
                        <?php   foreach ($inputs as $key => $input) {?>
                                <tr>
                                        <td><?php echo $key+1;?></td>
                                        <td><?php echo $input['name'];?></td>
                                        <td><?php echo $input['qty'];?></td>
                                        <td><?php echo $input['total_price'];?></td>
                                        
                                </tr>
                                <?php  }?>
                        </tbody>
                </table>
        </div>




        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                crossorigin="anonymous"></script>
</body>

</html>


<?php 
$TeamMember = ['name' => 'Nurul',  'age' => 26, 'Postion' => 'CEO' 'socialAccount' => '<i class="fa fa-facebook-f" aria-hidden="true"></i>','<i class="fa fa-whatsapp" aria-hidden="true"></i>'];


foreach ($TeamMember as $key => $value) {
       echo $value['name']
}

?>

