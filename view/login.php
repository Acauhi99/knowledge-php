<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/form.css">
    <title>Login Usuario</title>
</head>
<body>
    <form action=""> 
        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email"><br>
        <label for="password">Password:</label><br>
        <input type="text" id="password" name="password"><br>
        <input type="radio" id="admin" name="role" value="admin">
        <label for="admin">Admin</label><br>
        <input type="radio" id="user" name="role" value="user">
        <label for="user">User</label><br><br>
        <input type="submit" value="Submit">
        <button type="button" class="cadastrar">Cadastrar</button>
    </form>
</body>
</html>