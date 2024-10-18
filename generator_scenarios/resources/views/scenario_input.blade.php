<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Test Scenario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card mt-4">
            <div class="card-body">
                <div class="row">
                    <div class="row">
                        <div class="col-md-10">
                            <h3>Create Test Scenario</h3>
                        </div>
                        <div class="col-md-2">
                            <a href="/export" class="btn btn-success">Export to Word</a>
                        </div>
                    </div>
                    @csrf
                    <div class="col">
                        <form action="/save" method="POST">
                            <label for="scenario_description">Scenario Description:</label><br>
                            <input type="text" id="scenario_description" class="form-control" name="scenario_description"><br>
                    
                            <label for="process_id">Process ID:</label><br>
                            <input type="text" id="process_id" class="form-control" name="process_id"><br>
                            <label for="process_name">Process Name:</label><br>
                            <input type="text" id="process_name" class="form-control" name="process_name"><br>
                    
                            <label for="expected_result">Expected Result:</label><br>
                            <textarea id="expected_result" class="form-control" name="expected_result"></textarea><br>
                        </div>
                        <div class="col">
                            <label for="step_description">Step Description:</label><br>
                            <textarea id="step_description" class="form-control" name="step_description"></textarea><br>
                            
                            <label for="pages">Pages:</label><br>
                            <input type="text" id="pages" class="form-control" name="pages"><br>
                            
                            <label for="test_data">Test Data:</label><br>
                            <input type="text" id="test_data" class="form-control" name="test_data"><br>
                            
                            <label for="pass_fail">Pass/Fail:</label><br>
                            <input type="text" id="status" class="form-control" name="status"><br>
                            <button class="btn btn-primary" type="submit">Simpan</button>
                        </form>
                        </div>
                </div>
            </div>
        </div>
        <div class="card mt-4">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <button class="btn btn-warning">Skenario 1</button>
                    </div>
                </div>
                This is some text within a card body.
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
