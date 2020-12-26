<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="stylesheet" href="style_form.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Crimson+Pro">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <title>Veera computers</title>
    <link rel="icon" type="image/ico" href="vc2.png">
</head>

<body>
    <div class="container-fluid">
        <form>
            <div class="form-group">
                <h3>Student Data</h3>
                <label for="inputtopic" class="inputtopic">Topics</label>
                <input type="text" class="form-control" id="inputtopic" placeholder="Enter Topic">
            </div>
            <div class="form-group">
                <label for="inputtime" class="inputtime">Class Time</label>
                <input type="time" class="form-control" id="inputtime" placeholder="time">
            </div>
            <div class="form-group">
                <label for="inputwork" class="inputwork">Work</label>
                <input type="text" class="form-control" id="inputwork" placeholder="work">
            </div>
            <div class="form-group">
                <label for="inputcomplete" class="inputcomplete">Completed</label>
                <input type="text" class="form-control" id="inputcomplete" placeholder="">
            </div>
            <div class="form-check form-check-inline" id="check">
                <input type="checkbox" class="form-check-input" id="Checkpresent">
                <label class="form-check-label" for="checkpresent">Present</label>
            </div>
            <div class="form-check form-check-inline" id="check">
                <input type="checkbox" class="form-check-input" id="checkabsent">
                <label class="form-check-label" for="checkabsent">Absent</label>
            </div>
            <div class="form-check form-check-inline" id="check">
                <input type="checkbox" class="form-check-input" id="checkleave">
                <label class="form-check-label" for="checkleave">Leave</label>
            </div>

            <button type="submit" class="btn">Submit</button>
        </form>
    </div>

</body>

</html>