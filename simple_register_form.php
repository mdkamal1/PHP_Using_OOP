<?php  

class registeration
{
	private function db()
	{
		mysql_connect("localhost","root","");
		mysql_select_db("oop"); //database name
	}

	public function register($uname,$uemail,$ucontact,$upassword)
	{
		$this->db();
		$query=mysql_query("insert into register_tbl(name,email,contact,password) values('$uname','$uemail','$ucontact','$upassword')") or die(mysql_error());
		if ($query)
			echo "Registered";
			else
				echo "Not Registered";
	}
}
extract($_POST);
if (isset($submit)) 
	{
		$user = new registeration;
		$user->register($name,$email,$contact,$password);
	}
?>


<form action="" method="post">
	<table>
		<tr>
			<td>Name : </td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>Email : </td>
			<td><input type="text" name="email"></td>
		</tr>
		<tr>
			<td>Contact : </td>
			<td><input type="text" name="contact"></td>
		</tr>
		<tr>
			<td>Password : </td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="SUBMIT"></td>
		</tr>
	</table>

</form>