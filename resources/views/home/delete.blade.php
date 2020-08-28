<!DOCTYPE html>
<html>
<head>
	<title>Delete User</title>
</head>
<body>

	<h1>Delete user page</h1>
    <form method="post">
    
        <table>
                <tr>
                    <td>ID</td>
                    <td><input type="text" readonly name="id" value="{{$user['id']}}"></td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input type="text" readonly name="name" value="{{$user['name']}}"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" readonly name="email" value="{{$user['email']}}"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="text" readonly name="password" value="{{$user['password']}}"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="delete"></td>
                </tr>
        </table>
    </form>

</body>
</html>