<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('ENJOY YOUR LIFE WITH TRIP PARTNER') }}
        </h2>
    </x-slot>

    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Trip Partner</title>

        <!-- Fonts and Bootstrap -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

        <style>
            body, html {
                padding: 0;
                margin: 0;
                box-sizing: border-box;
                font-family: 'Figtree', sans-serif;
                color: #333;
                background-color: #f9f9f9;
            }

            .header {
                background-color: rgba(231, 10, 96, 0.8);
                color: white;
                padding: 20px;
                border-radius: 5px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            }

            .btn-custom {
                background-color: #e70a60;
                color: white;
                border: none;
            }

            .btn-custom:hover {
                background-color: #d50a55;
            }

            .btn-outline-success {
                --bs-btn-color: #e70a60;
                --bs-btn-border-color: #e70a60;
                --bs-btn-hover-color: #fff;
                --bs-btn-hover-bg: #e70a60;
                --bs-btn-hover-border-color: #e70a60;
            }

            .floating-image {
                animation: floating 7s ease-in-out infinite;
            }

            @keyframes floating {
                0% { transform: translateY(0); }
                50% { transform: translateY(-20px); }
                100% { transform: translateY(0); }
            }

            .background {
                background-image: url('{{ asset('trip9.jpg') }}');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                position: relative;
            }

            .overlay {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background-color: rgba(0, 0, 0, 0.5); /* Dark overlay */
                z-index: 1;
            }

            .content {
                position: relative;
                z-index: 2; /* Bring content above the overlay */
            }
            .btn-photos {
                background-color:  #e70a60; /* Different color */
                color: white;/* Text color */
        border: 2px solid #fff;
        font-weight: bold;
        transition: all 0.3s ease-in-out; 
        box-shadow: 0 4px 15px rgba(0, 140, 186, 0.4);
    }

    .btn-photos:hover {
        background-color: #e6b800; /* Darker shade for hover effect */
    }

    
    .btn-view {
        background-color: #008CBA; /* Different color */
        color: white;
        border: 2px solid #fff; /* White border for contrast */
        font-weight: bold; /* Make text bold */
        transition: all 0.3s ease-in-out; /* Smooth transition */
        box-shadow: 0 4px 15px rgba(0, 140, 186, 0.4); /* Subtle shadow */
    }

    .btn-view:hover {
        background-color: #005f73; /* Darker shade on hover */
        color: #ffcc00; /* Change text color on hover */
        transform: scale(1.05); /* Slight scaling effect */
        box-shadow: 0 6px 20px rgba(0, 95, 115, 0.5); /* More pronounced shadow */
    }


        </style>
    </head>
    <body>
        <div class="background">
    <div class="overlay"></div>
    <div class="content text-center">
        <h1 class="fw-bolder text-white mb-4" style="font-size: 3rem;">
            TRIP PARTNER
        </h1>

        <!-- Row 1: READY and JOIN -->
        <div class="row justify-content-center mb-3">
            <div class="col-md-3">
                <a href="{{ url('/traveller2') }}" class="btn btn-photos rounded-0 w-100">READY</a>
            </div>
            <div class="col-md-3">
                <a href="{{ route('traveller-detail-view2') }}" class="btn btn-photos rounded-0 w-100">JOIN</a>
            </div>
        </div>

        <!-- Row 2: Photos and Gallery -->
        <div class="row justify-content-center mb-3">
            <div class="col-md-3">
                <a href="{{ url('/trip-photo') }}" class="btn btn-view rounded-0 w-100">Photos   </a>
            </div>
            <div class="col-md-3">
                <a href="{{ url('/photo-view') }}" class="btn btn-view rounded-0 w-100">Gallery   </a>
            </div>
        </div>

        <!-- Row 3: Diary and View Diary -->
        <div class="row justify-content-center mb-3">
            <div class="col-md-3">
                <a href="{{ url('/diary') }}" class="btn btn-custom rounded-0 w-100">Diary</a>
            </div>
            <div class="col-md-3">
                <a href="{{ url('/trip-diary') }}" class="btn btn-photos rounded-0 w-100">View Diary</a>
            </div>
        </div>

        <!-- Row 4: Expence and Expence View -->
        <div class="row justify-content-center mb-3">
            <div class="col-md-3">
                <a href="{{ url('/trip-expence') }}" class="btn btn-view rounded-0 w-100">Expence</a>
            </div>
            <div class="col-md-3">
                <a href="{{ url('/expence-view') }}" class="btn btn-custom rounded-0 w-100">Expence View</a>
            </div>
        </div>
        <div class="row justify-content-center mb-3">
            <div class="col-md-3">
                <a href="{{ url('/list') }}" class="btn btn-custom rounded-0 w-100">list</a>
            </div>
</div>
    </div>
</div>

    </body>
    </html>
</x-app-layout>
