<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\notesListing;

class newNotesController extends Controller
{
    public function index()
    {
        $all_notes = notesListing::all();
        return view('home', compact('all_notes'));
    }

    public function shows($id)
    {
        $note = notesListing::findOrFail($id);
        return view('show', compact('note'));
    }

    public function loadAddNotesForm()
    {
        return view('add-notes');
    }


    public function AddNotes(Request $request)
    {

        $request->validate([
            'notes' => 'required|string|max:999999',
            'topic' => 'required|string'
        ]);
        try {

            $new_notes = new notesListing;
            $new_notes->notes = $request->notes;
            $new_notes->topic = $request->topic;
            $new_notes->save();

            return redirect('/home')->with('success', 'Notes Added Successfully');
        } catch (\Exception $e) {
            return redirect('/add-notes')->with('fail', $e->getMessage());
        }

    }

    public function UpdateNotes(Request $request)
    {

        $request->validate([
            'notes' => 'required|string|max:999999',
            'topic' => 'required|string'

        ]);
        try {
            // update user here
            $update_user = notesListing::where('id', $request->notes_id)->update([
                'notes' => $request->notes,
                'topic' => $request->topic,

            ]);

            return redirect('/home')->with('success', 'Notes Updated Successfully');
        } catch (\Exception $e) {
            return redirect('/edit-notes')->with('fail', $e->getMessage());
        }
    }

    public function loadEditForm($id)
    {
        $notes = notesListing::find($id);

        return view('edit-notes', compact('notes'));
    }


    public function deleteNotes($id)
    {
        try {
            notesListing::where('id', $id)->delete();
            return redirect('/home')->with('success', 'Notes Deleted successfully!');
        } catch (\Exception $e) {
            return redirect('/home')->with('fail', $e->getMessage());

        }
    }




}