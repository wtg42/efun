{{-- EfunContactForm --}}
<section class="relative block py-24 lg:pt-0 bg-gray-900">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap justify-center lg:-mt-64 -mt-48">
            <div class="w-full lg:w-6/12 px-4">\
                <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300">
                    <form wire:submit.prevent="submitForm">

                        @if (session()->has('success_message'))
                            <div class="bg-green-100 p-5 w-full sm rounded">
                                <div class="flex justify-between">
                                    <div class="flex space-x-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            class="flex-none fill-current text-green-500 h-4 w-4">
                                            <path
                                                d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.25 16.518l-4.5-4.319 1.396-1.435 3.078 2.937 6.105-6.218 1.421 1.409-7.5 7.626z">
                                            </path>
                                        </svg>
                                        <div class="flex-1 leading-tight text-sm text-green-700 font-medium">
                                            {{ session('success_message') }}
                                        </div>
                                    </div>
                                    <svg wire:click="dismissSuccessMessage" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" class="flex-none fill-current text-green-600 h-3 w-3">
                                        <path
                                            d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        @endif

                        <div class="flex-auto p-5 lg:p-10">

                            <h4 class="text-2xl font-semibold">想與我們聯繫？</h4>
                            <p class="leading-relaxed mt-1 mb-4 text-gray-600">
                                填入聯絡資訊我們將會盡快聯絡你。
                            </p>
                            <div class="relative w-full mb-3 mt-8">
                                <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                    for="full-name">聯絡人</label>
                                <input wire:model.lazy="name" type="text"
                                    class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                                    placeholder="聯絡人姓名" style="transition: all 0.15s ease 0s;" />
                                @error('name')<span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                            </div>
                            <div class="relative w-full mb-3">
                                <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                    for="email">電子信箱</label>
                                <input wire:model.lazy="email"
                                    class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                                    placeholder="Email" style="transition: all 0.15s ease 0s;" />
                                @error('email') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                            </div>
                            <div class="relative w-full mb-3">
                                <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                    for="message">訊息</label>
                                <textarea wire:model.lazy="message" rows="4" cols="80"
                                    class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                                    placeholder="留下你的訊息"></textarea>
                                @error('message') <span class="text-red-500 text-xs">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="text-center mt-6">
                                <span class="inline-flex rounded-md shadow-sm">
                                    <button type="submit"
                                        class="inline-flex bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 disabled:opacity-50"
                                        type="button" style="transition: all 0.15s ease 0s;">
                                        <svg wire:loading wire:target='submitForm'
                                            class="animate-spin h-5 w-5 mr-3 text-white"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                                stroke-width="4"></circle>
                                            <path class="opacity-75" fill="currentColor"
                                                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                            </path>
                                        </svg>
                                        提交
                                    </button>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
