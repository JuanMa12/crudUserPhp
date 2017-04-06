<?php

class User
{
    //list users
    public function lists()
    {
        $sql="SELECT * FROM users";
        $res=mysql_query( $sql, Connect::con() );

        $users = array();
        while($value = mysql_fetch_assoc($res))
        {
            $users[] = $value;
        }
        return $users;
    }

    //register user
    public function store($name,$last_name,$identification,$address,$phone)
    {
        $sql="INSERT INTO users (name,last_name,identification,address,phone)
        VALUES ('".$name."', '".$last_name."', '".$identification."', '".$address."', '".$phone."')";
        $res=mysql_query( $sql, Connect::con() );

        if( $res  != 1 )
        {
            return 0;
        }else{
            return 1;
        }
    }

    //show user
    public function show($id)
    {
        $sql="SELECT * FROM users WHERE id='".$id."'";
        $res=mysql_query( $sql, Connect::con() );

        if( mysql_num_rows( $res ) == 0 )
        {
            return 0;
        }else {
            if ($value = mysql_fetch_array($res))
            {
                $_SESSION["id"] = $value["id"];
                $_SESSION["name"] = $value["name"];
                $_SESSION["last_name"] = $value["last_name"];
                $_SESSION["identification"] = $value["identification"];
                $_SESSION["address"] = $value["address"];
                $_SESSION["phone"] = $value["phone"];
                return 1;
            }
        }
    }

    //update user
    public function update($id ,$name,$last_name,$identification,$address,$phone)
    {
        $sql="UPDATE users SET name='".$name."',last_name='".$last_name."',identification='".$identification."'
                ,address='".$address."',phone='".$phone."' WHERE id='".$id."'";
        $res=mysql_query( $sql, Connect::con() );

        if( $res  != 1 )
        {
            return 0;
        }else{
            return 1;
        }
    }

    //delete user
    public function delete($id)
    {
        $sql="DELETE FROM users WHERE id='".$id."'";
        $res=mysql_query( $sql, Connect::con() );

        if( $res  != 1 )
        {
            return 0;
        }else{
            return 1;
        }

    }

}

?>