// load_detail.js - Item Detail Page 數據載入邏輯 
document.addEventListener('DOMContentLoaded', function() { 
    const detailContainer = document.getElementById('song-detail-container'); 
 
    // 1. 從 URL 讀取歌曲 ID  
    const urlParams = new URLSearchParams(window.location.search); 
    const songId = urlParams.get('id'); 
    if (!songId) { 
        detailContainer.innerHTML = '<p class="text-danger">Error: Song ID not specified in URL (e.g., music1.php?id=1).</p>'; 
        return; 
    } 

    // 設定 XML 路徑 
    const xmlFile = '/XML/itemDetail.xml';  
    fetch(xmlFile) 
        .then(response => { 
            if (!response.ok) { 
                throw new Error(`HTTP error! status: ${response.status}`); 
            } 
            return response.text(); 
        }) 

        .then(xmlText => { 
            const parser = new DOMParser(); 
            const xmlDoc = parser.parseFromString(xmlText, "application/xml"); 
            
            if (xmlDoc.getElementsByTagName("parsererror").length > 0) { 
                detailContainer.innerHTML = '<p class="text-danger">Error: itemDetail.xml format is incorrect.</p>'; 
                return; 
            } 

            // 2. 尋找對應 ID 的歌曲詳情 
            const details = xmlDoc.getElementsByTagName("Detail"); 
            let songDetail = null; 
            for (let i = 0; i < details.length; i++) { 
                const idElement = details[i].getElementsByTagName("id")[0]; 
                if (idElement && idElement.textContent === songId) { 
                    songDetail = details[i]; 
                    break; 
                } 
            } 

            // 3. 渲染內容 
            if (songDetail) { 
                const songName = songDetail.getElementsByTagName("SongName")[0]?.textContent || 'N/A'; 
                const singer = songDetail.getElementsByTagName("Singer")[0]?.textContent || 'N/A'; 
                const date = songDetail.getElementsByTagName("Date")[0]?.textContent || 'N/A'; 

                // **【修改點】** 讀取新的 <VideoPath> 
                const videoPath = songDetail.getElementsByTagName("VideoPath")[0]?.textContent || '';  
                const coverPhoto = songDetail.getElementsByTagName("CoverPhoto")[0]?.textContent || ''; 

                // 提取歌曲資訊 
                const info = songDetail.getElementsByTagName("SongInfo")[0]; 
                const composer = info?.getElementsByTagName("Composer")[0]?.textContent || 'N/A'; 
                const lyricist = info?.getElementsByTagName("Lyricist")[0]?.textContent || 'N/A'; 
                const arranger = info?.getElementsByTagName("Arranger")[0]?.textContent || 'N/A'; 
                const producer = info?.getElementsByTagName("Producer")[0]?.textContent || 'N/A'; 
               
                let lyricsHTML = ''; 
                const lyricsSection = songDetail.getElementsByTagName("Lyrics")[0]; 
                if (lyricsSection) { 
                    Array.from(lyricsSection.childNodes).forEach(node => { 
                        if (node.nodeType === 1) {  
                            if (node.tagName === 'Line') { 
                                lyricsHTML += `<p>${node.textContent}</p>`; 
                            } else if (node.tagName === 'ParagraphSeparator') { 
                                lyricsHTML += '<br />'; 
                            } 
                        } 
                    }); 
                } 

                // **【修改點】** 使用 <video> 標籤替換 iframe 
                const videoHTML = videoPath ? ` 
                    <section class="mb-4"> 
                        <div class="ratio ratio-16x9"> 
                            <video controls width="100%" height="auto" poster="${coverPhoto}"> 
                                <source src="${videoPath}" type="video/mp4"> 
                                您的瀏覽器不支援 video 標籤。 
                            </video> 
                        </div> 
                    </section> 
                ` : ''; 

                // 組合完整的 HTML 內容 
                let detailHTML = ` 
                    <h1 class="h2 mb-2">${songName}</h1> 
                    <div class="meta">${singer} · ${date}</div> 
                 
                    ${videoHTML} 
                    <section class="mb-4"> 
                        <h3>Lyrics</h3> 
                        <p> 
                            Composer: ${composer}<br /> 
                            Lyricist: ${lyricist}<br /> 
                            Arranger: ${arranger}<br /> 
                            Producer: ${producer} 
                        </p> 

                        ${lyricsHTML} 
                    </section> 
                `; 
              
                detailContainer.innerHTML = detailHTML; 
            } else { 
                detailContainer.innerHTML = `<p class="text-info">Song with ID ${songId} not found in XML.</p>`; 
            } 
        }) 

        .catch(error => { 
            console.error('Fetch error:', error); 
            detailContainer.innerHTML = '<p class="text-danger">Failed to load song details. Check console for error details.</p>'; 
        }); 
}); 