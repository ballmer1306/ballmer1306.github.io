<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RYTC Shop - เข้าสู่ระบบ</title>
    <?php
        include('edit/head.php');
    ?>
</head>
<body id="bg">
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3>Sign In</h3>
                    <div class="d-flex justify-content-end social_icon" >
                        <span>
                            <a href="https://www.technicrayong.ac.th/news_edit.php?news_id=300&usr_id=8" target="_blank" style="color:#FFB517;"  onMouseOver="this.style.color='#8a630f'" onMouseOut="this.style.color='#FFB517'">
                                <i class="fab fa-facebook-square" style="font-size:50px;"> RYTC</i>
                            </a>
                        </span>
                    </div>
                </div>
                <div class="card-body">
                    <form>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z"/>
                                    </svg>
                                </span>
                            </div>
                            <input type="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="form-group">
						    <input type="submit" value="Login" class="btn login_btn" style="margin-top:1rem; width:100%;">
					    </div>
                    </form>
                    <div class="d-flex justify-content-left links mt-4">
                        Don't have an account? <a href="register.php">Sign Up.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>