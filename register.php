
<?php
    include 'header.php';
?>
    <div class="wrapper">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <p>Already have an account? <a href="login.php">Login here</a>.</p>
        <form action="services/register_process.php" method="post">
            <div class="form-group">
                <label for="reg_nama">Nama Lengkap</label>
                <input type="text" class="form-control" id="reg_nama" name="reg_nama" placeholder="Masukan Nama Lengkap">
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <div class="form-group">
                <label for="reg_nip">NIP</label>
                <input type="text" class="form-control" id="reg_nip" name="reg_nip" placeholder="Masukan NIP">
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <div class="form-group">
                <label for="reg_email">Email address</label>
                <input type="email" class="form-control" id="reg_email" name="reg_email" aria-describedby="emailHelp" placeholder="Masukan email">
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <div class="form-group">
                <label for="reg_password">Password</label>
                <input type="password" class="form-control" id="reg_password" name="reg_password" placeholder="Password">
                <small id="passwordHelpInline" class="text-muted">Must be 8-20 characters long.</small>
            </div>
            <div class="form-group">
                <label for="reg_con_password">Confirm Password</label>
                <input type="password" class="form-control" id="reg_con_password" name="reg_con_password" placeholder="Confirm Password">
                <!-- <small id="passwordHelpInline" class="text-muted">Must be 8-20 characters long.</small> -->
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <input type="submit" class="btn btn-primary" value="Submit">
        </form>
    </div>    

<?php
    include 'footer.php';
?>