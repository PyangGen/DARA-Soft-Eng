<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\DocumentRepository;
use App\Models\User;

class StudentController extends Controller
{
    /**
     * Display the student dashboard page.
     *
     * @return \Illuminate\View\View
     */
    public function dashboard_page()
    {
        $studentId = 1; // Get logged-in student's ID

        // Fetch counts dynamically
        $submittedStudies = DocumentRepository::where('student_id', $studentId)->count();

        $approvedStudies = DocumentRepository::where('student_id', $studentId)
                            ->where('status', 'approved')
                            ->count();

        $pendingStudies = DocumentRepository::where('student_id', $studentId)
                            ->where('status', 'pending')
                            ->count();

        $revisionsToDo = DocumentRepository::where('student_id', $studentId)
                            ->where('status', 'revision')
                            ->count();

        $rejectedStudies = DocumentRepository::where('student_id', $studentId)
                            ->where('status', 'rejected')
                            ->count();

        return view('student.dashboard', compact(
            'submittedStudies',
            'approvedStudies',
            'pendingStudies',
            'revisionsToDo',
            'rejectedStudies'
        ));
    }

    /**
     * Display the student submission page.
     *
     * @return \Illuminate\View\View
     */
     public function submission_page()
    {
        // Load teachers for dropdown
        $teachers = User::where('role', 'teacher')->get();
        return view('student.submission', compact('teachers'));
    }

    public function submit_document(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'abstract' => 'required|string',
            'teacher_id' => 'required|exists:users,user_id',
            'publication_date' => 'nullable|date',
            'document_types' => 'required|array',
            'document_types.*' => 'string',
            'file' => 'required|mimes:pdf|max:20480', // 20MB max
        ]);

        // Handle file upload
        $filePath = $request->file('file')->store('documents', 'public');

        // Save document
        DocumentRepository::create([
            'title' => $request->title,
            'student_id' => Auth::id(),
            'teacher_id' => $request->teacher_id,
            'authors' => $request->co_authors,
            'citation' => $request->citations,
            'metadata' => json_encode([
                'keywords' => $request->keywords,
                'document_types' => $request->document_types
            ]),
            'file' => $filePath,
            'status' => 'pending',
            'date_submitted' => now(),
            'study_type' => implode(', ', $request->document_types),
        ]);

        return redirect()->route('student.submission')->with('success', 'Document submitted successfully!');
    }

    /**
     * Display the student document status page.
     *
     * @return \Illuminate\View\View
     */
    public function doc_status_page()
    {
        // Assuming there is a doc-status.blade.php view file.
        return view('doc-status');
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
        return view('pdf-reader');
    }

    /**
     * Display the student account setting page.
     *
     * @return \Illuminate\View\View
     */
    public function account_setting_page()
    {
        // Assuming there is an account-setting.blade.php view file.
        return view('account-setting');
    }
}
