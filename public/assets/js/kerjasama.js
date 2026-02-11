document.addEventListener('DOMContentLoaded', function() {
    
    function initTable(data, tableBodyId, searchInputId, infoId, prevBtnId, nextBtnId) {
        let currentPage = 1;
        const rowsPerPage = 5;
        let filteredData = data;

        const tableBody = document.getElementById(tableBodyId);
        const searchInput = document.getElementById(searchInputId);
        const info = document.getElementById(infoId);
        const prevBtn = document.getElementById(prevBtnId);
        const nextBtn = document.getElementById(nextBtnId);

        if(!tableBody) return; 

        function renderTable() {
            tableBody.innerHTML = '';
            const start = (currentPage - 1) * rowsPerPage;
            const end = start + rowsPerPage;
            const paginatedItems = filteredData.slice(start, end);

            if(paginatedItems.length === 0) {
                tableBody.innerHTML = '<tr><td colspan="5" class="px-6 py-8 text-center text-gray-500">Data tidak ditemukan</td></tr>';
                info.innerText = '0 data';
                return;
            }

            paginatedItems.forEach(item => {
                let levelBadge = `<span class="px-2 py-1 text-xs font-semibold rounded-md bg-gray-100 text-gray-600">${item.level}</span>`;
                if(item.level.toLowerCase().includes('internasional')) {
                    levelBadge = `<span class="px-2 py-1 text-xs font-semibold rounded-md bg-blue-100 text-blue-700">Internasional</span>`;
                } else if (item.level.toLowerCase().includes('nasional')) {
                    levelBadge = `<span class="px-2 py-1 text-xs font-semibold rounded-md bg-green-100 text-green-700">Nasional</span>`;
                }

                const row = `
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-8 py-4 text-center text-sm text-gray-500 font-medium">${item.no}</td>
                        <td class="px-6 py-4 text-sm font-semibold text-gray-800">${item.mitra}</td>
                        <td class="px-6 py-4 text-sm">${levelBadge}</td>
                        <td class="px-6 py-4 text-sm text-gray-600 leading-relaxed">${item.judul}</td>
                        <td class="px-8 py-4 text-sm text-gray-500 text-right font-mono">${item.waktu}</td>
                    </tr>
                `;
                tableBody.innerHTML += row;
            });

            info.innerText = `Menampilkan ${start + 1} - ${Math.min(end, filteredData.length)} dari ${filteredData.length} data`;
            prevBtn.disabled = currentPage === 1;
            nextBtn.disabled = end >= filteredData.length;
        }

        searchInput.addEventListener('keyup', (e) => {
            const term = e.target.value.toLowerCase();
            filteredData = data.filter(item => 
                item.mitra.toLowerCase().includes(term) || 
                item.judul.toLowerCase().includes(term)
            );
            currentPage = 1;
            renderTable();
        });

        prevBtn.addEventListener('click', () => {
            if(currentPage > 1) {
                currentPage--;
                renderTable();
            }
        });

        nextBtn.addEventListener('click', () => {
            if((currentPage * rowsPerPage) < filteredData.length) {
                currentPage++;
                renderTable();
            }
        });

        renderTable();
    }

    if(window.UNSOED_DATA) {
        initTable(window.UNSOED_DATA.research, 'tableBodyResearch', 'searchResearch', 'infoResearch', 'prevResearch', 'nextResearch');
        initTable(window.UNSOED_DATA.community, 'tableBodyCommunity', 'searchCommunity', 'infoCommunity', 'prevCommunity', 'nextCommunity');
        initTable(window.UNSOED_DATA.education, 'tableBodyEducation', 'searchEducation', 'infoEducation', 'prevEducation', 'nextEducation');
    }
});