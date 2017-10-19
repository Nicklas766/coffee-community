<div class="login-wrapper">
    <div class="login-widget">
        <h3> Skapa ett konto </h3>
        <form action="<?= $this->url('admin/create') ?>" method="POST">
            <input placeholder="Användarnamn" type="text" name="name" required>
            <input placeholder="Mejladress" type="text" name="email">
            <select name="authority" required>
              <option value="user">User</option>
              <option value="admin">Admin</option>
            </select>
            <input placeholder="Lösenord" type="password" name="pass" required>
            <!-- <input placeholder="Repeat password" type="password" name="repeat-pass"> -->

            <button type="submit">Skapa konto</button>
        </form>
    </div>
</div>
