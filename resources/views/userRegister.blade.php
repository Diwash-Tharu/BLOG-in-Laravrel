
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="">
    @csrf

    <div>
        <label for="name">Name</label>
        <input id="name" type="text" name="name" required autofocus>
    </div>

    <div>
        <label for="password">Password</label>
        <input id="password" type="password" name="password" required>
    </div>

    <div>
        <label for="address">Address</label>
        <input id="address" type="text" name="address" required>
    </div>

    <div>
        <label for="phone">Phone Number</label>
        <input id="phone" type="tel" name="phone" required>
    </div>

    <div>
        <label for="email">Email</label>
        <input id="email" type="email" name="email" required>
    </div>

    <div>
        <button type="submit">Register</button>
    </div>
</form>
</body>
</html>
