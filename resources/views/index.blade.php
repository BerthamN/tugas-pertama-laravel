

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hmmmmmmmmmm') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">                
                <div class="p-6 text-gray-900">
                    <p>Selamat Datang
                        <b> 
                            {{Auth::user()->name}} 
                        </b>
                        di website kami
                    </p> 
                    <p>Hello World</p>
                    <center>
                        <h6>
                            Cebelapa imut ci aq 🥺👉👈
                        </h6>
                    </center>
                </div>
            
            </div>
        </div>
    </div>
</x-app-layout>
