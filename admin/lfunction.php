<?php
function myFunction($stypef) {
	
	//var $name;

	switch($stypef){
    case "1":
      $name = "ඉහළ කළමණාකරන මට්ටම";
	 break;
	
    case "2":
		$name= "තෘතීයික මට්ටම(පරිපාලන නිලධාරී,භාෂා පරිවර්ථක වැනි)";
    break;
	
    case "3":
		$name= "ද්විතෘයික මට්ටම(සංවර්ධන නිලධාරී,කළමණාකරන සහකාර,ක්ෂේත්‍ර නිලධාරී වැනි)";
    break;
	
	 case "4":
		$name= "ප්‍රාථමික මට්ටම(කා.සේ‍.සේ,රියදුරු,කාර්යාල මුරකරු වැනි)";
    break;

  }
	
  return $name;
}
?>
