<?php
// FILE: app/components/kependidikan_modal.php
?>
<div id="staffModal" class="relative z-50 hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="fixed inset-0 bg-black/80 transition-opacity backdrop-blur-sm" onclick="closeStaffModal()"></div>

    <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
        <div class="flex min-h-full items-center justify-center p-4 text-center" onclick="closeStaffModal()">
            
            <div class="relative transform overflow-hidden rounded-xl bg-white text-left shadow-2xl transition-all sm:w-full sm:max-w-lg" onclick="event.stopPropagation()">
                
                <div class="bg-gray-50 px-5 py-4 flex justify-between items-center border-b border-gray-100">
                    <h3 class="text-sm font-bold text-[#002b54] uppercase tracking-wider">Detail Personil</h3>
                    <button type="button" class="rounded-full bg-white text-gray-400 hover:text-red-500 hover:bg-red-50 focus:outline-none transition p-1.5" onclick="closeStaffModal()">
                        <span class="sr-only">Close</span>
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <div class="bg-white p-6 flex justify-center bg-pattern">
                    <img id="modalImage" src="" alt="Staff Profile" 
                         class="w-auto h-auto max-h-[60vh] object-contain rounded-lg shadow-sm border border-gray-100">
                </div>
                
                <div class="bg-gray-50 px-6 py-5 border-t border-gray-100 text-center">
                     <p id="modalName" class="text-lg font-bold text-[#002b54] mb-1"></p>
                     <span id="modalDept" class="inline-block px-3 py-1 bg-blue-100 text-blue-800 text-xs font-bold rounded-full"></span>
                </div>

            </div>
        </div>
    </div>
</div>