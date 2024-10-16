<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExportController extends Controller
{
    public function exportToWord()
    {
        // Fetch data from MySQL (e.g., users table)
        $users = User::all();

        // Create a new PHPWord Object
        $phpWord = new PhpWord();
        $section = $phpWord->addSection();

        // Add title to the Word document
        $section->addText('User Data Export', array('bold' => true, 'size' => 16));

        // Add table header
        $table = $section->addTable();
        $table->addRow();
        $table->addCell(2000)->addText('ID');
        $table->addCell(4000)->addText('Name');
        $table->addCell(4000)->addText('Email');

        // Loop through data and add it to the Word document
        foreach ($users as $user) {
            $table->addRow();
            $table->addCell(2000)->addText($user->id);
            $table->addCell(4000)->addText($user->name);
            $table->addCell(4000)->addText($user->email);
        }

        // Save the Word document
        $fileName = 'users-export.docx';
        $path = storage_path($fileName);

        $objWriter = IOFactory::createWriter($phpWord, 'Word2007');
        $objWriter->save($path);

        // Download the file
        return response()->download($path)->deleteFileAfterSend(true);
    }
}
