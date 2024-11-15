This is a simple CRUD (Create, Read, Update, Delete) application built with Laravel 11. The application allows users to manage notes, where each note has a writer (name) and description.

Features
Add Notes: Create a new note with a title and description.
View Notes: Display all saved notes in a table format.
Edit Notes: Update existing notes.
Delete Notes: Remove notes after confirmation.
Pages and Their Functions

////Home Page (View Notes)

Displays all notes in a table.
Includes options to edit, view, or delete each note.
Accessible via /home.

The home page fetches all notes from the database and displays them in a table.
Each row includes options to edit, delete, or view a note.

////Add Notes

Form to create a new note with fields for the writer and description.
Accessible via /add-notes.

Users click the "Add New" button to access the form.
Upon submitting the form, the note is saved to the database.

////Edit Notes

Form to update the writer and description of an existing note.
Accessible via /edit-notes/{id}.

Users click the "Update" button to load the edit form.
Changes are submitted and saved back to the database.

////Delete Notes

Removes a note after confirming the action.
Triggered via a Delete button on the home page.

Users click the "Delete" button to remove a note.
A confirmation dialog ensures accidental deletions are avoided.

////View Note Details

Displays the full details of a single note.
Accessible via /show/{id}.

Technologies Used
Laravel 11: Backend framework for managing routes, controllers, and database interactions.
Bootstrap 5: For styling and responsive design.
Blade Templates: To render dynamic HTML content.
SQLITE: Database to store the notes.
