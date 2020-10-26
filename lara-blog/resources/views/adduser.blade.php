<?php

?>


<form method="post" action="{{action('UserContoller@insertAction')}}">

    Meno:<br>
    <input type="text" name="firstname" value="Mickey">
    <br>
    Priezvisko:<br>
    <input type="text" name="firstname" value="Mickey">
    Meno:<br>
    <input type="text" name="lastname" value="Mouse">
    Email:<br>
    <input type="text" name="Email" value="@">
    Vek:<br>
    <input type="number" name="age" value="30">
    <br><br>
    <input type="submit" value="Odoslat">

</form>

