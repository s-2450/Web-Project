<?php
// 設定頁面標題和當前頁碼
$pageTitle = "Music Items - Page 3";
$currentPage = 3;
// 引入 header 檔案
include 'header.php';
?>

<main class="container my-5">
    <h2 class="mb-4">All Songs</h2>

    <div id="articles-list" class="articles-list" data-page-number="<?php echo $currentPage; ?>">
        <p>Loading songs from XML data...</p>
    </div>

    <nav class="mt-4" aria-label="Page navigation">
      <div class="d-flex justify-content-center">
        <ul class="pagination">
          <li class="page-item">
            <a class="page-link" href="musicitems2.php">Prev</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="musicitems1.php">1</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="musicitems2.php">2</a>
          </li>
          <li class="page-item active">
            <a class="page-link" href="musicitems3.php">3</a>
          </li>
          <li class="page-item"> 
            <a class="page-link" href="coming-soon.php">Next</a>
          </li>
        </ul>
      </div>
    </nav>
</main>

<script src="/js/load_music.js?v=20251210"></script> 

<?php
// 引入 footer 檔案
include 'footer.php';
?>