<?php
use yii\helpers\Url;
?>

These are the users:
<table align="center" border="1" cellspacing="1"  >
		<tr>
		<td>ID</td>
		<td>NAME</td>
		<td>USERNAME</td>
		<td>PASSWORD</td>
		<td>EMAIL</td>
		<td>MOBILE</td>
		<td>GENDER</td>
		<td>EDIT</td>
		<td>DELETE</td>
		
		</tr>
		<?php
	foreach($users as $user){
		$id =  $user->id;
		?>
		<tr>
		<td><?php echo $user->id; ?></td>
		<td><?php echo $user->name; ?></td>
		<td><?php echo $user->username; ?></td>
		<td><?php echo $user->password; ?></td>
		<td><?php echo $user->email; ?></td>
		<td><?php echo $user->mobile; ?></td>
		<td><?php echo $user->gender; ?></td>
      	<td><a href="<?= Url::to(['site/update?id='.$id]) ?>" > <img src="download.jpg" align="EDIT" /></a> </td>
		<td><a href="<?= Url::to(['site/delete-user?id='.$id]) ?>"> <img src="download.jpg" align="EDIT" /> </a> </td>


		</tr>
		<br>
		<?php } ?>

</table>
<br><br>
<form action="<?=Url::to(['site/create'])?>" method="GET"">
			Create New User <input type="submit" value="Create New User" >
		</form>
