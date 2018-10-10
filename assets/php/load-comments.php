<?php
        session_start();
 
header('Content-Type: text/css');


                include('connection.php');
                $commentnewCount=$_POST['commentnewCount'];
                $commentCurrentCount=$_POST['commentCurrentCount'];
                $sql="select * from comments limit $commentCurrentCount,$commentnewCount";
                $result=mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)>0){
                    echo"<script>
                    
                    documment.getElementById('commentsbox').style.height.value=x;
                    documment.getElementById('commentsbox').style.height.value=x+100%;
                    </script>";
                    while($row=mysqli_fetch_assoc($result)){
                        echo"<p>";
                        echo base64_decode($row['comment']);
                        echo"</p>";
                        echo"<br>";
                        echo"<h3>-"; 
                        echo $row['author'];
                        echo"</h3>";
                        echo"<hr style=width:100%>";
                    }
                    
                }
                else{
                    echo"There are no comments";
                }
            
            ?>