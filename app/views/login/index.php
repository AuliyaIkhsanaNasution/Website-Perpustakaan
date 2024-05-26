<body>

    <!----------------------- Main Container -------------------------->

    <div class="container d-flex justify-content-center align-items-center min-vh-100">

        <!----------------------- Login Container -------------------------->

        <div class="row border rounded-5 p-3 bg-white shadow box-area">

            <!--------------------------- Left Box ----------------------------->

            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" >
                <div class="featured-image align-items-center mt-3">
                    <img src="<?= BASEURL; ?>image/perpus.jpg" class="img-fluid rounded-4" style="max-width: 100%; height: auto;">
                 </div>
                <div class="mt-3 p-2">
                    <p class="text-black fs-2 z-20 mt-4 d-flex" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Be Verified</p>
                    <small class="text-black text-wrap z-20" style="width: 17rem; font-family: 'Courier New', Courier, monospace;">Join experienced Designers on this platform.</small>
                </div>
            </div>
             

            <!-------------------- ------ Right Box ---------------------------->
            
            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h2>Hello,Again</h2>
                        <p>We are happy to have you back.</p>
                    </div>
                    <form action="<?= BASEURL; ?>AuthController/loginProcess" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Username" name="username">
                    </div>
                    <div class="input-group mb-1">
                        <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password" name="password">
                    </div>
                    <div class="input-group mt-2 mb-2 d-flex justify-content-between">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="formCheck">
                            <label for="formCheck" class="form-check-label text-secondary"><small>Remember Me</small></label>
                        </div>
                        <!-- <div class="forgot">
                            <small><a href="#">Forgot Password?</a></small>
                        </div> -->
                    </div>
                    <div class="input-group mb-3">
                        <button class="btn btn-lg btn-primary w-100 fs-6">Login</button>
                    </div>
                    </form>
                   
                   <?php
                        if (isset($_GET['error'])) {
                            echo "<p style='color:red'>" . htmlspecialchars($_GET['error']) . "</p>";
                        }
                        ?>
                    <div class="row">
                        <small>Bukan Pegawai <a href="<?= BASEURL; ?>Home">Harap Kembali</a></small>
                    </div>
                </div>
            </div> 

        </div>
    </div>

</body>