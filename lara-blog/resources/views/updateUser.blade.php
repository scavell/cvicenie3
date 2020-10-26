<?php
?>
<form method="post" action="{{action('UserController@updateUserAction',['id'=> $user-> id])}}">
    Meno:<br>
    <input type="text" name="firstname" value="Michal">
    <br>
    Priezvisko:<br>
    <input type="text" name="lastname" value="Simko">
    Email:<br>
    <input type="text" name="email" value="@">
    Vek :<br>
    <input type="text" name="age" value="30">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <br>
    <input type="submit" value="Odoslat">

</form>
