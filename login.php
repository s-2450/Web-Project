<?php
// 可選：設定頁面標題。這個變數會傳遞給 header.php
$pageTitle = "Group 3 Project";
// 引入 header 檔案
include 'header.php';
?>

  <!-- Banner -->
  <img src="./img/Membership banner.png" class="img-fluid" alt="Membership Banner" />

<div class="container">
  <div class="row">
    <div class="mb-4"></div>

    <div class="col-md-1"></div>

    <div class="col-md-10">
      <h1>
        <p class="text-center">Member Login</p>
      </h1>

      <!-- Login area -->
      <form>
        <div class="mb-3">
          <label class="form-label">Email Address</label>
          <input type="email" class="form-control" required />
        </div>

        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" class="form-control" required />
        </div>

        <button type="submit" class="btn btn-primary">Login</button>

        <br /><br />

        <a href="signup.php">Not Yet Registered?</a>
        <br />
        <a href="forgetpassword.php">Forgot password?</a>
      </form>
    </div>

    <div class="col-md-1"></div>
  </div>
</div>
<?php
// 引入 footer 檔案
include 'footer.php';
?>