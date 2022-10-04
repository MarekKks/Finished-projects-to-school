<?php include_once 'aheader.php';?>

<main>

<?php 
    $test1 = glob("produkty/ostatne/thumbs/*");
    $test2 = glob("produkty/ostatne/images/*");

    $tests = array_combine($test1, $test2);



    foreach($tests as $k=>$a){
        echo '	<a href="'.$a.'"><img src="'. $k .'"></a>';
    }
?>

</main>




<?php include_once 'zfooter.php'; ?>