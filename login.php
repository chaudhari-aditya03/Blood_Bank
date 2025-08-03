<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="log.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<style>
</style>
<body>
<div class="header">
<?php
$active="home";
include('head.php'); ?>

</div>
    <main>
        <section class="hero">
            <div class="hero-content">
               
            </div>
        </section>
        <section class="login-section">
            <div class="login-box">
                <h1 class="login-title" style="color:red;">Login</h1>
                <div class="input-group">
                    <label for="role"><h3>Select Role</h3></label>
                    <select id="role" onchange="redirectBasedOnRole()">
                        <option value="">-- Select Role --</option>
                          <option value="admin/login.php">Admin Login</option>
                        <option value="donate_blood.php">Donar</option>
                       
                    </select>
                </div>
                <div>
                    <button type="submit" class="btn">Login</button>
                </div><br>
                <div class="links">
                    <p>Forgot Password? <a href="#"><span>Reset</span></a></p>
                </div>
            </div>
        </section>
    </main>

    <footer></footer>

    <script>
        function redirectBasedOnRole() {
            const roleDropdown = document.getElementById('role');
            const selectedValue = roleDropdown.value;
            if (selectedValue) {
                window.location.href = selectedValue;
            }
        }
        const menuIcon = document.getElementById('menu-icon');
        const navLinks = document.getElementById('nav-links');

        menuIcon.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });
    </script>
</body>
</html>
