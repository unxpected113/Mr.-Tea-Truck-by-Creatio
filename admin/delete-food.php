<?php 
include('../config/constants.php');

if(isset($_GET['id']) AND isset($_GET['image_name']))
{
    $id = $_GET['id'];
    $image_name = $_GET['image_name'];

    if($image_name != "")
    {
        $path = "../images/food/".$image_name;
        $remove = unlink($path);

        if($remove==false)
        {
            $_SESSION['upload'] = "<div class='error'>Failed to Remove Image File.</div>";
            header('location:'.SITEURL.'admin/manage-food.php');
            die();
        }
    }

    $sql = "DELETE FROM tbl_food WHERE id=$id";
    $res = mysqli_query($conn, $sql);

    if($res==true)
    {
        $_SESSION['delete'] = "<div>Food/Beverage has Successfully Deleted.</div>";
        header('location:'.SITEURL.'admin/manage-food1.php');
    }
    else
    {
        $_SESSION['delete'] = "<div class='error'>Failed to Delete Food/Beverage.</div>";
        header('location:'.SITEURL.'admin/manage-food1.php');
    }


}
else
{
    $_SESSION['unauthorize'] = "<div class='error'>Unauthorized Access.</div>";
    header('location:'.SITEURL.'admin/manage-food.php');
}

?>