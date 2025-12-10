<?php
// 可選：設定頁面標題。這個變數會傳遞給 header.php
$pageTitle = "Group 3 Project";
// 引入 header 檔案
include 'header.php';
?>

  <!-- Banner -->
  <img src="./img/faq-banner.png" class="img-fluid" alt="FAQ Banner" />

<br /><br />

<h1>
  <p class="text-center">Frequently Asked Questions (FAQ)</p>
</h1>

<div class="container">
  <div class="row">
    <div class="col-md-1"></div>

    <div class="col-md-10">
      <!-- FAQ accordion -->
      <div class="accordion" id="accordionExample">
        <!-- Question 1 -->
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseOne">
              <strong>How to Register BBBOX Account?</strong>
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              Create an account <a href="signup.html">here</a> and try our
              full service for 14 days, free of charge.
            </div>
          </div>
        </div>

        <!-- Question 2 -->
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseTwo">
              <strong>Can’t log in to BBBOX?</strong>
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <b>Forgot your password?</b><br />
              Use
              <a href="forgetpassword.html">password reset</a>.<br /><br />

              <b>Forgot your email or username?</b><br />
              Try all emails you own. Reset email will only be sent to
              your registered BBBOX email.
            </div>
          </div>
        </div>

        <!-- Question 3 -->
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseThree">
              <strong>Will I be charged for using BBBOX?</strong>
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              BBBOX is a new-fashioned app that provides free music
              services. You can download it for free on App Store. On
              BBBOX, you can listen to any radio on demand, search top
              charts quickly, shuffle any recommended songs, add favorite
              songs, and enjoy other stellar services. BBBOX is a good
              start for your music journey!If you play BBBOX on non-Wi-Fi
              networks, you may be charged for data consumption by your
              provider. But don't worry, BBBOX provides Non-Wi-Fi Network
              Alert and other similar functions to remind you of that.You
              can also buy BBBOX VIP to enjoy 5 benefits on BBBOX.
            </div>
          </div>
        </div>

        <!-- Question 4 -->
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseFour">
              <strong>How do I buy BBBOX VIP?</strong>
            </button>
          </h2>
          <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              You can pay via App Store or Google Wallet. VIP will
              activate instantly.
            </div>
          </div>
        </div>

        <!-- Question 5 -->
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseFive">
              <strong>Why can't I use VIP after payment?</strong>
            </button>
          </h2>
          <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              This may be due to network issues. In such case, you shall
              log out of BBBOX and log in again to operate as instructed,
              then VIP service will be available.
            </div>
          </div>
        </div>

        <!-- Question 6 -->
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseSix">
              <strong>Do data consumption occur when using BBBOX?</strong>
            </button>
          </h2>
          <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              Auto-Download is only available to BBBOX VIP. Open the
              desired playlist and enable "Auto Download". BBBOX will
              download music in the playlist automatically when you're
              using Wi-Fi.
            </div>
          </div>
        </div>

        <!-- Question 7 -->
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseSeven">
              <strong>Can I download a copy of my personal data?</strong>
            </button>
          </h2>
          <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              Yes, you can!<br />
              You can get a ZIP file with a copy of your personal data by
              using the automated Download your data tool on your Account
              Privacy page or by contacting us.
            </div>
          </div>
        </div>

        <!-- Question 8 -->
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseEight">
              <strong>How do I understand my personal data download?</strong>
            </button>
          </h2>
          <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              When you download your data, you will receive several files,
              each containing a different type of personal data. For a
              description of this data, please see the “Read Me First”
              file delivered together with your data and Understanding My
              Data (linked to in the “Read Me First” file).
            </div>
          </div>
        </div>

        <!-- Question 9 -->
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseNine">
              <strong>What happens if I opt out of tailored ads?</strong>
            </button>
          </h2>
          <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              Opting out prevents BBBOX from tailoring your ad experience
              based on third party data. This does not decrease the number
              of ads you receive on the free service but means you might
              see and hear ads that are not as relevant to you.
            </div>
          </div>
        </div>

        <!-- Question 10 -->
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseTen">
              <strong>How can I write feedback?</strong>
            </button>
          </h2>
          <div id="collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              You can submit a feedback on our
              <a href="contactus.html">Contact Us</a> page!
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-1"></div>
  </div>
</div>
<?php
// 引入 footer 檔案
include 'footer.php';
?>