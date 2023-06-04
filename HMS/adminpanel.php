<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <style>
            *{
                margin: 0
            }
            .main-div{
                width:100%; 
                height:100vh;
                background-color: #92a8d1;
                display: flex;
                flex-direction:column;
                justify-content: center;
                align-items: center;
            }

            .center-div{
                width: 90%;
                height: 80vh;
                background: -webkit-linear-gradient(left, #5DADE2, #00c6ff);
                padding:20px 0 0 0;
                box-shadow: 0 10px 20px 0 rgba(0,0,0,.03);
                border-radius: 10px;
            }
            h1{
                font-size: 40px;
                color: #000;
                text-align:center;
                margin-top: -20px;
                margin-bottom: 20px;
            }
            table{
                border-collapse: collapse;
                background-color: hsla(89, 43%, 51%, 0.3);
                box-shadow: 0 10px 20px 0 rgba(0,0,0,0.3);
                border-radius: 10px;
                margin: auto;
            }
            th,td{
                border: 1px solid #f2f2f2;
                padding: 8px 30px;
                text-align: center;
                color: #000;
                font-weight: bold;
                font-size: 20px;
            }
            th{
                text-transform: uppercase;
                font-weight: 500;
            }
            td{
                font-size:13px;
            }

        </style>
    </head> 
    <body>
        <div class="main-div">
            <h1>List of Users visied to our Hotel </h1>
            <div class="Center-div">
                <div class="table">
                    <table>
                        <thread>
                            <tr>
                                <th>first_name</th>
                                <th>last_name</th>
                                <th>email</th>
                                <th>password</th>
                                <th>address</th>
                                <th>number</th>
                                <th>gender</th>
                            </tr>
                        </thread>
                        <tbody>
                        <?php 
                            include 'connection.php';

                            $selectquery = " select * from users";

                            $query = mysqli_query($conn,$selectquery);

                            $nums = mysqli_num_rows($query);

                            while($res = mysqli_fetch_array($query)){
                            ?>
                            
                            <tr>
                                <td><?php echo $res['first_name'];?></td>
                                <td><?php echo $res['last_name'];?></td>
                                <td><?php echo $res['email'];?></td>
                                <td><?php echo $res['password'];?></td>
                                <td><?php echo $res['address'];?></td>
                                <td><?php echo $res['number'];?></td>
                                <td><?php echo $res['gender'];?></td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>       
                </div>
            </div>
            
        </div>
    </body>
</html>
        
