<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?= $title;?></title>
	<link rel="stylesheet" href="">
</head>
<body>


	<form method="GET" action="">
            Username : <input type="text" name="username" value=""/> <br/>
            Password : <input type="password" name="password" value=""/> <br/>
            <input type="submit" name="submit_login" value="Login"/>
        </form>
       <table>
    
       	<thead>
       		<tr>
       			<th>id</th>
       			<th>name</th>
       			<th>pass</th>
       		</tr>
       	</thead>
       	<tbody>
       		<?php foreach($data as $row):?>
       		<tr>
       			<td><?=  $row['id'];?></td>
       			<td><?=  $row['email'];?></td>
       			<td><?=  $row['pass'];?></td>
       		</tr>
       	<?php endforeach;?>
       	<a href=""></a>
       	</tbody>
       </table>
</body>
</html>