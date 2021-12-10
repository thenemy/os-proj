<div class="items-center" x-data="{ open: false }">
    <x-data_bar.list/>
    <div>
        <button class="p-2 m-4 w-12 bg-blue-300 rounded" x-on:click="open = ! open">
            <x-buttons.menu_bar/>
        </button>
    </div>
    <div x-show="open" x-transition
         class="absolute w-full flex items-center font-extrabold justify-center ">
        <div class="max-w-md w-full space-y-8 bg-purple-600 rounded-3xl shadow-lg ">
        <span class="flex text-white justify-center p-4 mt-4 text-xl justify-center">
            What do you want to do?
        </span>
            <div class="flex flex-col justify-center items-center p-4 m-4 px-4">

                <x-game.join_view/>
                <x-buttons.exit_game>
                    Exit
                </x-buttons.exit_game>
            </div>
        </div>
    </div>
</div>

