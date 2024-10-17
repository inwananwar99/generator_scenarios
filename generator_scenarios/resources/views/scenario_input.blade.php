<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Test Scenario</title>
</head>
<body>
    <h1>Create Test Scenario</h1>
    <form action="/save" method="POST">
        @csrf
        <label for="scenario_description">Scenario Description:</label><br>
        <input type="text" id="scenario_description" name="scenario_description"><br>

        <label for="process_id">Process ID:</label><br>
        <input type="text" id="process_id" name="process_id"><br>
        <label for="process_name">Process Name:</label><br>
        <input type="text" id="process_name" name="process_name"><br>

        <label for="expected_result">Expected Result:</label><br>
        <textarea id="expected_result" name="expected_result"></textarea><br>

        <label for="step_description">Step Description:</label><br>
        <textarea id="step_description" name="step_description"></textarea><br>

        <label for="pages">Pages:</label><br>
        <input type="text" id="pages" name="pages"><br>

        <label for="test_data">Test Data:</label><br>
        <input type="text" id="test_data" name="test_data"><br>

        <label for="pass_fail">Pass/Fail:</label><br>
        <input type="text" id="status" name="status"><br>


        <button style="margin-top:20px" type="submit">Submit</button>
    </form>
</body>
</html>
