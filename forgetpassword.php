<?php
// 可選：設定頁面標題。這個變數會傳遞給 header.php
$pageTitle = "Group 3 Project";
// 引入 header 檔案
include 'header.php';
?>

 <!-- Banner -->
 <img src="./img/Membership banner.png" class="img-fluid" alt="Membership Banner" />

<!-- Reset password area -->
<div class="container">
  <div class="row">
    <div class="mb-4"></div>

    <div class="col-md-1"></div>
    <div class="col-md-10">
      <h1>
        <p class="text-center">Reset Password</p>
      </h1>

      <p>
        Please enter your email to reset your password. System will send
        an email to your inbox, follow the instructions to reset your
        login password.
      </p>

      <form>
        <div class="mb-3">
          <label class="form-label">Email Address</label>
          <input type="email" class="form-control" placeholder="Please Enter Your Email Address Here" required />
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <div class="col-md-1"></div>
  </div>
</div>
<?php
// 引入 footer 檔案
include 'footer.php';
?>