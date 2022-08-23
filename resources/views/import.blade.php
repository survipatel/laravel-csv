<!DOCTYPE html>
<html>
<head>
    <title>import excel file</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
</head>
<body>
   
<div class="container">
    <div class="card bg-light mt-3">
        <div class="card-header">
            UI Design
        </div>
        <div class="card-body">
            <form action="/import" method="POST" enctype="multipart/form-data">
                @csrf
                
              Excel File:  <input type="file" name="file" class="form-control"> 
                <br>
                <button class="btn btn-primary">Import</button>
            
            </form>
        </div>
    </div>
</div>
   
</body>
</html>