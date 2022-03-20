<?php

class User
{
    public static function signup($first_name,$last_name,$phone,$email_address,$password)
    {
        $conn = Database::getconnection();

        $sql = "INSERT INTO `user_datas` (`first_name`,`last_name`,`company`,`job`,`country`,`address`,`phone`,`email_address`,`password`,`about`,`twitter`,`facebook`,`instagram`,`linkedin`,`github`) 
        VALUES ('$first_name','$last_name','','','','','$phone','$email_address','$password','','','','','','')";

        $result = $conn->query($sql);
        if ($result)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public static function loign($email_address,$password)
    {
        $conn = Database::getconnection();

        $sql = "SELECT * FROM `user_datas` WHERE email_address = '$email_address' AND `password` = '$password' ";
        $result = $conn->query($sql);
        if ($result->num_rows == 1)
        {
            $row = $result->fetch_assoc();
            Session::set('User_login',true);
            Session::set('User_data',$row);
            return $row;
        }
        else
        {
            return false;
        }

    }

    public static function update($first_name,$last_name,$company,$job,$country,$address,$phone,$email_address,$about,$twitter,$facebook,$instagram,$linkedin,$github)
    {
        $conn = Database::getconnection();
        $id = $_SESSION['User_data']['id'];

        $sql = "UPDATE `user_datas` SET `first_name`='$first_name',`last_name`='$last_name',`company`='$company',`job`='$job',`country`='$country',`address`='$address',`phone`='$phone',`email_address`='$email_address',`about`='$about',`twitter`='$twitter',`facebook`='$facebook',`instagram`='$instagram',`linkedin`='$linkedin',`github`='$github' WHERE `id` = $id ";
        $result = $conn->query($sql);
        if ($result)
        {
            $sql = "SELECT * FROM user_datas WHERE id = $id";
            $result2 = $conn->query($sql);
            $row = $result2->fetch_assoc();
            Session::delete('User_data');
            Session::set('User_data',$row);
            return $result;
        }
        else
        {
            return false;
        }
    }
}