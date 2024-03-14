
<pre>
<?php
include "libs/load.php";

// print_r($_SERVER);

// print("_GET");
// print_r($_GET);

// print("_POST");
// print_r($_POST);

if(signup("rajesh ","password","rajeshd01042004@gmail.com ","9751706279")){
    echo "Success";
} else{
    echo "Error: " . $sql . "<br>" . $conn->error;
    $result = false;
}

?>
</pre>