
@extends("theme")

@section("content")

    <div class="container">
    <h3><strong>ADD EMPLOYEE</strong></h3>
    <br>
      <table class="table">
        <tr>
            <td>Employee name</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Emp code</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Designation</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Salary</td>
            <td><input type="number" class="form-control"></td>
        </tr>
        <tr>
            <td>DOB</td>
            <td><input type="date" class="form-control"></td>
        </tr>
        <tr>
            <td>Place</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Pincode</td>
            <td><input type="number" class="form-control"></td>
        </tr>
        <tr>
            <td>Phone no</td>
            <td><input type="number" class="form-control"></td>
        </tr>
        <tr>
            <td></td>
            <td><button class="btn btn-success">SUBMIT</button></td>
        </tr>    
      </table>
    </div>
  @endsection