<div class="mt-14">
    <div class="flex">
        <h1
            class="mx-auto text-3xl font-bold text-transparent bg-gradient-to-r from-blue-500 to-teal-400 bg-clip-text mb-8">
            Belajar Livewire
        </h1>
    </div>

    <div class="flex">
        <h1 class="mx-auto font-bold text-2xl mb-4">{{ $count }}</h1>
    </div>
    <div class="space-x-3 flex justify-center">
        <button wire:click="decrement" class="px-6 py-2.5 bg-gray-800 text-white rounded-lg "> - </button>
        <button wire:click="increment"
            class="px-6 py-2.5 bg-gradient-to-r from-blue-500 to-teal-400 text-white rounded-lg "> + </button>
    </div>

</div>
