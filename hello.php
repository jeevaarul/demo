<?php  //foreach array
$array=('male,female');
foreach($array as $row){?> 
<option value="<?php echo $row; ?>"><?php echo $row;?> </option> <?php }
 ?>