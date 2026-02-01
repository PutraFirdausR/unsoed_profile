/**
 * TableManager Class
 * UI Updated: Solid hover states for pagination & Better Badges
 */
class TableManager {
    constructor(data, config) {
        this.originalData = data;
        this.currentData = data;
        this.currentPage = 1;
        this.rowsPerPage = 5; 
        this.themeColor = config.theme || 'blue'; // 'blue', 'teal', 'indigo'
        
        this.bodyEl = document.getElementById(config.bodyId);
        this.prevBtn = document.getElementById(config.prevId);
        this.nextBtn = document.getElementById(config.nextId);
        this.infoEl = document.getElementById(config.infoId);
        this.searchInput = document.getElementById(config.searchId);
        
        this.init();
    }

    init() {
        this.render();
        this.applyThemeToButtons();

        this.prevBtn.addEventListener('click', () => this.changePage(-1));
        this.nextBtn.addEventListener('click', () => this.changePage(1));
        this.searchInput.addEventListener('keyup', (e) => {
            this.filter(e.target.value);
        });
    }

    applyThemeToButtons() {
        let hoverClass, borderClass;

        if (this.themeColor === 'teal') {
             hoverClass = 'hover:bg-teal-600';
             borderClass = 'hover:border-teal-600';
        } else if (this.themeColor === 'indigo') {
             hoverClass = 'hover:bg-indigo-600';
             borderClass = 'hover:border-indigo-600';
        } else { // default blue
             hoverClass = 'hover:bg-blue-600';
             borderClass = 'hover:border-blue-600';
        }
        
        const commonHover = [hoverClass, 'hover:text-white', borderClass];
        this.prevBtn.classList.add(...commonHover);
        this.nextBtn.classList.add(...commonHover);
    }

    filter(query) {
        const lower = query.toLowerCase();
        this.currentData = this.originalData.filter(item => 
            item.mitra.toLowerCase().includes(lower) || 
            item.judul.toLowerCase().includes(lower)
        );
        this.currentPage = 1;
        this.render();
    }

    changePage(direction) {
        this.currentPage += direction;
        this.render();
    }

    getLevelBadge(level) {
        let classes = 'bg-gray-100 text-gray-600 border-gray-200';
        
        if(level === 'Internasional') {
            classes = 'bg-purple-50 text-purple-700 border-purple-100 ring-1 ring-purple-500/10';
        } else if(level === 'Nasional') {
            classes = 'bg-blue-50 text-blue-700 border-blue-100 ring-1 ring-blue-500/10';
        } else if(level === 'Lokal') {
            classes = 'bg-amber-50 text-amber-700 border-amber-100 ring-1 ring-amber-500/10';
        }
        
        return `<span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold border ${classes}">${level}</span>`;
    }

    render() {
        this.bodyEl.innerHTML = '';
        const start = (this.currentPage - 1) * this.rowsPerPage;
        const end = start + this.rowsPerPage;
        const paginatedItems = this.currentData.slice(start, end);

        if(paginatedItems.length === 0) {
            this.bodyEl.innerHTML = `
                <tr>
                    <td colspan="5" class="py-12 text-center">
                        <div class="flex flex-col items-center justify-center">
                            <svg class="w-12 h-12 text-gray-300 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <span class="text-sm text-gray-500 font-medium">Data Belum Tersedia</span>
                        </div>
                    </td>
                </tr>`;
        } else {
            paginatedItems.forEach(item => {
                const row = `
                    <tr class="hover:bg-slate-50 transition-colors duration-200 group">
                        <td class="px-8 py-5 text-center text-sm font-bold text-gray-400 group-hover:text-gray-600">${item.no}</td>
                        <td class="px-6 py-5">
                            <div class="text-sm font-bold text-slate-800 group-hover:text-blue-700 transition-colors">${item.mitra}</div>
                        </td>
                        <td class="px-6 py-5 whitespace-nowrap">
                            ${this.getLevelBadge(item.level)}
                        </td>
                        <td class="px-6 py-5 text-sm text-slate-600 leading-relaxed font-medium">
                            ${item.judul}
                        </td>
                        <td class="px-8 py-5 text-right">
                            <span class="text-xs font-mono text-slate-500 bg-slate-100 px-2 py-1 rounded border border-slate-200 whitespace-nowrap">${item.waktu}</span>
                        </td>
                    </tr>
                `;
                this.bodyEl.innerHTML += row;
            });
        }

        const total = this.currentData.length;
        const startInfo = total === 0 ? 0 : start + 1;
        const endInfo = Math.min(end, total);
        
        this.infoEl.innerHTML = `Menampilkan <span class="font-bold text-gray-900">${startInfo}-${endInfo}</span> dari <span class="font-bold text-gray-900">${total}</span> data`;
        
        this.prevBtn.disabled = this.currentPage === 1;
        this.nextBtn.disabled = end >= total;
        
        const setDisabledStyle = (btn, isDisabled) => {
            if(isDisabled) {
                btn.style.opacity = '0.4';
                btn.style.cursor = 'not-allowed';
                btn.classList.add('bg-gray-50'); 
            } else {
                btn.style.opacity = '1';
                btn.style.cursor = 'pointer';
                btn.classList.remove('bg-gray-50');
            }
        };

        setDisabledStyle(this.prevBtn, this.currentPage === 1);
        setDisabledStyle(this.nextBtn, end >= total);
    }
}

document.addEventListener('DOMContentLoaded', () => {
    if(window.UNSOED_DATA) {
        // Research Table (Blue)
        new TableManager(window.UNSOED_DATA.research, {
            bodyId: 'tableBodyResearch',
            prevId: 'prevResearch',
            nextId: 'nextResearch',
            infoId: 'infoResearch',
            searchId: 'searchResearch',
            theme: 'blue'
        });

        // Community Table (Teal)
        new TableManager(window.UNSOED_DATA.community, {
            bodyId: 'tableBodyCommunity',
            prevId: 'prevCommunity',
            nextId: 'nextCommunity',
            infoId: 'infoCommunity',
            searchId: 'searchCommunity',
            theme: 'teal'
        });

        // Education Table (Indigo) - NEW
        new TableManager(window.UNSOED_DATA.education, {
            bodyId: 'tableBodyEducation',
            prevId: 'prevEducation',
            nextId: 'nextEducation',
            infoId: 'infoEducation',
            searchId: 'searchEducation',
            theme: 'indigo'
        });
    }
});