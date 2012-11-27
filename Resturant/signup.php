
<!--TODO:still need to update  -->

<html>
<body background="log.jpg">
	
	<h2>SIGNUP</h2>
	<!--TODO:create login(with session) form after signup  -->
	
	<form name="signup" method=post action="menu.php">
		<table>
			<tr>
				<!--TODO:Check if numeric values are given  -->
				<td><label>CUSTOMER NAME</label>
				</td>
				<td><input type=text name="custname" value="">
				</td>
			</tr>

			<tr>
					<!--TODO:Check mail format  -->
				<td><label>MAIL ID</label>
				</td>
				<td><input type=text name="mailid" value="">
				</td>
			</tr>

			<tr>
				<!--TODO:Check password Strength  -->
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

