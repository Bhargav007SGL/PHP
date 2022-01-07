<?php
echo extension_loaded('pgsql') ? 'yes':'no';
$appName = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$db = pg_connect("host:localhost port:5432 dbname:phpdemo user:igis password:igis options='--application_name=$appName'");
// $conn = pg_pconnect("dbname=phpdemo");
if ($db->connect_error) 
 {
    die("Connection failed: " . $db->connect_error);
 }
// $query = "INSERT INTO image_demo (ogc_fid) VALUES (100)";
// $TypeofSensor = $Ser_No=$SensorName=$DOP=$Year=$GeneraArea_FocusArea=$GeneralAreaGR=$MapRef=$FormationDetail=$YearofAcquistion=$UL_Long=$UL_Lat=$UR_Long=$UR_Lat=$LR_Long=$LR_Lat=$LL_Long=$LL_Lat=''
$TypeofSensor=$Ser_No=$SensorName=$DOP=$Year=$GeneraArea_FocusArea=$GeneralAreaGR=$MapRef=$FormationDetail=$YearofAcquistion=$UL_Long=$UL_Lat=$UR_Long=$UR_Lat=$LR_Long=$LR_Lat=$LL_Long=$LL_Lat=$CenterPointLong=$CenterPointLat=$ImageName=$ImagePath=$Remarks='';
$ascii_id;


$ascii_id = $_POST['ascii_id'];
if(!$ascii_id)
{
   $ascii_id = 0;
}

$TypeofSensor = $_POST['TypeofSensor'];
if(!$TypeofSensor)
{
   $TypeofSensor = "''";
}
$Ser_No = $_POST['Ser_No'];
if(!$Ser_No)
{
   $Ser_No = "''";
}
$SensorName = $_POST['SensorName'];
if(!$SensorName)
{
   $SensorName = "''";
}
$DOP = $_POST['DOP'];
if(!$DOP)
{
   $DOP = "''";
}
$Year = $_POST['Year'];
if(!$Year)
{
   $Year = "''";
}
$GeneraArea_FocusArea = $_POST['GeneraArea_FocusArea'];
if(!$GeneraArea_FocusArea)
{
   $GeneraArea_FocusArea = "''";
}
$GeneralAreaGR = $_POST['GeneralAreaGR'];
if(!$GeneralAreaGR)
{
   $GeneralAreaGR = "''";
}
$MapRef = $_POST['MapRef'];
if(!$MapRef)
{
   $MapRef = "''";
}
$FormationDetail = $_POST['FormationDetail'];
if(!$FormationDetail)
{
   $FormationDetail = "''";
}
$YearofAcquistion = $_POST['YearofAcquistion'];
if(!$YearofAcquistion)
{
   $YearofAcquistion = "''";
}
$UL_Long = $_POST['UL_Long'];
if(!$UL_Long)
{
   $UL_Long = "''";
}
$UL_Lat = $_POST['UL_Lat'];
if(!$UL_Lat)
{
   $UL_Lat = "''";
}
$UR_Long = $_POST['UR_Long'];
if(!$UR_Long)
{
   $UR_Long = "''";
}
$UR_Lat = $_POST['UR_Lat'];
if(!$UR_Lat)
{
   $UR_Lat = "''";
}
$LR_Long = $_POST['LR_Long'];
if(!$LR_Long)
{
   $LR_Long = "''";
}
$LL_Lat = $_POST['LL_Lat'];
if(!$LL_Lat)
{
   $LL_Lat = "''";
}
$LR_Lat = $_POST['LR_Lat'];
if(!$LR_Lat)
{
   $LR_Lat = "''";
}
$LL_Long = $_POST['LL_Long'];
if(!$LL_Long)
{
   $LL_Long = "''";
}
$CenterPointLong = $_POST['CenterPointLong'];
if(!$CenterPointLong)
{
   $CenterPointLong = "''";
}
$CenterPointLat = $_POST['CenterPointLat'];
if(!$CenterPointLat)
{
   $CenterPointLat = "''";
}
$ImageName = $_POST['ImageName'];
if(!$ImageName)
{
   $ImageName = "''";
}
$ImagePath = $_POST['ImagePath'];
if(!$ImagePath)
{
   $ImagePath = "''";
}
$Remarks = $_POST['Remarks'];
if(!$Remarks)
{
   $Remarks = "''";
}

$query = "INSERT INTO public.image_demo(
	\"Ser_no\", \"SensorName\",\"TypeofSensor_MSSorPan\", \"DOP\", \"Year\", \"GeneraArea_FocusArea\", \"GeneralAreaGR\", \"MapRef\", \"FormationDetail\", \"YearofAcquistion\", \"UL_Long\", \"UL_Lat\", \"UR_Lat\", \"UR_Long\", \"LR_Long\", \"LR_Lat\", \"LL_Long\", \"LL_Lat\", \"CenterPointLong_DMSor\", \"CenterPointLat_DMSor\", \"ImageName\", \"ImagePath\", \"Remarks\", \"ascii_id\")
	VALUES ('$Ser_No','$SensorName','$TypeofSensor', '$DOP', '$Year', '$GeneraArea_FocusArea','$GeneralAreaGR', '$MapRef', '$FormationDetail', '$YearofAcquistion', '$UL_Long','$UL_Lat' ,'$UR_Lat', '$UR_Long', '$LR_Long','$LR_Lat', '$LL_Long', '$LL_Lat', '$CenterPointLong', '$CenterPointLat', '$ImageName', '$ImagePath', '$Remarks', $ascii_id)";

$result = pg_query($db,$query);
echo ($query);
?>
