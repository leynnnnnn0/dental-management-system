<div wire:ignore>
    <div id="fullcalendar" class="h-[450px] w-full"></div>
</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js"></script>
<script>
    document.addEventListener('livewire:initialized', () => {
        const calendarEl = document.getElementById('fullcalendar');
        const calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay'
            }
        });

        calendar.render();
    });
</script>
@endpush

@push('styles')
<style>
    #fullcalendar {
        height: 500px;
    }
</style>
@endpush