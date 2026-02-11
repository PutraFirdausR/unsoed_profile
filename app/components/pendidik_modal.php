<div id="profileModal" class="fixed inset-0 z-50 hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    
    <div class="absolute inset-0 bg-black/90 backdrop-blur-sm transition-opacity" onclick="closeProfileModal()"></div>
    
    <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
        <div class="flex min-h-full items-center justify-center p-4 text-center">
            
            <div class="relative w-full max-w-lg md:max-w-2xl flex flex-col items-center transform transition-all" onclick="event.stopPropagation()">
                
                <button onclick="closeProfileModal()" class="absolute -top-12 right-0 md:-right-12 text-white/70 hover:text-yellow-400 transition-colors p-2">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>

                <div class="bg-white p-2 rounded-lg shadow-2xl w-full">
                    <img id="modalImage" src="" alt="Profile View" class="w-full h-auto max-h-[75vh] object-contain rounded bg-slate-100">
                </div>

                <h3 id="modalName" class="text-white text-xl md:text-2xl font-bold mt-4 text-center tracking-wide"></h3>
            </div>
        </div>
    </div>
</div>