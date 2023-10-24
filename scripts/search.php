<?php
    $search_q=$_POST['search_q'];
    $l= mysqli_connect('localhost', 'root', 'boberman', 'TouristDB');
    $search_q = trim($search_q);
    $search_q = strip_tags($search_q);
    $q= mysqli_query($l, "SELECT name FROM tours WHERE name LIKE '%$search_q%'");
    $itog=mysqli_fetch_assoc($q);
    while ($itog = mysqli_fetch_assoc($q)) {
    printf("%s (%s)\n",$r["name"],$r["name"]);
    }
    mysqli_free_result($q);
    mysqli_close($l);
?>