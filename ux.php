<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="stylesheet" href="ux.css">
    <script src="style.js"></script>

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Crimson+Pro">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>

    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <title>Veera Computers</title>
    <link rel="icon" type="image/ico" href="vc2.png">




    <!-- script -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
    $(document).ready(function() {
        $("select").change(function() {
            $(this).find("option:selected").each(function() {
                var optionValue = $(this).attr("value");
                if (optionValue) {
                    $(".box").not("." + optionValue).hide();
                    $("." + optionValue).show();
                } else {
                    $(".box").hide();
                }
            });
        }).change();
    });
    </script>
</head>

<body>
    <div class="container-fluid">
        <div class="form-group" id="select-1">
            <!-- <label for="script"></label> -->
            <select name="script" id="" class="form-control">
                <option value="select">select one</option>
                <option value=""> New/Old </option>
                <option value=""> Running </option>

            </select>
        </div>
        <div class="container">
            <form>
                <h3>Project Details</h3>
                <div class="form-group">
                    <label for="name">Project name</label>
                    <input type="text" class="form-control" id="name" aria-describedby="name"
                        placeholder="project name">

                </div>
                <div class="form-group">
                    <label for="number">Total page</label>
                    <input type="number" class="form-control" id="number" placeholder="total page">
                </div>
                <div class="form-group form-check" id="check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Completed</label><input type="number"
                        class="form-control" id="number" placeholder="completed">

                </div>
                <div class="form-group">
                    <label for="type">Type</label>
                    <select name="script" id="" class="form-control">
                        <option value="select">select one</option>
                        <option value=""> New</option>
                        <option value=""> Old </option>

                    </select>
                </div>
                <button type="submit" class="btn">Submit</button>
            </form>
        </div>
        <!-- second container -->
        <div class="container" id="container-1">
            <form>
                <h3>Project Details</h3>
                <div class="form-group">
                    <label for="name">Project name</label>
                    <input type="text" class="form-control" id="name" aria-describedby="name"
                        placeholder="project name">

                </div>
                <div class="form-group">
                    <label for="number">Total page</label>
                    <input type="number" class="form-control" id="number" placeholder="total page">
                </div>
                <div class="form-group form-check" id="check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Completed</label><input type="number"
                        class="form-control" id="number" placeholder="completed">

                </div>
                <div class="form-group">
                    <label for="type">Type</label>
                    <select name="script" id="" class="form-control">
                        <option value="select">select one</option>
                        <option value=""> New</option>
                        <option value=""> Old </option>

                    </select>
                </div>
                <button type="submit" class="btn">Submit</button>
            </form>
        </div>

    </div>

</body>

</html>