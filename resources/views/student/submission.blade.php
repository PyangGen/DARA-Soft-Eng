<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DARA - Student Submission</title>
    <link rel="stylesheet" href="{{ asset('../../css/mainpage.css') }}">
    <link rel="stylesheet" href="{{ asset('../../css/std.css') }}">
    <link rel="stylesheet" href="{{ asset('../../css/submit.css') }}">
    <link rel="stylesheet" href="{{ asset('../../css/yey.css') }}">
    <link rel="stylesheet" href="{{ asset('../../css/svg.css') }}">
</head>
<style>
.submission{
    background-color: #ff4d4d;
    color: white;
    padding: 10px 20px;
    border-radius: 10px;
    
}
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
    .error {
        color: red;
        font-size: 0.9em;
        margin-bottom: 10px;
    }
    /* ✅ Only change the input box when checked */
.checkboxes input[type="checkbox"]:checked {
    background-color: red;       /* Red background */
    border-color: red;           /* Red border */
    accent-color: red;           /* For modern browsers */
}

/* When checkbox is checked → parent box turns theme color */
.chkbx:has(input[type="checkbox"]:checked) {
    background-color: #04128e;
}

/* When checkbox is checked → label turns white */
.chkbx:has(input[type="checkbox"]:checked) label {
    color: white;
}


/* ✅ Make the check mark white */
.checkboxes input[type="checkbox"]:checked::before {
    color: white;
}   
</style>
<body>
    <main>
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
        
        <div class="main" style="height: 100%; ">
            <div class="left">
                <div class="profile">
                    <h2></h2>
                    
                </div>

                <nav class="nav-links">
                    <a href="dashboard" style="font-weight: 500; font-size: 14px; margin-left:10px;">
                       <svg width="24"
                            height="24"  enable-background="new 0 0 64 64" id="Layer_1" version="1.1" viewBox="0 0 64 64" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M38,54.0001221c0,1.1044922,0.8955078,2,2,2s2-0.8955078,2-2v-1c0-4.9624023-4.0375977-9-9-9h-2   c-4.9624023,0-9,4.0375977-9,9v1c0,1.1044922,0.8955078,2,2,2s2-0.8955078,2-2v-1c0-2.7568359,2.2431641-5,5-5h2   c2.7568359,0,5,2.2431641,5,5V54.0001221z"/><path d="M61.2695313,24.4547119l-28-23c-0.7382813-0.6064453-1.8007813-0.6064453-2.5390625,0l-28,23   C2.2680664,24.8345947,2,25.4014893,2,26.0001221v8c0,1.1044922,0.8955078,2,2,2h3v25c0,1.1044922,0.8955078,2,2,2h15   c1.1044922,0,2-0.8955078,2-2s-0.8955078-2-2-2H11v-25c0-1.1044922-0.8955078-2-2-2H6v-5.0546875L32,5.588501l26,21.3569336   v5.0546875h-3c-1.1044922,0-2,0.8955078-2,2v25H40c-1.1044922,0-2,0.8955078-2,2s0.8955078,2,2,2h15c1.1044922,0,2-0.8955078,2-2   v-25h3c1.1044922,0,2-0.8955078,2-2v-8C62,25.4014893,61.7319336,24.8345947,61.2695313,24.4547119z"/></g></svg>

                        Dashboard
                    </a>
                    <a href="student/" style="font-weight: 500; font-size: 14px; margin-left:10px;">
                       <!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg enable-background="new 0 0 50 50" height="24px" id="Layer_1" version="1.1" viewBox="0 0 50 50" width="24px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><rect fill="none" height="50" width="50"/><circle cx="21" cy="20" fill="none" r="16" stroke="#000000" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"/><line fill="none" stroke="#000000" stroke-miterlimit="10" stroke-width="4" x1="32.229" x2="45.5" y1="32.229" y2="45.5"/></svg>
                        Search Studies
                    </a>
                    <nav class="nav-links">
                     <a href="student/submission" style="color: #04128e; 
          font-weight: bold; 
          width: 145px;
          border: 2px solid #04128e; 
          margin-left:10px;
          background-color: #ffffff; 
          border-radius: 8px; 
          text-decoration: none;
          font-size: 14px;">
                        <svg height="26" width="26" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve"><path d="M35,2H17c-0.2651367,0-0.5195313,0.1054688-0.7070313,0.2929688l-8,8C8.1054688,10.4804688,8,10.734375,8,11v30  c0,2.7568359,2.2431641,5,5,5h22c2.7568359,0,5-2.2431641,5-5V7C40,4.2431641,37.7568359,2,35,2z M38,41  c0,1.6542969-1.3457031,3-3,3H13c-1.6542969,0-3-1.3457031-3-3V11.4140625L17.4140625,4H35c1.6542969,0,3,1.3457031,3,3V41z M17,14  h-5c-0.5522461,0-1-0.4472656-1-1s0.4477539-1,1-1h5c0.5512695,0,1-0.4482422,1-1V6c0-0.5527344,0.4477539-1,1-1s1,0.4472656,1,1v5  C20,12.6542969,18.6542969,14,17,14z M24,17c-4.9624023,0-9,4.0371094-9,9s4.0375977,9,9,9s9-4.0371094,9-9S28.9624023,17,24,17z   M24,33c-3.8598633,0-7-3.140625-7-7s3.1401367-7,7-7s7,3.140625,7,7S27.8598633,33,24,33z M27.7070313,24.2929688  c0.390625,0.390625,0.390625,1.0234375,0,1.4140625C27.5117188,25.9023438,27.2558594,26,27,26  s-0.5117188-0.0976563-0.7070313-0.2929688L25,24.4140625V30c0,0.5527344-0.4477539,1-1,1s-1-0.4472656-1-1v-5.5859375  l-1.2929688,1.2929688c-0.390625,0.390625-1.0234375,0.390625-1.4140625,0s-0.390625-1.0234375,0-1.4140625l3-3  c0.390625-0.390625,1.0234375-0.390625,1.4140625,0L27.7070313,24.2929688z"/></svg>
                    
                        Submit Studies
                    </a>
                    </nav>
                    <a href="doc-status" style="font-weight: 500; font-size: 14px; margin-left:10px;">
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
                      <svg height="24" width="24" enable-background="new 0 0 32 32" id="Stock_cut" version="1.1" viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><desc/><g><path d="M31,19v-6h-4.425   c-0.252-0.888-0.611-1.729-1.065-2.51L29,7l-4-4l-3.49,3.49C21.028,6.21,20.525,5.967,20,5.761V1h-8v4.761   c-0.525,0.205-1.028,0.449-1.51,0.728L7,3L3,7l3.49,3.49C6.036,11.271,5.676,12.112,5.425,13H1v6h4.425   c0.252,0.888,0.611,1.729,1.065,2.51L3,25l4,4l3.49-3.49c0.482,0.28,0.986,0.523,1.51,0.728V31h8v-4.761   c0.525-0.205,1.028-0.449,1.51-0.728L25,29l4-4l-3.49-3.49c0.454-0.781,0.813-1.622,1.065-2.51H31z" fill="none" stroke="#000000" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/><circle cx="16" cy="16" fill="none" r="5" stroke="#000000" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/></g></svg>
                       Account Settings
                    </a>

                </nav>
            </div>
 

            <div class="right">
                <div class="frbg">
                    <div class="notif">
                        <div class="imghere">
                            <img src="../../imgs/review.png" alt="" />
                        </div>
                        <div
                            class="teksto"
                            style="display: flex; margin-top: -16px; text-align: center"
                        >
                            <p>
                            Submitted <br />
                            Succesfully!
                            </p>
                        </div>
                    </div>
                </div>

                <h1 style="font-weight: bolder;color: black;">SUBMIT A DOCUMENT</h1>
                @if(session('success'))
                    <div style="color: green; text-align: center; margin-bottom: 15px;">
                        {{ session('success') }}
                    </div>
                @endif
                <form 
                    style="background-color: #f5f5f5; padding: 20px; border-radius: 30px;" 
                    id="documentForm" 
                    method="post" 
                    enctype="multipart/form-data" 
                    action="{{ route('student.submit') }}"
                >
                    @csrf
                   <label for="title">Title:</label>
                        <input  style="font-weight: bold; border: 1px solid black;" id="title" type="text" name="title" required style="font-weight: bold;"><br>
                                            <label for="abstract">Abstract:</label><br>
                        <textarea id="abstract" name="abstract" required 
                            style="font-weight: bold; border: 1px solid black;"></textarea><br><br>
               <form id="documentForm" method="post" enctype="multipart/form-data" action="submit"
      style="background-color: #f5f5f5; padding: 20px; border-radius: 30px;">
    @csrf

    <label for="title">Title:</label>
    <input style="font-weight: bold; border: 1px solid black;" id="title" type="text" name="title">
    <div id="titleError" class="error"></div>

    <label for="abstract">Abstract:</label>
    <textarea id="abstract" name="abstract"
        style="font-weight: bold; border: 1px solid black;"></textarea>
    <div id="abstractError" class="error"></div>



    <label for="keywords">Keywords:</label>
    <input id="keywords" type="text" name="keywords"
        style="font-weight: bold; border: 1px solid black;">
    <div id="keywordsError" class="error"></div>

    <label for="teacher_id">Teacher:</label>
    <select id="teacher_id" name="teacher_id"
        style="font-weight: bold; border: 1px solid black;">
        <option value="">-- Select Teacher --</option>
        <!-- options here -->
    </select>
    <div id="teacherError" class="error"></div>

    <label for="publication_date">Submission Date:</label>
    <input id="publication_date" type="date" name="publication_date"
        style="font-weight: bold; border: 1px solid black;">
    <div id="dateError" class="error"></div>

    <label for="citations">Citations (comma-separated):</label>
    <input id="citations" type="text" name="citations"
        style="font-weight: bold; border: 1px solid black;">
    <div id="citationsError" class="error"></div><br>

    <div class="container">
        <div class="card"> 
            <h3>Upload File</h3> 
            <div class="drop_box">
                <div class="header">
                    <h4>Select File here</h4>
                </div>
                <p>Files Supported: PDF</p>
                <input type="file" name="file" accept=".pdf" id="fileID" style="display:none;">
                <button style="background-color: black;" type="button" class="btn" id="chooseFileBtn">Choose File</button>
                <p id="fileNameDisplay" style="color: red;"></p>
                <div id="fileError" class="error"></div>
            </div>
        </div>
    </div>

<div class="checkboxes">
    <div class="chkbx" style="border-color:black">
        <input class="w3-check" type="checkbox" name="document_types[]" value="Case Study">
        <label style="color:black" class="tada">Case Study</label> 
    </div>
    <div class="chkbx" style="border-color:black">
        <input class="w3-check" type="checkbox" name="document_types[]" value="Thesis">
        <label style="color:black" class="tada">Thesis</label>
    </div>
    <div class="chkbx" style="border-color:black">
        <input class="w3-check" type="checkbox" name="document_types[]" value="Proposal">
        <label style="color:black" class="tada">Proposal</label>
    </div>
    <div class="chkbx" style="border-color:black">
        <input class="w3-check" type="checkbox" name="document_types[]" value="Capstone">
        <label style="color:black" class="tada">Capstone</label>
    </div>
    <div class="chkbx" style="border-color:black">
        <input class="w3-check" type="checkbox" name="document_types[]" value="System Studies">
        <label style="color:black" class="tada">System Studies</label>
    </div>
</div>


    <div id="typeError" class="error"></div>

    <button style="background-color: black" class="submission" type="submit" id="submitButton">Submit</button>
    <div id="alrt" style="color: black; margin-top: 10px; text-align: center;"></div>
</form>
                    <button style="background-color: #04128e" class="submission" type="submit" id="submitButton" disabled>Submit</button>
                    <div id="alrt" style="color: black; margin-top: 10px; text-align: center;"></div>
                </form>

            
            </div>
        </div>

        <footer>
        </footer>
    </main>
        <script>
        const fileInput = document.getElementById('fileID');
        const chooseFileBtn = document.getElementById('chooseFileBtn');
        const fileNameDisplay = document.getElementById('fileNameDisplay');
        const submitButton = document.getElementById('submitButton');
        const checkboxes = document.querySelectorAll('input[name="document_types[]"]');

        // Enable button only if file + checkbox selected
        function updateSubmitState() {
            const fileSelected = fileInput.files.length > 0;
            const checkboxSelected = Array.from(checkboxes).some(cb => cb.checked);
            submitButton.disabled = !(fileSelected && checkboxSelected);
        }

        // File button click
        chooseFileBtn.addEventListener('click', function() {
            fileInput.click();
        });

        // When file is selected
        fileInput.addEventListener('change', function() {
            fileNameDisplay.innerText = this.files[0]?.name || '';
            updateSubmitState();
        });

        // When any checkbox changes
        checkboxes.forEach(cb => {
            cb.addEventListener('change', updateSubmitState);
        });
    </script>
</body>
</html>

<script>
    document.getElementById('chooseFileBtn').addEventListener('click', function() {
        document.getElementById('fileID').click();
    });

    document.getElementById('fileID').addEventListener('change', function(){
        document.getElementById('fileNameDisplay').textContent =
            this.files.length ? this.files[0].name : '';
    });

    document.getElementById('documentForm').addEventListener('submit', function(e){
        let valid = true;

        // Clear previous errors
        document.querySelectorAll('.error').forEach(el => el.textContent = '');

        const title = document.getElementById('title').value.trim();
        if (title.length < 5) {
            document.getElementById('titleError').textContent = "Title must be at least 5 characters.";
            valid = false;
        }

        const abstract = document.getElementById('abstract').value.trim();
        if (abstract.length < 50) {
            document.getElementById('abstractError').textContent = "Abstract must be at least 50 characters.";
            valid = false;
        }

        const teacher = document.getElementById('teacher_id').value;
        if (teacher === "") {
            document.getElementById('teacherError').textContent = "Please select a teacher.";
            valid = false;
        }

        const fileInput = document.getElementById('fileID');
        if (fileInput.files.length === 0) {
            document.getElementById('fileError').textContent = "Please upload a PDF file.";
            valid = false;
        } else if (fileInput.files[0].size > 5 * 1024 * 1024) {
            document.getElementById('fileError').textContent = "File must be less than 5 MB.";
            valid = false;
        }

        const checks = document.querySelectorAll('input[name="document_types[]"]:checked');
        if (checks.length === 0) {
            document.getElementById('typeError').textContent = "Select at least one document type.";
            valid = false;
        }

        if (!valid) e.preventDefault();
    });


    document.addEventListener("DOMContentLoaded", function () {
                            const alrt = document.getElementById('alrt');
                            const chooseFileBtn = document.getElementById("chooseFileBtn");
                            const inputFile = document.getElementById("fileID");
                            const fileNameDisplay = document.getElementById("fileNameDisplay");
                            const submitButton = document.getElementById("submitButton");
                            const checkboxes = document.querySelectorAll('.chkbx input'); 
                            const card = document.getElementsByClassName('card');
                            const teachers = document.getElementById('teachers');

                            chooseFileBtn.addEventListener("click", () => {
                                inputFile.click();
                            });

                            inputFile.addEventListener("change", function () {
                                const file = this.files[0];
                                if (file && file.type === "application/pdf") {
                                    document.querySelectorAll('.card').forEach(card => {
                                        card.style.backgroundColor = 'white';
                                    });
                                    fileNameDisplay.style.color = 'green';
                                    fileNameDisplay.innerHTML = `${file.name}`;
                                    submitButton.disabled = false;
                                } else {
                                    document.querySelectorAll('.card').forEach(card => {
                                        card.style.backgroundColor = '#ffcdcd';
                                    });
                                    fileNameDisplay.textContent = "No valid file selected";
                                    this.value = "";
                                    submitButton.disabled = true;
                                }
                            });
                        });
                        document.addEventListener("DOMContentLoaded", function () {
        const checkboxes = document.querySelectorAll('.chkbx');

        checkboxes.forEach(chkbx => {
            chkbx.addEventListener('click', (e) => {
                // Allow clicking the whole box
                if (e.target.tagName !== 'INPUT') {
                    const checkbox = chkbx.querySelector('input[type="checkbox"]');
                    checkbox.checked = !checkbox.checked;
                }

                const checkbox = chkbx.querySelector('input[type="checkbox"]');
                const label = chkbx.querySelector('label');

                // ✅ Toggle background + text color
                if (checkbox.checked) {
                    chkbx.style.backgroundColor = 'black';
                    label.style.color = 'white';
                } else {
                    chkbx.style.backgroundColor = '';
                    label.style.color = 'black'; // ✅ Always back to black when unchecked
                }
            });
        });
    });


        // @if (session('success'))
        //     document.addEventListener('DOMContentLoaded', function() {
        //         const frbg = document.querySelector('.frbg');

        //         frbg.style.visibility = 'hidden';
        //         setTimeout(() => {
        //             frbg.classList.add('fade-in');
        //             frbg.style.visibility = 'visible';
        //         }, 100);

        //         setTimeout(() => {
        //             frbg.classList.remove('fade-in');
        //             frbg.classList.add('fade-out');
        //         }, 2000);

        //         setTimeout(() => {
        //             frbg.style.visibility = 'hidden';
        //             frbg.classList.remove('fade-out');
        //         }, 2500);
        //     });
        // @endif
    document.addEventListener("DOMContentLoaded", function () {
        const dateField = document.getElementById('publication_date');
        const today = new Date().toISOString().split('T')[0]; // YYYY-MM-DD
        dateField.setAttribute('min', today); // ✅ Prevent selecting past days
    });
</script>
