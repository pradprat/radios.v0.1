

<div class="wrapper">
    <h2>Log In</h2>
    <form action="services/login_process.php" method="post">
        <div class="form-group">
            <label for="log_nip">NIP</label>
            <input type="text" class="form-control" id="log_nip" name="log_nip" placeholder="Masukan NIP">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>
        <div class="form-group">
            <label for="log_password">Password</label>
            <input type="password" class="form-control" id="log_password" name="log_password" placeholder="Password">
            <small id="passwordHelpInline" class="text-muted">Must be 8-20 characters long.</small>
        </div>
        <p>Tidak punya akun? <a href="register.php">Daftar Disini</a>.</p>
        
        <input type="submit" class="btn btn-primary" value="Submit">
    </form>
</div>
