<?php
    include('person_class.php');

    if (isset($_GET["type"])) {
        $NewPerson = new Person();
        $ResultObj = $NewPerson->loadAllPeople();
        echo json_encode($ResultObj);
    }

    // Testing

    // $NewPerson = new Person();
    // $Object = $NewPerson->loadAllPeople();
    // print_r($Object) ;
    // echo "<br>" . "<br>";
    // var_dump($Object);
    // echo "<br>", "<br>";
    // echo json_encode($Object);
    // echo "<br>", "<br>";
    // var_dump(json_encode($Object)) ;
?>