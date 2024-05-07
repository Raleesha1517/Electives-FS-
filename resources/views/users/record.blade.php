{{-- 
<x-dropdown align="right" width="48">
    <x-slot name="trigger">
        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
            <div>{{ Auth::user()->name }}</div>

            <div class="ms-1">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </div>
        </button>
    </x-slot>

    <x-slot name="content">
        <x-dropdown-link :href="route('profile.edit')">
            {{ __('Profile') }}
        </x-dropdown-link>

        <!-- Authentication -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-dropdown-link :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-dropdown-link>
        </form>
    </x-slot>
</x-dropdown>

<form method="POST" action="{{ route('logout') }}">
    @csrf

    <x-dropdown-link :href="route('logout')"
            onclick="event.preventDefault();
                        this.closest('form').submit();">
        {{ __('Log Out') }}
    </x-dropdown-link>
</form> --}}



@extends('users.body')

@section('users.content')

<main id="main" class="main">
    <div class="card-container" style="padding: 5px">
        <div class="card" style="background: linear-gradient(to bottom, #e5f8fd, rgb(255, 255, 255));border:solid #8abede 2px" >
            <div class="card-content" style="padding: 15px">
                <div class="pagetitle">
                    <h1>Seizure Record Details</h1>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card-image">
                            <!-- Add your image here -->
                            <img src="{{ url('users/assets/img/1.png') }}" alt="" style="height: 300px;padding-left:100px">
                        </div>
                    </div>
                    <div class="col">
                        <div class="table-container">
                            <table class="borderless-table">
                                <tbody>
                                    <tr>
                                        <td id="sinhala"><strong>{{__('common.Date')}}</strong></td>
                                        <td>{{ $seizureRecord->date }}</td>
                                    </tr>
                                    <tr>
                                        <td id="sinhala"><strong>{{__('common.Episode')}}</strong></td>
                                        <td>{{ $seizureRecord->episode_number }}</td>
                                    </tr>
                                    <tr>
                                        <td id="sinhala"><strong>{{__('common.Temperature')}}</strong></td>
                                        <td id="sinhala"> {{ $seizureRecord->temperature ?? __('common.N/A') }} F</td>
                                    </tr>
                                    <tr>
                                        <td id="sinhala"><strong>{{__('common.Fever')}}</strong></td>
                                        <td id="sinhala">{{ $seizureRecord->fever == 1 ? __('common.Yes') : __('common.No') }}</td>
                                    </tr>
                                    
                                    <tr>
                                        <td id="sinhala"><strong>{{__('common.Time')}}</strong></td>
                                        <td>{{ $seizureRecord->time }}</td>
                                    </tr>
                                    <tr>
                                        <td id="sinhala"><strong>{{__('common.Duration')}}</strong></td>
                                        <td>{{ $seizureRecord->duration }}</td>
                                    </tr>
                                    <tr>
                                        <td id="sinhala"><strong>{{__('common.Description')}}</strong></td>
                                        <td>{{ $seizureRecord->description }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <a href="{{ route('users.dashboard') }}" class="btn custombtn">{{__('common.Back')}}</a>
            </div>
        </div>
    </div>
</main>


  @endsection