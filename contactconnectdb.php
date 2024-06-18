<?php

            //connection to query at contact 
            $conn3 = mysqli_connect("localhost","root","","purchase_table");
            if(isset($_POST["submit"]))
            {
            $query = "INSERT INTO `query_record`( `name`, `email`, `subject`, `message`) VALUES ('$_POST[name]','$_POST[email]','$_POST[subject]','$_POST[message]')";

            $result = mysqli_query($conn3 , $query);
                
            if(isset($result))
            {
                ?>
                    <script>
                        alert("Query has been added");
                        alert("We will reach to you soon");
                        window.location.href = 'contact.php';
                    </script>
                <?php
            }
            else{
                echo "not submiited";
            }

            }
?>