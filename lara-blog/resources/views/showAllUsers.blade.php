<table>
    @foreach($users as $user)
<tr>
<td>{{$user -> name}} {{$user -> priezvisko}}</td>
    <td>{{$user->heslo}}</td>
    <td>{{$user->vek}}</td>
    <td>  <a href="{{action("UserController@showAction", ['id'=> $user ->id ] )}}"editovat></a>

    </td>
    <td>  <a href="{{action("UserController@deleteUserAction", ['id'=> $user ->id ] )}}"mazanie></a>

    </td>
</tr>
        <td>  <a href="{{action("UserController@insertUserAction", ['id'=> $user ->id ] )}}"vkladanie></a>

        </td>
    @endforeach

</table>
