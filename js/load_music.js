// load_music.js - 實現 XML 數據動態載入和分頁邏輯
document.addEventListener('DOMContentLoaded', function() {
    const listContainer = document.getElementById('articles-list');
    
    // 1. 從 HTML 讀取當前頁碼
    const currentPage = parseInt(listContainer.getAttribute('data-page-number')) || 1;
    const itemsPerPage = 5; // 每頁固定顯示 5 條記錄
    
    // 根據頁碼計算起始和結束索引 (XML 節點索引從 0 開始)
    const startIndex = (currentPage - 1) * itemsPerPage; 
    const endIndex = startIndex + itemsPerPage; 

    // console.log("Current Page read by JS:", currentPage); // DEBUG CODE
    // console.log("Expected songs range (0-indexed):", startIndex, "to", endIndex - 1); // DEBUG CODE
    const xmlFile = '/XML/item.xml'; 

    fetch(xmlFile)
        .then(response => {
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            return response.text();
        })
        .then(xmlText => {
            // 解析 XML
            const parser = new DOMParser();
            const xmlDoc = parser.parseFromString(xmlText, "application/xml");
            
            if (xmlDoc.getElementsByTagName("parsererror").length > 0) {
                listContainer.innerHTML = '<p class="text-danger">Error: XML data format is incorrect.</p>';
                return;
            }

            const songs = xmlDoc.getElementsByTagName("Song");
            let listHTML = '';
            let songsRendered = 0;

            // 2. 遍歷並過濾 XML 數據，只顯示當前頁面的項目
            for (let i = 0; i < songs.length; i++) {
                // 檢查是否在當前頁碼的範圍內
                if (i >= startIndex && i < endIndex) {
                    const song = songs[i];
                    // 提取數據
                    const songNameElement = song.getElementsByTagName("SongName")[0];
                    const singerElement = song.getElementsByTagName("Singer")[0];
                    const dateElement = song.getElementsByTagName("Date")[0];
                    const photoElement = song.getElementsByTagName("photo")[0];
                    const pageLinkElement = song.getElementsByTagName("PageLink")[0];

                    if (songNameElement && singerElement && dateElement && photoElement && pageLinkElement) {
                        const songName = songNameElement.textContent;
                        const singer = singerElement.textContent;
                        const date = dateElement.textContent;
                        const photo = photoElement.textContent; 
                        const pageLink = pageLinkElement.textContent;
                        
                        // 生成 HTML 結構
                        listHTML += `
                            <article class="article-item row align-items-start">
                                <div class="col-12 col-md-3 mb-3 mb-md-0">
                                    <a href="${pageLink}" title="${songName}">
                                        <img src="${photo}" alt="${songName}" class="article-thumb img-fluid" />
                                    </a>
                                </div>
                                <div class="col-12 col-md-9">
                                    <div class="d-flex flex-column flex-sm-row align-items-start align-items-sm-center justify-content-between">
                                    <div>
                                            <div class="article-meta">${date}</div>
                                            <h4 class="mt-2 mb-1">
                                                <a class="article-title" href="${pageLink}">${songName}</a>
                                            </h4>
                                        </div>
                                        <div class="mt-2 mt-sm-0 ms-sm-3 text-muted">Singer: ${singer}</div>
                                    </div>
                                </div>
                            </article>
                            <br />
                            <hr class="footer-divider" />
                            <br />
                        `;
                        songsRendered++;
                    }
                }
            }

            // 3. 顯示結果
            if (songsRendered === 0) {
                listContainer.innerHTML = '<p class="text-info">No songs found for this page.</p>';
            } else {
                listContainer.innerHTML = listHTML;
            }
        })
        .catch(error => {
            console.error('Fetch error:', error);
            listContainer.innerHTML = '<p class="text-danger">Failed to load data. Please check item.xml path and network connection.</p>';
        });
});