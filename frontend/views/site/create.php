<?php
use yii\helpers\Url;
?>
<?php
if (Yii::$app->session->hasFlash('error'))
{
	echo Yii::$app->session->getFlash('error') ; 
}

?>
<form name="updateUser" action="<?=Url::to(['site/create-in-db'])?>" method="GET">
<table>
<tr>
<td>Name</td> <td><input type="text" name="name" placeholder="name"></td>
<tr>
<td>UserName</td> <td><input type="text" name="username" placeholder="username"></td>
<tr>
<td>Password</td> <td><input type="text" name="password" placeholder="password"></td>
<tr>
<td>Email</td> <td><input type="text" name="email" placeholder="email"></td>
<tr>
<td>Mobile</td> <td><input type="text" name="mobile" placeholder="mobile"></td>
<tr>
<td>Gender</td> <td><input type="text" name="gender" placeholder="gender"></td>
<tr></tr>
</table>
<br>
Create<input type="submit" >
</form>
