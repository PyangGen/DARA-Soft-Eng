<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>DARA Main Page</title>
    @vite(['resources/css/guest/main.css', 'resources/js/guest/main.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

<header>
    <div class="header-left">
        <img src="{{ asset('storage/images/DARA.png') }}" alt="DARA Logo">
        <h2>D A R A</h2>
    </div>

    <!-- Hamburger for mobile -->
    <button class="hamburger" id="hamburger">
        <i class="fa-solid fa-bars"></i>
    </button>

    <nav class="header-nav" id="headerNav">
        @guest
            <a class="loginbutton" href="{{ url('/auth/login') }}">
                <i class="fa-solid fa-right-to-bracket"></i>
                <span>Login</span>
            </a>
        @endguest

        @auth
            <div class="user-dropdown">
                <button class="user-toggle">
                    <span>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span>
                    <i class="fa-solid fa-chevron-down"></i>
                </button>

                <ul class="user-menu">
                    <li>
                        <a href="{{ url('/profile') }}">
                            <i class="fa-solid fa-user-graduate"></i> Profile
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/settings') }}">
                            <i class="fa-solid fa-gear"></i> Settings
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fa-solid fa-right-from-bracket"></i> Logout
                        </a>
                    </li>
                </ul>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">


@section('content')

<div class="contents">

    <div class="brand">
        <img src="{{ asset('storage/images/DARA.png') }}" alt="DARA Logo" class="logo">
        <div class="brand-text">
            <h1 class="site-name">D A R A</h1>
            <p class="tagline">Digital Academic Repository and Archive</p>
        </div>
    </div>

    <form id="searchForm" action="/results" method="get">
        @csrf
        <div class="search">
            <input id="search" name="search" type="text" placeholder="Search by Title or Keywords...">
            <button type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="feather feather-search">
                    <circle cx="11" cy="11" r="8" />
                    <line x1="21" y1="21" x2="16.65" y2="16.65" />
                </svg>
            </button>
        </div>
    </form>


    <div class="categories">
        <div class="category-card">
            <img src="{{ asset('storage/images/case_study.jpg') }}" alt="Case Study">
            <span>Case Study</span>
        </div>
        <div class="category-card">
            <img src="{{ asset('storage/images/proposal.jpg') }}" alt="Proposal">
            <span>Proposal</span>
        </div>
        <div class="category-card">
            <img src="{{ asset('storage/images/thesis.jpg') }}" alt="Thesis">
            <span>Thesis</span>
        </div>
        <div class="category-card">
            <img src="{{ asset('storage/images/capston.jpg') }}" alt="Capstone">
            <span>Capstone</span>
        </div>
        <div class="category-card">
            <img src="{{ asset('storage/images/system_studies.jpg') }}" alt="System Studies">
            <span>System Studies</span>
        </div>
    </div>
</div>


@endsection
