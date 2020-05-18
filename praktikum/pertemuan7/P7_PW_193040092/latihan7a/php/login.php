<form action="" method="post">
<?php if (isset($error)) : ?>
    <p>Username atau Password salah</p>
<?php endif; ?>

<table>
    <tr>
        <td><label for="username">Username</label></td>
        <td>:</td>
        <td><input type="text" name="username"></td>
    </tr>

    <tr>
        <td><label for="password">Password</label></td>
        <td>:</td>
        <td><input type="password" name="password"></td>
    </tr>
</table>

<div class="remember">
    <input type="checkbox" name="remember">
    <label for="remember">Remember me</label>
</div>

<button type="submit" name="submit">Login</button>
</form>