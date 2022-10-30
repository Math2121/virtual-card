<div class="container mx-auto">
    <h1 class="text-2xl mt-5 text-gray-800 font-bold pl-7">QR Code Image Generator</h1>

    <form wire:submit.prevent="createQRCode">
        <div class="flex  flex-col sm:flex-row  mt-5  w-full h-10 justify-center items-center ">
            <label for="name" class="bg-gray-200  px-12 text-center rounded-l-lg  w-full sm:w-56  h-full py-2">Name</label>
            <input type="text" name="name" id="name" class="w-full border-gray-300 border-solid border-2 rounded-r-lg h-full "  wire:model="name"/>
        </div>
        @error('name') <span class="error  block text-red-500 mt-2">{{ $message }}</span> @enderror

        <div class="flex  flex-col sm:flex-row  mt-5  w-full h-10 justify-center items-center ">
            <label for="linkedin" class="bg-gray-200  px-12 text-center rounded-l-lg  w-full sm:w-56 h-full py-2">Linkedin URL</label>
            <input type="text" name="linkedin" id="linkedin" class="w-full border-gray-300 border-solid border-2 rounded-r-lg h-full  "  wire:model="linkedin"/>
        </div>
        @error('linkedin') <span class="error block text-red-500 mt-2">{{ $message }}</span> @enderror

        <div class="flex  flex-col sm:flex-row  mt-5  w-full h-10 justify-center items-center ">
            <label for="github" class="bg-gray-200  px-12 text-center rounded-l-lg  w-full sm:w-56 h-full py-2">Github URL</label>
            <input type="text" name="github" id="github" class="w-full border-gray-300 border-solid border-2 rounded-r-lg h-full "   wire:model="github"/>
        </div>
        @error('github') <span class="error block text-red-500 mt-2">{{ $message }}</span> @enderror


        <button type="submit" class="border-black border-2 border-solid rounded mt-14 px-20 py-2">
            Generate Image
        </button>
    </form>
</div>
