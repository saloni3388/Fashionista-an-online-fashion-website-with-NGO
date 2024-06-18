<?php
session_start();
$conn = mysqli_connect("localhost","root","","purchase_table");

if(mysqli_connect_error())
{
    echo "
        <script>
            alert('Database not connected');
            window.location.href = 'mycart.php';
        </script>
    ";
    exit();
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST["purchase"]))
    {
        $query1="INSERT INTO `purchase_record`( `fullname`, `email`, `phone_no`, `address`, `pay_mode1` ,`pay_mode2`) VALUES ('$_POST[fullname]','$_POST[email]','$_POST[phone_no]','$_POST[address]','$_POST[pay_mode1]','$_POST[pay_mode2]')" ;
        
        if(mysqli_query($conn, $query1))
        {
            $Order_Id = mysqli_insert_id($conn);
            $query2 = "INSERT INTO `user_orders`(`Order_Id`, `Item_Name`, `Price`, `Quantity`) VALUES (?,?,?,?)";
            $stmt = mysqli_prepare($conn,$query2);
            if($stmt)
            {
                mysqli_stmt_bind_param($stmt , "isii" , $Order_Id,$Item_Name,$Price,$Quantity);
                foreach($_SESSION['cart'] as $key => $values)
                {
                    $Item_Name = $values['Item_Name'];
                    $Price = $values['Price'];
                    $Quantity = $values['Quantity'];
                    mysqli_stmt_execute($stmt);
                }
                unset($_SESSION['cart']);
                
                if(isset($_POST['pay_mode1']))
                {
                    echo "
                    <script>
                        alert('Order Placed');
                        window.location.href = 'Fashionistaafterlogin.php';
                    </script>
                "; 
                }
                elseif(isset($_POST['pay_mode2']))
                {
                    echo "
                    <script>
                        alert('Click on Pay ');
                        window.location.href = 'pay.php';
                    </script>
                ";
                }
              

            }
            else
            {
                echo "
                <script>
                    alert('SQL Query Prepare Error');
                    window.location.href = 'mycart.php';
                </script>
            ";  
            }
        }
        else
        {
            echo "
            <script>
                alert('SQL ERROR');
                window.location.href = 'mycart.php';
            </script>
        ";
        }
    }
}

?>