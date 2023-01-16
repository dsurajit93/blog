<h1>Blog</h1>
<?php
require_once "DbConfig.php";
$res = mysqli_query($con,"select * from blog_details") or die("Error");
if(mysqli_num_rows($res)>0){
    while($blog=mysqli_fetch_assoc($res)){
        echo $blog['title']." - ". $blog["details"]."<br>";
    }
}

?>