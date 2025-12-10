<?php
// 可選：設定頁面標題。這個變數會傳遞給 header.php
$pageTitle = "Group 3 Project";
// 引入 header 檔案
include 'header.php';
?>

 <!-- Banner -->
 <img src="./img/Membership banner.png" class="img-fluid" alt="Membership Banner">

<div class="container">
  <div class="row">
    <div class="mb-4"></div>
    <div class="col-md-1"></div>
    <div class="col-md-10">

      <h1 class="text-center">New Member Registration</h1>

      <!-- Registration form -->
      <form>

        <div class="mb-3">
          <label for="exampleInputUsername1" class="form-label">Username</label>
          <input type="text" class="form-control" id="exampleInputUsername1"
            placeholder="Please Enter Your Username Here" required>
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email Address</label>
          <input type="email" class="form-control" id="exampleInputEmail1"
            placeholder="Please Enter Your Email Address Here" required>
        </div>

        <div class="row">
          <div class="col">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="text" class="form-control" id="exampleInputPassword1"
              placeholder="Please Enter Your Password Here" required>
          </div>
          <div class="col">
            <label for="exampleInputPassword2" class="form-label">Password Confirmation</label>
            <input type="text" class="form-control" id="exampleInputPassword2"
              placeholder="Please Enter Your Password Again Here" required>
          </div>
        </div>

        <br>

        <div class="row">
          <div class="col">
            <label for="exampleFormControlInput1" class="form-label">First Name</label>
            <input type="text" class="form-control" placeholder="Please Enter Your First Name Here" required>
          </div>
          <div class="col">
            <label for="exampleFormControlInput2" class="form-label">Last Name</label>
            <input type="text" class="form-control" placeholder="Please Enter Your Last Name Here" required>
          </div>
        </div>

        <br>

        <fieldset class="row mb-3">
          <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
          <div class="col-sm-10">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" checked="">
              <label class="form-check-label" for="gridRadios1">Male</label>
            </div>

            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2">
              <label class="form-check-label" for="gridRadios2">Female</label>
            </div>

            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3">
              <label class="form-check-label" for="gridRadios3">Rather not say</label>
            </div>
          </div>
        </fieldset>

        <div class="row">
          <p>Date of Birth</p>
          <div class="col">
            <input type="number" class="form-control" placeholder="Day" required>
          </div>
          <div class="col">
            <select class="form-select">
              <option>Month</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
            </select>
          </div>
          <div class="col">
            <input type="number" class="form-control" placeholder="Year" required>
          </div>
        </div>

        <br>

        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" required>
          <label class="form-check-label">
            I have read and accept the above Terms and Conditions (including the terms in the Disclaimer).
          </label>
        </div>

        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" required>
          <label class="form-check-label">
            I agree to receive promotional information from BBBOX.
          </label>
        </div>

        <div class="col-auto">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </div>
    <div class="col-md-1"></div>
  </div>
  </form>
</div>

<?php
// 引入 footer 檔案
include 'footer.php';
?>