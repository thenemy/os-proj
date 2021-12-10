<div x-data>
    <div class="flex flex-row">
        <template x-for="i in 9">
            <div :class="{
                    'bg-blue-100 t-blue-500': i == 1,
                    'bg-blue-200 t-blue-600': i == 2,
                    'bg-blue-300 t-blue-700': i == 3,
                    'bg-blue-400 t-blue-800': i == 4,
                    'bg-blue-500 t-white': i == 5,
                    'bg-blue-600 t-blue-50': i == 6,
                    'bg-blue-700 t-blue-100': i == 7,
                    'bg-blue-800 t-blue-200': i == 8,
                    'bg-blue-900 t-blue-300': i == 9,
            }" x-text="'blue' + i + '00'" class=" "></div>
        </template>
    </div>
</div>


<div class="p-3">
    <div class="scene scene--card">
        <div class="card">
            <div class="card__face card__face--front">
                <x-buttons.student_status_0/>
            </div>
            <div class=" card__face--back">
                <x-buttons.student_status_2/>
            </div>
        </div>
    </div>
</div>

<script>

</script>
