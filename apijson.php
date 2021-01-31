<?php
//Create API IN JSON FORM
//DB connect
$conn = mysqli_connect("localhost","root","root","sql",8889);
// select query
$sql = "select * from data";
//connection query
$execute = mysqli_query($conn,$sql);
//count for number of rows
$count = mysqli_num_rows($execute);
//header content-type; type of data
header('Content-Type:application/json');
//check if any exist 
if($count>0){
    //fetch data into array
    while($row=mysqli_fetch_assoc($execute)){
        //print in arrays
        $arr[] = $row;
    }
    //encode data in json form( status(api or not), data(data) and result(if data))
    echo json_encode(['status'=>'true','data'=>$arr,'result'=>'found']);
}else{
    //encode data in json form( status(api or not), data(data) and result(if data))
    echo json_encode(['status'=>'true','data'=>'no data','result'=>'Not found']);
}

?>