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

    <link rel="stylesheet" href="style.css">
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
    <link rel="stylesheet" href="telecall.css">

    <title>Veera Computers</title>
    <link rel="icon" type="image/ico" href="vc2.png">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col"></div>
            <div class="col-5"></div>
            <div class="content">
                <h3>Fill Visit Deatils</h3>
                <form>
                    <div class="form-group">
                        <!-- <label for="script">script:</label> -->
                        <select name="type" id="" class="form-control">
                            <option value="select">New or Old</option>
                            <option value=""> New</option>
                            <option value=""> Old </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <!-- <label for="total">Total nos:</label> -->
                        <input type="number" class="form-control" id="total" aria-describedby="number"
                            placeholder="Enter number">

                    </div>
                    <div class="form-group">
                        <!-- <label for="city">City:</label> -->
                        <input type="text" class="form-control" id="place" aria-describedby="text"
                            placeholder="Enter place">

                    </div>

                    <div class="form-group">
                        <!-- <label for="demo">Demo</label> -->
                        <input type="text" class="form-control" id="demo" aria-describedby="text" placeholder="company">

                    </div>
                    <div class="form-group">
                        <!-- <label for="nagative">Nagative</label> -->
                        <input type="text" class="form-control" id="result" aria-describedby="text"
                            placeholder="result">

                    </div>
                    <button type="submit" class="btn">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>