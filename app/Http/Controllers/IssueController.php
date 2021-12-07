<?php

namespace App\Http\Controllers;

use App\Mail\IssueCreated;
use App\Models\Issue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class IssueController extends Controller
{
    /**
     * Show all issues
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $issues = Issue::latest()->get();
        return view('issues.index', [
            'issues' => $issues
        ]);
    }

    /**
     * Show the issues create form
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('issues.create');
    }

    /**
     * Store a new issue in the database and return back to the main index page
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'priority' => 'required|in:low,medium,high'
        ]);

        Issue::create($request->only(['name', 'priority', 'message']));
        
        return redirect()->route('issues.index');
    }

    /**
     * Show the issues edit form
     *
     * @param Issue $issue
     * @return \Illuminate\Contracts\View\View
     */
    public function edit(Issue $issue)
    {
        return view('issues.edit', [
            'issue' => $issue
        ]);
    }

    /**
     * Updates the issue with new data from request and returns back to the main index page
     *
     * @param Issue $issue
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Issue $issue, Request $request)
    {
        $request->validate([
            'name' => 'required',
            'priority' => 'required|in:low,medium,high'
        ]);

        $issue->update($request->only(['name', 'priority', 'message']));

        return redirect()->route('issues.index');
    }

    /**
     * Deletes the specified issue and returns back to the main index page
     *
     * @param Issue $issue
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Issue $issue, Request $request)
    {
        $issue->delete();

        return redirect()->route('issues.index');
    }
}
