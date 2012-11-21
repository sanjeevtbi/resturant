<html>
<body>
	<form name="signup" method=post action="menu.php">
		<table>
			<tr>
				<td><label>CUSTOMER NAME</label>
				</td>
				<td><input type=text name="custname" value="">
				</td>
			</tr>

			<tr>
				<td><label>MAIL ID</label>
				</td>
				<td><input type=text name="mailid" value="">
				</td>
			</tr>

			<tr>
				<td><label>PASSWORD</label>
				</td>
				<td><input type=password name="password" value="">
				</td>
			</tr>

			<tr>
				<td><label>GENDER</label>
				</td>
				<td><select name=gender>
						<option value="male">Male</option>
						<option value="female">Female</option>
				</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type=submit value="SignUp">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>

