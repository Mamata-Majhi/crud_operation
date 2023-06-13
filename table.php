<?php
include './php/connection.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./color.css">
    <title>students data</title>
    <style>
        table,
        th,
        td {
            border: 2px solid black;
        }
        th,td{
            padding: 2px;
        }
    
       
    </style>

</head>

<body>
    <?php
    include './html/navbar.php';
    $sql="SELECT * FROM `data2`";
    $result=mysqli_query($conn,$sql);
    // if(isset($result))
    // {
    //     echo"hey";
    // }
     ?>
    <section>
        <table class="w-full">
            <tr class="bg-[#507D6E]">
                <th>S.N</th>
                <th>Id</th>
                <th>Photo</th>
                <th>Name</th>
                <th>Fathers_name</th>
                <th>Mothers_name</th>
                <th>Gender</th>
                <th>DOB</th>
                <th>E_mail</th>
                <th>Department</th>
                <th>Mobile</th>
                <th colspan="2">Action</th>

            </tr>

            <?php
            $counter=0;
            if(mysqli_num_rows($result)>0){
                while($rows=mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <td><?php echo ++$counter?></td>
                        
                        <td><?php echo $rows['id'];?></td>
                        <td><?php echo $rows['foto'];?></td>
                        <td><?php echo $rows['name'];?></td>
                        <td><?php echo $rows['fathers_name'];?></td>
                        <td><?php echo $rows['mothers_name'];?></td>
                        <td><?php echo $rows['gender'];?></td>
                        <td><?php echo $rows['dob'];?></td>
                        <td><?php echo $rows['email'];?></td>
                        <td><?php echo $rows['department'];?></td>
                        <td><?php echo $rows['mobile'];?></td>
                        <td><button type="submit" class="hover:text-blue-500 transition duration-400 ease-in-out"><a href="#">Edit</a></button></td>
                        <td><button type="submit" class="hover:text-red-500 transition duration-400 ease-in-out"><a href="#">Delete</a></button></td>
                    </tr>
                    <?php


                }
            }
            
            
            ?>

        </table>
    </section>



</body>

</html>