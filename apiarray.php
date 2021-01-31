<?php
//Create API IN ARRAY FORM
//DB connect
$conn = mysqli_connect("localhost","root","root","sql",8889);
// select query
$sql = "select * from data";
//connection query
$execute = mysqli_query($conn,$sql);
//count for number of rows
$count = mysqli_num_rows($execute);
//check if any exist 
if($count>0){
    //fetch data into array
    while($row=mysqli_fetch_assoc($execute)){
        //print all in array form
        $arr[] = $row;
    }
    //print data
    echo '<pre>'; 
    print_r($arr);
}

?>