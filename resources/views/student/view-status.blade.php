@php
    $filter = request('filter');
@endphp

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DARA - Student Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/std.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mainpage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/std_control.css') }}">
    <link rel="stylesheet" href="{{ asset('css/svg.css') }}">
</head>
<style>
    body {
    background-color: #fdf9e9;
    }
    .main {
        display: flex;
        overflow: hidden;
    }
    header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px 30px !important;
        background-color: #fdf9e9;
        border-bottom: 3px solid #000 !important;
    }
    header h2 {
        letter-spacing: 5px;
		margin-left: 35px;
        padding: 0;
        font-weight: bold;
        color: #04128e;
        text-align: left;
    }
    .profile {
        margin: 10px !important;
    }
    .profile h2 {
        font-weight: bold; 
        font-size: 30px; 
        color: #000;
        letter-spacing: 2px;
    }
</style>
<body >
    <main >
        <header> 
            <div class="ahh">
                <svg xmlns="http://www.w3.org/2000/svg" 
                    width="25"
                    height="25"
                    viewBox="0 0 24 24" 
                    fill="none" 
                    stroke="currentColor" 
                    class="home-icon">
                    <path stroke-linecap="round" 
                        stroke-linejoin="round" 
                        stroke-width="3" 
                        d="M3 9.75L12 3l9 6.75V21a.75.75 0 01-.75.75h-5.25a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H3.75A.75.75 0 013 21V9.75z"/>
                </svg>
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="25"
                    height="25"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="3"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="feather feather-log-in">
                    <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4" />
                    <polyline points="10 17 15 12 10 7" />
                    <line x1="15" y1="12" x2="3" y2="12" />
                </svg>
            </div>
            <h2>DARA</h2>
        </header> 
         
    <div class="main" >
        <div class="left">
            <nav class="nav-links" >
                <div class="profile">
                    <h2>
                        {{ Auth::user()->first_name }}
                    </h2>
                </div>
              <a href="dashboard" style="font-weight: 500; font-size: 14px; margin-left:10px;">
                  <!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd' >
                  <svg width="24"
                      height="24" enable-background="new 0 0 64 64" id="Layer_1" version="1.1" viewBox="0 0 64 64" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M38,54.0001221c0,1.1044922,0.8955078,2,2,2s2-0.8955078,2-2v-1c0-4.9624023-4.0375977-9-9-9h-2   c-4.9624023,0-9,4.0375977-9,9v1c0,1.1044922,0.8955078,2,2,2s2-0.8955078,2-2v-1c0-2.7568359,2.2431641-5,5-5h2   c2.7568359,0,5,2.2431641,5,5V54.0001221z"/><path d="M61.2695313,24.4547119l-28-23c-0.7382813-0.6064453-1.8007813-0.6064453-2.5390625,0l-28,23   C2.2680664,24.8345947,2,25.4014893,2,26.0001221v8c0,1.1044922,0.8955078,2,2,2h3v25c0,1.1044922,0.8955078,2,2,2h15   c1.1044922,0,2-0.8955078,2-2s-0.8955078-2-2-2H11v-25c0-1.1044922-0.8955078-2-2-2H6v-5.0546875L32,5.588501l26,21.3569336   v5.0546875h-3c-1.1044922,0-2,0.8955078-2,2v25H40c-1.1044922,0-2,0.8955078-2,2s0.8955078,2,2,2h15c1.1044922,0,2-0.8955078,2-2   v-25h3c1.1044922,0,2-0.8955078,2-2v-8C62,25.4014893,61.7319336,24.8345947,61.2695313,24.4547119z"/></g></svg>

                  Dashboard
              </a>
              <a href="search" style="font-weight: 500; font-size: 14px; margin-left:10px;">
                  <!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg enable-background="new 0 0 50 50" height="24px" id="Layer_1" version="1.1" viewBox="0 0 50 50" width="24px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><rect fill="none" height="50" width="50"/><circle cx="21" cy="20" fill="none" r="16" stroke="#000000" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"/><line fill="none" stroke="#000000" stroke-miterlimit="10" stroke-width="4" x1="32.229" x2="45.5" y1="32.229" y2="45.5"/></svg>
                  Search Studies
              </a>
                <a href="submission" style="font-weight: 500; font-size: 14px;  margin-left:10px;">
                  <svg height="26" width="26" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve"><path d="M35,2H17c-0.2651367,0-0.5195313,0.1054688-0.7070313,0.2929688l-8,8C8.1054688,10.4804688,8,10.734375,8,11v30  c0,2.7568359,2.2431641,5,5,5h22c2.7568359,0,5-2.2431641,5-5V7C40,4.2431641,37.7568359,2,35,2z M38,41  c0,1.6542969-1.3457031,3-3,3H13c-1.6542969,0-3-1.3457031-3-3V11.4140625L17.4140625,4H35c1.6542969,0,3,1.3457031,3,3V41z M17,14  h-5c-0.5522461,0-1-0.4472656-1-1s0.4477539-1,1-1h5c0.5512695,0,1-0.4482422,1-1V6c0-0.5527344,0.4477539-1,1-1s1,0.4472656,1,1v5  C20,12.6542969,18.6542969,14,17,14z M24,17c-4.9624023,0-9,4.0371094-9,9s4.0375977,9,9,9s9-4.0371094,9-9S28.9624023,17,24,17z   M24,33c-3.8598633,0-7-3.140625-7-7s3.1401367-7,7-7s7,3.140625,7,7S27.8598633,33,24,33z M27.7070313,24.2929688  c0.390625,0.390625,0.390625,1.0234375,0,1.4140625C27.5117188,25.9023438,27.2558594,26,27,26  s-0.5117188-0.0976563-0.7070313-0.2929688L25,24.4140625V30c0,0.5527344-0.4477539,1-1,1s-1-0.4472656-1-1v-5.5859375  l-1.2929688,1.2929688c-0.390625,0.390625-1.0234375,0.390625-1.4140625,0s-0.390625-1.0234375,0-1.4140625l3-3  c0.390625-0.390625,1.0234375-0.390625,1.4140625,0L27.7070313,24.2929688z"/></svg>
              
                  Submit Studies
              </a>
              <a href="doc-status" style="color: #04128e; 
                                          font-weight: bold; 
                                          width: 140px;
                                          border: 2px solid #04128e; 
                                            margin-left:10px;
                                          background-color: #ffffff; 
                                          border-radius: 8px; 
                                          text-decoration: none;
                                          font-size: 14px;">
                  <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      class="feather feather-eye"
                      >
                      <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" />
                      <circle cx="12" cy="12" r="3" />
                  </svg>

                  View Status
              </a>

                <a href="account-setting" style="font-weight: 500; font-size: 14px; margin-left:10px;">
                  <!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd' >
                <svg height="24" width="24" enable-background="new 0 0 32 32" id="Stock_cut" version="1.1" viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><desc/><g><path d="M31,19v-6h-4.425   c-0.252-0.888-0.611-1.729-1.065-2.51L29,7l-4-4l-3.49,3.49C21.028,6.21,20.525,5.967,20,5.761V1h-8v4.761   c-0.525,0.205-1.028,0.449-1.51,0.728L7,3L3,7l3.49,3.49C6.036,11.271,5.676,12.112,5.425,13H1v6h4.425   c0.252,0.888,0.611,1.729,1.065,2.51L3,25l4,4l3.49-3.49c0.482,0.28,0.986,0.523,1.51,0.728V31h8v-4.761   c0.525-0.205,1.028-0.449,1.51-0.728L25,29l4-4l-3.49-3.49c0.454-0.781,0.813-1.622,1.065-2.51H31z" fill="none" stroke="#000000" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/><circle cx="16" cy="16" fill="none" r="5" stroke="#000000" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/></g></svg>
                  Account Settings
              </a>

          </nav>
      </div>

    <div class="right" style="overflow: auto; margin-top: -40px;">

    <h1 style="font-weight: bold; color: black; font-size: 40px; margin-top: 60px">
        VIEW SUBMITTED DOCUMENTS
    </h1>
    <div class="right" style="width:100%;">

    <div style="display:flex; justify-content:space-between; align-items:flex-start; width:100%; padding: 0px 40px;">

        <!-- Left side: document details -->
        <div>
            <p><strong>Total Pages:</strong> {{ $document->total_pages }}</p>
            <p><strong>Title:</strong> {{ $document->title }}</p>
            <p><strong>Abstract:</strong> {{ $document->abstract }}</p>
            <p><strong>Date Submitted:</strong> {{ $document->publication_date }}</p>
            <p><strong>Study Type:</strong> {{ implode(', ', $document->document_types ?? []) }}</p>
        </div>

        <!-- Right side: Abandon Button -->
        <form method="POST" action="{{ route('student.abandon', ['id' => $document->document_id]) }}">
            @csrf
            @method('DELETE')
            <button type="submit" style="background-color:#ff4d4d; color:white; border:none; padding:10px 20px; border-radius:8px; display:flex; align-items:center; gap:5px; cursor:pointer;">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="3 6 5 6 21 6"></polyline>
                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6"></path>
                    <path d="M10 11v6"></path>
                    <path d="M14 11v6"></path>
                </svg>
                Abandon Document
            </button>
        </form>
    </div>
</div>
</div>
</div>
</main>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const abandonForms = document.querySelectorAll('form[action*="student/abandon"]');

            abandonForms.forEach(form => {
                form.addEventListener('submit', function (e) {
                    e.preventDefault(); // stop immediate submit

                    Swal.fire({
                        title: 'Are you sure?',
                        text: "This will mark your document as abandoned.",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: 'Yes, abandon it!',
                        cancelButtonText: 'Cancel'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit(); // only submit if confirmed
                        }
                    });
                });
            });
        });
    </script>
</body>
</html>

