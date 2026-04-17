<section id="booking" class="py-24 bg-slate-50 font-sans">
    <div class="max-w-7xl mx-auto px-6">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-0 border-2 border-slate-900 bg-white shadow-[20px_20px_0px_0px_rgba(15,23,42,1)]">
            
            <div class="lg:col-span-4 bg-slate-900 p-10 text-white border-b-2 lg:border-b-0 lg:border-r-2 border-slate-900">
                <p class="text-blue-500 font-black uppercase tracking-[0.3em] text-[10px] mb-4">Step 01</p>
                <h3 class="text-3xl font-[1000] uppercase tracking-tighter mb-10">Select Your <br><span class="text-blue-500 italic">Service</span></h3>
                
                <div class="space-y-4" id="package-options">
                    <label class="block cursor-pointer group">
                        <input type="radio" name="pack_choice" value="5.00" data-name="Essential Deep Wash" class="peer hidden" checked>
                        <div class="p-5 border border-white/10 group-hover:border-blue-500 peer-checked:border-blue-500 peer-checked:bg-blue-600 transition-all">
                            <div class="flex justify-between items-center text-white">
                                <span class="font-black uppercase text-xs tracking-widest text-white">Essential Deep Wash</span>
                                <span class="font-[1000] text-lg text-white">$5</span>
                            </div>
                        </div>
                    </label>

                    <label class="block cursor-pointer group">
                        <input type="radio" name="pack_choice" value="3.00" data-name="Pro Heat Drying" class="peer hidden">
                        <div class="relative p-5 border border-white/10 group-hover:border-blue-500 peer-checked:border-blue-500 peer-checked:bg-blue-600 transition-all">
                            <div class="absolute -top-2 -right-2 bg-yellow-400 text-slate-900 text-[8px] font-black px-2 py-0.5 rotate-12 uppercase">Fast</div>
                            <div class="flex justify-between items-center text-white">
                                <span class="font-black uppercase text-xs tracking-widest text-white">Pro Heat Drying</span>
                                <span class="font-[1000] text-lg text-white">$3</span>
                            </div>
                        </div>
                    </label>

                    <label class="block cursor-pointer group">
                        <input type="radio" name="pack_choice" value="8.00" data-name="Premium Full Care" class="peer hidden">
                        <div class="p-5 border border-white/10 group-hover:border-blue-500 peer-checked:border-blue-500 peer-checked:bg-blue-600 transition-all border-2">
                            <div class="flex justify-between items-center text-white">
                                <span class="font-black uppercase text-xs tracking-widest leading-tight text-white">Premium Full Care<br><span class="text-[9px] opacity-70 italic font-medium lowercase">Wash + Dry</span></span>
                                <span class="font-[1000] text-lg text-white">$8</span>
                            </div>
                        </div>
                    </label>
                </div>

                <div class="mt-12 p-4 bg-white/5 border border-white/10">
                    <p class="text-[10px] text-slate-400 leading-relaxed font-medium uppercase italic">
                        <span class="text-blue-500 font-black tracking-widest uppercase block mb-1 underline">Logistics:</span>
                        Door-to-door pickup included for all Taghazout residents.
                    </p>
                </div>
            </div>

            <div class="lg:col-span-8 p-8 md:p-12 bg-white text-slate-900">
                <p class="text-blue-600 font-black uppercase tracking-[0.3em] text-[10px] mb-4">Step 02</p>
                <h4 class="font-black uppercase text-xs tracking-widest text-slate-900 mb-8 underline decoration-blue-600 decoration-4 underline-offset-8">Schedule Pickup Window</h4>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                    <div>
                        <div class="flex justify-between items-center mb-6">
                            <span id="current-month" class="font-black text-sm uppercase text-slate-900">Month Year</span>
                            <div class="flex gap-1">
                                <button onclick="changeMonth(-1)" class="p-1 border border-slate-200 hover:bg-slate-100"><svg class="w-3 h-3 text-slate-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="3" d="M15 19l-7-7 7-7"></path></svg></button>
                                <button onclick="changeMonth(1)" class="p-1 border border-slate-200 hover:bg-slate-100"><svg class="w-3 h-3 text-slate-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="3" d="M9 5l7 7-7 7"></path></svg></button>
                            </div>
                        </div>
                        <div class="grid grid-cols-7 gap-1 text-center text-[9px] font-black uppercase text-slate-400 mb-4">
                            <div>Mo</div><div>Tu</div><div>We</div><div>Th</div><div>Fr</div><div>Sa</div><div>Su</div>
                        </div>
                        <div id="calendar-grid" class="grid grid-cols-7 gap-1">
                            </div>
                    </div>

                    <div>
                        <p class="text-[9px] font-black uppercase text-slate-400 mb-4 tracking-widest">Available Slots (9AM - 9PM)</p>
                        <div id="time-slots-container" class="grid grid-cols-1 gap-2 max-h-[280px] overflow-y-auto pr-2 custom-scrollbar border-t md:border-t-0 pt-6 md:pt-0">
                            </div>
                    </div>
                </div>

                <div class="mt-12 pt-8 border-t-2 border-slate-100 flex flex-col items-center gap-6 text-center">
                   
                    <button onclick="initiateCheckout()" 
                    class="bg-blue-600 text-white px-12 py-5 font-[1000] uppercase tracking-widest border-2 border-slate-900 shadow-[8px_8px_0px_0px_rgba(15,23,42,1)] hover:shadow-none hover:translate-x-1 hover:translate-y-1 transition-all active:scale-95">
                        Confirm Booking
                    </button>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
    .custom-scrollbar::-webkit-scrollbar { width: 4px; }
    .custom-scrollbar::-webkit-scrollbar-track { background: #f1f1f1; }
    .custom-scrollbar::-webkit-scrollbar-thumb { background: #0f172a; }
</style>

<script>
    let date = new Date(); // Current date
    let selectedFullDate = null;
    let selectedTime = "10:00";

    const slotsContainer = document.getElementById('time-slots-container');
    const finalSelectionText = document.getElementById('final-selection');
    const totalPriceText = document.getElementById('total-price');

    // 1. Generate Calendar Logic
    function renderCalendar() {
        const calendarGrid = document.getElementById('calendar-grid');
        const monthDisplay = document.getElementById('current-month');
        const today = new Date();
        today.setHours(0,0,0,0);

        calendarGrid.innerHTML = '';
        const month = date.getMonth();
        const year = date.getFullYear();
        monthDisplay.innerText = `${date.toLocaleString('default', { month: 'long' })} ${year}`;

        // Get first day of month (Monday start adjustment)
        let firstDay = new Date(year, month, 1).getDay();
        firstDay = firstDay === 0 ? 6 : firstDay - 1; 

        const daysInMonth = new Date(year, month + 1, 0).getDate();

        // Padding
        for (let x = 0; x < firstDay; x++) {
            calendarGrid.innerHTML += `<div></div>`;
        }

        // Days
        for (let i = 1; i <= daysInMonth; i++) {
            const checkDate = new Date(year, month, i);
            const isPast = checkDate < today;
            const isSelected = selectedFullDate === checkDate.toDateString();
            
            let btnClass = isPast 
                ? "text-slate-200 pointer-events-none" 
                : "border border-slate-100 hover:border-slate-900 font-black text-slate-900";
            
            if (isSelected) btnClass = "bg-blue-600 text-white border-2 border-slate-900";

            calendarGrid.innerHTML += `
                <button onclick="selectDate(this, ${i}, ${month}, ${year})" 
                    class="aspect-square flex items-center justify-center text-xs transition-all ${btnClass}">
                    ${i}
                </button>
            `;
        }
    }

    function selectDate(element, day, month, year) {
        const d = new Date(year, month, day);
        selectedFullDate = d.toDateString();
        renderCalendar();
        updateSummary();
    }

    function changeMonth(dir) {
        date.setMonth(date.getMonth() + dir);
        renderCalendar();
    }

    // 2. Generate Time Slots
    function renderTimeSlots() {
        slotsContainer.innerHTML = '';
        for (let h = 9; h < 21; h++) {
            const time = `${h.toString().padStart(2, '0')}:00`;
            const next = `${(h+1).toString().padStart(2, '0')}:00`;
            const label = document.createElement('label');
            label.className = "block cursor-pointer";
            label.innerHTML = `
                <input type="radio" name="pickup_slot" value="${time}" class="peer hidden" ${time === "10:00" ? 'checked' : ''}>
                <div class="p-3 border-2 border-slate-100 font-black text-slate-900 text-[11px] text-center uppercase peer-checked:border-slate-900 peer-checked:bg-slate-50 transition-all hover:border-slate-400">
                    ${time} - ${next}
                </div>
            `;
            label.addEventListener('change', (e) => {
                selectedTime = e.target.value;
                updateSummary();
            });
            slotsContainer.appendChild(label);
        }
    }

    // 3. Real-time Summary Logic
    function updateSummary() {
        const selectedPack = document.querySelector('input[name="pack_choice"]:checked');
        const packName = selectedPack ? selectedPack.getAttribute('data-name') : "---";
        const price = selectedPack ? selectedPack.value : "0";
        
        const dateDisplay = selectedFullDate ? selectedFullDate : "Select Date";
        
        finalSelectionText.innerHTML = `${packName} <br> <span class="text-blue-600 text-sm font-black uppercase tracking-widest">${dateDisplay} @ ${selectedTime}</span>`;
        totalPriceText.innerText = price;
    }

    // Initialize
    renderCalendar();
    renderTimeSlots();
    
    document.querySelectorAll('input[name="pack_choice"]').forEach(input => {
        input.addEventListener('change', updateSummary);
    });

    updateSummary();

    function initiateCheckout() {
        if(!selectedFullDate) {
            alert("Please select a date from the calendar first!");
            return;
        }
        alert("Booking confirmed for: " + finalSelectionText.innerText.replace('<br>', ' '));
    }
</script>