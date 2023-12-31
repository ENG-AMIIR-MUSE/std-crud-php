
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>     -->

</head>
<body>

    <div class="container ">

        <div class="row justify-content-center ">
            <div class="col-12 m-5 ">
            <h2 class="  ">User Infromation</h2>
                <button class="btn btn-success m-1 add">Add Student</button>
            </div>
            <div class="col-12">
         
                <table class="table " id="myTable">
                    <tr class="bg-black text-white">
                        <th >ID</th>
                        <th>Name</th>
                        <th>Class</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Update</th>
                        <th>Delete</th>
                 
                    </tr>
                </table>
            </div>
    
        </div>
        <div class="modal " tabindex="-1" role="dialog" id="addNew">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Student Registration</h5>
        <button type="button"  class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
        <div class="row">
           <div class="col-12">
       
            <div class="form-group">
                <form  class="row" id="registerForm">
                    <div class="col-2 ">
                        <label for="">Name</label>
                    </div>
                    <div class="col-10  mb-2">
                        <input type="text"id = 'name' name  = 'name' class="form-control">
                    </div>
                    
                    <div class="col-2">
                        <label for="">Class</label>
                    </div>
                    <div class="col-10  mb-2">
                        <input type="text" name = 'class'class="form-control"id ='class' placeholder="Class">
                    </div>
                    <div class="col-2 mb-2">
                        <label for="">Phone</label>
                    </div>
                    <div class="col-10 mb-2">
                        <input type="text" name="phone" class="form-control"id = 'phone' >
                    </div>
                    <div class="col-2 ">
                        <label for="">Address</label>
                    </div>
                    <div class="col-10 mb-2">
                        <input type="text" class="form-control" name="address" id='address'>
                    </div>
        <button type="submit" class="btn btn-primary">Register</button>

                </form>
            </div>
           </div>
        </div>
      </div>
  
    </div>
  </div>
</div>
    </div>




<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src='./main2.js'></script>


</body>
</html>