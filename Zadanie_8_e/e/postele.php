<?php include_once 'aheader.php';?>

<?php 
    $test1 = glob("produkty/postele/thumbs/*");
    $test2 = glob("produkty/postele/images/*");

    $tests = array_combine($test1, $test2);



    foreach($tests as $k=>$a){
        echo '	<a href="'.$a.'"><img src="'. $k .'"></a>';
    }
?>





<?php include_once 'zfooter.php'; ?>