<x-app-layout>
    <x-slot name="header">
        <h2 class="conteiner-header font-semibold text-xl text-gray-800 leading-tight">

                {{ __('Dashboard') }}
                @can('admin')
                    {{ 'Admin' }}
                @endcan
                @can('default')
                    {{ 'Default' }}
                @endcan

                <a href="{{ route('register') }}"class="register-link font-semibold text-gray-600 hover:text-gray-900">Register</a>
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
    </div>
</x-app-layout>


<style>
    .conteiner-header {
        border:solid red 1px;

    }

    h2 span {
        margin-left: 6px;
        /* border:solid red 1px; */
    }

    h2 span:hover {
        color: #6875F5;
        cursor: pointer;
    }

    .register-link {
        color: #1F2937;
    }

    .register-link:hover {
        color: #6875F5;
        cursor: pointer;
    }
</style>
