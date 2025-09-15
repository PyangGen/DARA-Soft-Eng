<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display the student dashboard page.
     *
     * @return \Illuminate\View\View
     */
    public function dashboard_page()
    {
        // This function loads the dashboard.blade.php file.
        // It looks for the file in the 'resources/views/' directory.
        return view('student.dashboard');
    }

    /**
     * Display the student submission page.
     *
     * @return \Illuminate\View\View
     */
    public function submission_page()
    {
        // Assuming there is a submission.blade.php view file.
        return view('student.submission');
    }

    /**
     * Display the student document status page.
     *
     * @return \Illuminate\View\View
     */
    public function doc_status_page()
    {
        // Assuming there is a doc-status.blade.php view file.
        return view('student.doc-status');
    }

    /**
     * Display the PDF reader page for a specific ID.
     *
     * @param int $id The PDF ID.
     * @return \Illuminate\View\View
     */
    public function pdf_reader_page($id)
    {
        // You can use the $id variable to fetch the correct PDF.
        // For example, return view('pdf-reader', ['pdfId' => $id]);
        return view('student.pdf-reader');
    }

    /**
     * Display the student account setting page.
     *
     * @return \Illuminate\View\View
     */
    public function account_setting_page()
    {
        // Assuming there is an account-setting.blade.php view file.
        return view('student.account-setting');
    }
}
