<?php
include('connect.php');
$input='';

if (isset($_POST['search'])) {
    if (!empty($_REQUEST['input'])) {

        $input = $_REQUEST['input'];    
        
        $sql = "SELECT DISTINCT recallTitle, startDate, endDate, MA.makeTitle, MO.modelTitle FROM recall R, make MA, model MO, vehicle V 
            WHERE ((MA.makeTitle LIKE '%$input%'OR MO.modelTitle LIKE '%$input%' OR recallTitle LIKE '%$input%')
            AND MA.makeID=R.makeID AND MO.recallID=R.recallID )
            OR (V.VIN LIKE '$input' AND MA.makeID=R.makeID AND MO.recallID=R.recallID AND MO.modelID=V.modelID)
            ORDER BY recallTitle;"; 
        $result = $mysqli->query($sql);
        
        if ($result->num_rows > 0){
            while($row = $result->fetch_assoc() ){
                echo '<br /> Title: ' .$row['recallTitle'];  
                echo '<br /> Start Date: ' .$row['startDate'];  
                echo '<br /> End Date: '.$row['endDate'];  
                echo '<br /> Make: '.$row['makeTitle']; 
                echo '<br /> Make: '.$row['modelTitle'];     
            }
        } else {
            echo "0 records";
        }
    }
}
mysqli_close($mysqli);

?>