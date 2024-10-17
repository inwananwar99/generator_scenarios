<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;
use App\Models\Scenario;


class ExportController extends Controller
{
    public function exportToWord()
    {
        // Fetch data from MySQL (e.g., users table)
        $scenarios = Scenario::all();

        // Create a new PHPWord Object
        $phpWord = new PhpWord();
        $section = $phpWord->addSection();

        // Add title to the Word document
        $section->addText('UAT Scenario PLN Icon Plus', array('bold' => true, 'size' => 16));
        $tableStyle = [
            'borderSize' => 6,     // Border thickness (in twips, 1/20th of a point, e.g. 6 is 0.3 pt)
            'borderColor' => '000000',  // Border color (hex value)
            'cellMargin' => 50     // Cell margin inside the table cells
        ];
        // Add table header
        $table = $section->addTable($tableStyle);
        $table->addRow();
        $table->addCell(4000)->addText('Scenario Description',['bold' => true], ['alignment' => 'center']);
        $table->addCell(2200)->addText('Process ID',['bold' => true], ['alignment' => 'center']);
        $table->addCell(2000)->addText('Process Name',['bold' => true], ['alignment' => 'center']);
        $table->addCell(5000)->addText('Expected Result',['bold' => true], ['alignment' => 'center']);
        $table->addCell(3000)->addText('Step Description',['bold' => true], ['alignment' => 'center']);
        $table->addCell(4000)->addText('Pages',['bold' => true], ['alignment' => 'center']);
        $table->addCell(2500)->addText('Test Data',['bold' => true], ['alignment' => 'center']);
        $table->addCell(2500)->addText('Status',['bold' => true], ['alignment' => 'center']);

        // Loop through data and add it to the Word document
        foreach ($scenarios as $scenario) {
            $table->addRow();
            $table->addCell(4000)->addText($scenario->scenario_desc);
            $table->addCell(2000)->addText($scenario->process_id);
            $table->addCell(2000)->addText($scenario->process_name);
            $table->addCell(4000)->addText($scenario->expected_result);
            $table->addCell(3000)->addText($scenario->step_desc);
            $table->addCell(3000)->addText($scenario->pages);
            $table->addCell(2000)->addText($scenario->test_data);
            $table->addCell(2000)->addText($scenario->status);
        }

        // Save the Word document
        $fileName = 'scenario-export.docx';
        $path = storage_path($fileName);

        $objWriter = IOFactory::createWriter($phpWord, 'Word2007');
        $objWriter->save($path);

        // Download the file
        return response()->download($path)->deleteFileAfterSend(true);
    }

    public function inputScenarios(){
        return view('scenario_input');
    }

    public function saveScenarios(Request $request){
         // Validasi input form
        //  dd($request);
    // $validated = $request->validate([
    //     'scenario_desc' => 'required|string',
    //     'process_id' => 'required|string',
    //     'process_name' => 'required|string',
    //     'expected_result' => 'required|string',
    //     'step_desc' => 'required|string',
    //     'pages' => 'required|string',
    //     'test_data' => 'nullable|string',
    //     'status' => 'nullable|string'
    // ]);
        $validated = ([
        'scenario_desc' => $request->get('scenario_description'),
        'process_id' => $request->get('process_id'),
        'process_name' => $request->get('process_name'),
        'expected_result' => $request->get('expected_result'),
        'step_desc' => $request->get('step_description'),
        'pages' => $request->get('pages'),
        'test_data' => $request->get('test_data'),
        'status' => $request->get('status')
        ]);

        // Simpan data ke database
        if (Scenario::create($validated)){
            echo 'Berhasil';
        }else{
            echo 'Gagal';
        }

        // return redirect('/input')->with('success', 'Scenario added successfully!');

    }
}
