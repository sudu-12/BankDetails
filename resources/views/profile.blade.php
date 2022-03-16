<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>profile</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<form>      
    <div class="container">

                    <label for="bank name" class="form-label" placeholder="">Bank Name</label> 
                    <input type="text" class="form-control" placeholder=""></br>
</div>
                    <input type="submit" class="btn btn-primary" value="Add">
                    <input type="button" class="btn btn-warning" value="Edit">
                    <input type="submit" class="btn btn-primary" value="View">
                    <input type="button" class="btn btn-warning" value="Delete">


    <div class="container">

<label for="Branch" class="form-label" placeholder="">Branch</label> 
<input type="text" class="form-control" placeholder=""></br>
</div>
<input type="submit" class="btn btn-primary" value="Add">
<input type="button" class="btn btn-warning" value="Edit">
<input type="submit" class="btn btn-primary" value="View">
<input type="button" class="btn btn-warning" value="Delete">


<div class="container">

<label for="Branch code" class="form-label" placeholder="">Branch Code</label> 
<input type="text" class="form-control" placeholder=""></br>
</div>
<input type="submit" class="btn btn-primary" value="Add">
<input type="button" class="btn btn-warning" value="Edit">
<input type="submit" class="btn btn-primary" value="View">
<input type="button" class="btn btn-warning" value="Delete">


<div class="container">

<label for="AccountNumber" class="form-label" placeholder="">AccountNumber</label> 
<input type="text" class="form-control" placeholder=""></br>
</div>
<input type="submit" class="btn btn-primary" value="Add">
<input type="button" class="btn btn-warning" value="Edit">
<input type="submit" class="btn btn-primary" value="View">
<input type="button" class="btn btn-warning" value="Delete">





                    {{csrf_field()}}
        </form>
</body>
</head>
</html>
