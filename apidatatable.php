<?php

$url="http://localhost:8888/api/apijson.php";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL ,$url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER ,True);
$result = curl_exec($ch);
curl_close($ch);
$result=json_decode($result, true);
if(isset($result['status']))
    {
        if($result['status']==true)
        {
            if(isset($result['result']))
            {
                if($result['result']==true)
                {
                    ?>

                     <table border=1>   
                        <tr>
                            <td> ID </td>
                            <td> USERNAME </td>
                            <td> PASSWORD </td>
                        </tr>
                    
                    <?php foreach($result['data'] as $link){
                    echo    "<tr>   <td>".$link['id']."</td>
                                    <td>".$link['username']."</td>
                                    <td>".$link['password']."</td> 
                            </tr>";
                    } ?>
                    </table>
                    <?php
                }else
                {
                    echo $result['data'];
                }
            }
        }else
        {
            
        }
    }else
    {
        echo "api not working";
    }
?>



