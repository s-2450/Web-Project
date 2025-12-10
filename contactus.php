<?php
// 可選：設定頁面標題。這個變數會傳遞給 header.php
$pageTitle = "Group 3 Project";
// 引入 header 檔案
include 'header.php';
?>

 <!-- Banner -->
 <img src="./img/Contact us banner.png" class="img-fluid" alt="Contact Us Banner" />

<div class="container">
  <div class="row">
    <div class="mb-4"></div>
    <div class="col-md-1"></div>
    <div class="col-md-10">
      <h1>
        <p class="text">Contact Us</p>
      </h1>

      <p class="text">
        Please feel free to contact us via the form below, or use our CS
        hotline (+852 2468 1357) during office hours if you need any
        assistance.
      </p>

      <p class="text">
        We typically respond within 1–2 business days. By submitting, you
        agree to be contacted regarding your enquiry.
      </p>

      <!-- Contact Form -->
      <form>
        <div class="row">
          <div class="col">
            <label class="form-label">First Name</label>
            <input type="text" class="form-control" placeholder="Please Enter Your First Name Here" required />
          </div>

          <div class="col">
            <label class="form-label">Last Name</label>
            <input type="text" class="form-control" placeholder="Please Enter Your Last Name Here" required />
          </div>
        </div>

        <br />

        <div class="mb-3">
          <label class="form-label">Email Address</label>
          <input type="email" class="form-control"
            placeholder="Please Enter Your Email Address Here (e.g., name@example.com)" required />
        </div>

        <div class="mb-3">
          <label class="form-label">Your Comments</label>
          <textarea class="form-control" rows="5" placeholder="Please Enter Your Comments Here" required></textarea>
        </div>

        <button type="submit" class="btn btn-secondary">Submit</button>
      </form>
    </div>
    <div class="col-md-1"></div>
  </div>
</div>
<?php
// 引入 footer 檔案
include 'footer.php';
?>