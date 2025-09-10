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
    header {
    display: flex;
    align-items: center;
    justify-content: space-between; /* DARA sa left, icon sa right */
    padding: 10px 20px;
    background-color: #fdf9e9; /* same bg */
    border-bottom: 2px solid #000; /* optional separator */
}

header h2 {
    margin: 0;
    padding: 0;
    font-weight: bold;
    color: #04128e;
    text-align: left;
}

    
</style>
<body >
    <main >
        <header> 
              <div class="ahh">
                <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="30"
                                height="34"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="feather feather-log-in"
                                >
                                <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4" />
                                <polyline points="10 17 15 12 10 7" />
                                <line x1="15" y1="12" x2="3" y2="12" />
                            </svg>
            </div>
            <h2 >DARA</h2>
          
        </header> 
         
        <div class="main" >
            <div class="left">
                <div class="profile">
                    <h2></h2>
                    
                </div>

                <nav class="nav-links">
                    <a href="" style="color: #04128e; 
          font-weight: bold; 
          width: 150px;
          border: 2px solid #04128e; 
          background-color: #ffffff; 
          border-radius: 8px; 
          text-decoration: none;">
                       <svg width="24"
                            height="24" enable-background="new 0 0 64 64" id="Layer_1" version="1.1" viewBox="0 0 64 64" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M38,54.0001221c0,1.1044922,0.8955078,2,2,2s2-0.8955078,2-2v-1c0-4.9624023-4.0375977-9-9-9h-2   c-4.9624023,0-9,4.0375977-9,9v1c0,1.1044922,0.8955078,2,2,2s2-0.8955078,2-2v-1c0-2.7568359,2.2431641-5,5-5h2   c2.7568359,0,5,2.2431641,5,5V54.0001221z"/><path d="M61.2695313,24.4547119l-28-23c-0.7382813-0.6064453-1.8007813-0.6064453-2.5390625,0l-28,23   C2.2680664,24.8345947,2,25.4014893,2,26.0001221v8c0,1.1044922,0.8955078,2,2,2h3v25c0,1.1044922,0.8955078,2,2,2h15   c1.1044922,0,2-0.8955078,2-2s-0.8955078-2-2-2H11v-25c0-1.1044922-0.8955078-2-2-2H6v-5.0546875L32,5.588501l26,21.3569336   v5.0546875h-3c-1.1044922,0-2,0.8955078-2,2v25H40c-1.1044922,0-2,0.8955078-2,2s0.8955078,2,2,2h15c1.1044922,0,2-0.8955078,2-2   v-25h3c1.1044922,0,2-0.8955078,2-2v-8C62,25.4014893,61.7319336,24.8345947,61.2695313,24.4547119z"/></g></svg>

                        Dashboard
                    </a>
                    <a href="student/">
                       <!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg enable-background="new 0 0 50 50" height="24px" id="Layer_1" version="1.1" viewBox="0 0 50 50" width="24px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><rect fill="none" height="50" width="50"/><circle cx="21" cy="20" fill="none" r="16" stroke="#000000" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"/><line fill="none" stroke="#000000" stroke-miterlimit="10" stroke-width="4" x1="32.229" x2="45.5" y1="32.229" y2="45.5"/></svg>
                        Search Studies
                    </a>
                     <a href="submission">
                        <svg height="26" width="26" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve"><path d="M35,2H17c-0.2651367,0-0.5195313,0.1054688-0.7070313,0.2929688l-8,8C8.1054688,10.4804688,8,10.734375,8,11v30  c0,2.7568359,2.2431641,5,5,5h22c2.7568359,0,5-2.2431641,5-5V7C40,4.2431641,37.7568359,2,35,2z M38,41  c0,1.6542969-1.3457031,3-3,3H13c-1.6542969,0-3-1.3457031-3-3V11.4140625L17.4140625,4H35c1.6542969,0,3,1.3457031,3,3V41z M17,14  h-5c-0.5522461,0-1-0.4472656-1-1s0.4477539-1,1-1h5c0.5512695,0,1-0.4482422,1-1V6c0-0.5527344,0.4477539-1,1-1s1,0.4472656,1,1v5  C20,12.6542969,18.6542969,14,17,14z M24,17c-4.9624023,0-9,4.0371094-9,9s4.0375977,9,9,9s9-4.0371094,9-9S28.9624023,17,24,17z   M24,33c-3.8598633,0-7-3.140625-7-7s3.1401367-7,7-7s7,3.140625,7,7S27.8598633,33,24,33z M27.7070313,24.2929688  c0.390625,0.390625,0.390625,1.0234375,0,1.4140625C27.5117188,25.9023438,27.2558594,26,27,26  s-0.5117188-0.0976563-0.7070313-0.2929688L25,24.4140625V30c0,0.5527344-0.4477539,1-1,1s-1-0.4472656-1-1v-5.5859375  l-1.2929688,1.2929688c-0.390625,0.390625-1.0234375,0.390625-1.4140625,0s-0.390625-1.0234375,0-1.4140625l3-3  c0.390625-0.390625,1.0234375-0.390625,1.4140625,0L27.7070313,24.2929688z"/></svg>
                    
                        Submit Studies
                    </a>
                    <a href="student/document-status">
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

                     <a href="student/document-submission">
                      <svg height="24" width="24" enable-background="new 0 0 32 32" id="Stock_cut" version="1.1" viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><desc/><g><path d="M31,19v-6h-4.425   c-0.252-0.888-0.611-1.729-1.065-2.51L29,7l-4-4l-3.49,3.49C21.028,6.21,20.525,5.967,20,5.761V1h-8v4.761   c-0.525,0.205-1.028,0.449-1.51,0.728L7,3L3,7l3.49,3.49C6.036,11.271,5.676,12.112,5.425,13H1v6h4.425   c0.252,0.888,0.611,1.729,1.065,2.51L3,25l4,4l3.49-3.49c0.482,0.28,0.986,0.523,1.51,0.728V31h8v-4.761   c0.525-0.205,1.028-0.449,1.51-0.728L25,29l4-4l-3.49-3.49c0.454-0.781,0.813-1.622,1.065-2.51H31z" fill="none" stroke="#000000" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/><circle cx="16" cy="16" fill="none" r="5" stroke="#000000" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/></g></svg>
                       Account Settings
                    </a>

                </nav>
            </div>
 
            <div class="right" style="overflow: auto;">

               <h1 style="font-weight: bolder; color: #000080;">Welcome, Neil! You have</h1>

                    <div class="cardco">
                        <div class="cards submit">
                            <div class="svg1">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="100"
                                    height="100"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-book"
                                    >
                                    <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" />
                                    <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z" />
                                </svg>
                            </div>

                            <div class="count">
                                3
                            </div>

                            <div class="text">
                                
                                <p>SUBMITTED STUDIES</p>
                            </div>
                        </div>

                        <div class="cards published">
                            <div class="svg2">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="100"
                                    height="100"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-check-square"
                                    >
                                    <polyline points="9 11 12 14 22 4" />
                                    <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11" />
                                </svg>
                            </div>

                            <div class="count">
                                1
                            </div>

                            <div class="text">
                                <p>APPROVED STUDIES</p>
                            </div>
                        </div>

                        <div class="cards pending">
                            <div class="svg3">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="100"
                                    height="100"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-loader"
                                    >
                                    <line x1="12" y1="2" x2="12" y2="6" />
                                    <line x1="12" y1="18" x2="12" y2="22" />
                                    <line x1="4.93" y1="4.93" x2="7.76" y2="7.76" />
                                    <line x1="16.24" y1="16.24" x2="19.07" y2="19.07" />
                                    <line x1="2" y1="12" x2="6" y2="12" />
                                    <line x1="18" y1="12" x2="22" y2="12" />
                                    <line x1="4.93" y1="19.07" x2="7.76" y2="16.24" />
                                    <line x1="16.24" y1="7.76" x2="19.07" y2="4.93" />
                                </svg>
                            </div>

                            <div class="count">
                                 5
                            </div>

                            <div class="text">
                                <p>PENDING STUDIES</p>
                            </div>
                        </div>

                        <div class="cards revisions">
                            <div class="svg4">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="100"
                                    height="100"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-info"
                                    >
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="12" y1="16" x2="12" y2="12" />
                                    <line x1="12" y1="8" x2="12.01" y2="8" />
                                </svg>
                            </div>

                            <div class="count">
                               8
                            </div>

                            <div class="text">
                                <p>REVISIONS TO DO</p>
                            </div>
                        </div>
                        
                        <div class="cards rejected">
                            <div class="svg5">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="120"
                                    height="120"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-x"
                                    >
                                    <line x1="18" y1="6" x2="6" y2="18" />
                                    <line x1="6" y1="6" x2="18" y2="18" />
                                </svg>
                            </div>

                            <div class="count">
                                4
                            </div>

                            <div class="text">
                                <p>REJECTED STUDIES</p>
                            </div>
                        </div>
                    </div>
            </div>
        </div>

        <footer>
        </footer>
    </main>
</body>
</html>
<script src="js/index.js"></script>
