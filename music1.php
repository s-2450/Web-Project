<?php 
// 可選：設定頁面標題。這個變數會傳遞給 header.php 
$pageTitle = "Group 3 Project - Song Detail"; 
// 引入 header 檔案 
include 'header.php'; 
?> 

<main class="container my-5"> 
    <div class="row"> 
      <div class="col-md-1"></div> 
      <div class="col-md-10"> 
        <div id="song-detail-container"> 
            <p>Loading song details...</p> 
        </div> 
        <p><a href="musicitems1.php">&larr; Back to list</a></p> 
      </div> 
      <div class="col-md-1"></div> 
    </div> 
</main> 

<script src="/js/load_detail.js?v=20251209"></script>  

<?php 
// 引入 footer 檔案 
include 'footer.php'; 
?> 