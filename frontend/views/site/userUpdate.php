<?php
use yii\helpers\Url;
?>

Update The User  Data 
<br>
<?php
if (Yii::$app->session->hasFlash('error'))
{
	echo Yii::$app->session->getFlash('error') ; 
}

?>
 <form name="updateUser" action="<?=Url::to(['site/update-in-db'])?>" method="GET">
<table>
<tr>
 <td>ID:</td><td><input type="hidden" name="id" placeholder="id" value="<?php echo $user->id; ?>" required /></td>  
 <tr>
 <td>Name:</td><td><input type="text" name="name" placeholder="name" value="<?php echo $user->name; ?>" required /></td>
 <tr>
<td> UserName:</td><td><input type="text" name="username" placeholder="username" value="<?php echo $user->username; ?>" required /></td>
 <tr>
 <td>Password:</td><td><input type="text" name="password" placeholder="password" value="<?php echo $user->password; ?>" required /></td>
 <tr>
 <td>Email:</td><td><input type="email" name="email" placeholder="email" value="<?php echo $user->email   ; ?>" required /></td>
 <tr>
 <td>Mobile:</td><td><input type="text" name="mobile" placeholder="mobile" value="<?php echo $user->mobile  ;   ?>" required /></td>
 <tr>
 <td>Gender:</td><td><input type="text" name="gender" placeholder="gender" value="<?php echo $user->gender  ;   ?>" required /></td>
 </tr>
 </table>
<input type="submit" >

</form>

