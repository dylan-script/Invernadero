<?php
include('config.php');
//$sql = "SELECT height.Date, beds.ID, plants.ID, height.Value, diameter.Value, num_sheets.Value, aphidoidea.Value FROM beds, plants, height, diameter, num_sheets, aphidoidea WHERE plants.ID_Bed = beds.ID && plants.ID = height.ID_Plant && plants.ID = diameter.ID_Plant && plants.ID = num_sheets.ID_Plant && plants.ID = aphidoidea.ID_Plant;";
$sql = "select plants.ID as 'id', plants.Position as 'loc' FROM plants where plants.ID_Bed = 2;";$result = mysqli_query($db,$sql);
echo "Returned rows are: " . mysqli_num_rows($result) . '<br>';
foreach ($result as $value) {
    # code...
}
?>