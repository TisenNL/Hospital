<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->

    <style type="text/css">
        label {
            display: inline-block;
            width: 200px;
        }
    </style>

    @include('admin.css')
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->

        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="container" align="center" style="padding-top: 100px;">
                @if (session()->has('message'))
                    <div class="container">
                        <div class="row alert alert-success">
                            <div class="col-sm text-right">
                                {{ session()->get('message') }}
                            </div>
                            <div class="col-sm text-right">
                                <button type="button" class="btn-close btn-close" aria-label="Close"
                                    data-bs-dismiss="alert">X</button>
                            </div>
                        </div>
                    </div>
                @endif
                <form action="{{ url('upload_doctor') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div style="padding: 15px;">
                        <label>Doctor Name</label>
                        <input type="text" style="color:black;" name="name" placeholder="Write the name" required>
                    </div>

                    <div style="padding: 15px;">
                        <label>Phone</label>
                        <input type="number" style="color:black;" name="number" placeholder="Write the number"
                            required>
                    </div>

                    <div style="padding: 15px;">
                        <label>Speciality</label>
                        <select name="speciality" style="color: black; width: 200px;" required>
                            <option>--Select--</option>
                            <option value="skin">Skin</option>
                            <option value="heart">Heart</option>
                            <option value="eye">Eye</option>
                            <option value="nose">Nose</option>
                        </select>
                    </div>

                    <div style="padding: 15px;">
                        <label>Room No</label>
                        <input type="text" style="color:black;" name="room" placeholder="Write the room number"
                            required>
                    </div>

                    <div style="padding: 15px;">
                        <label>Doctor Image</label>
                        <input type="file" name="file" required>
                    </div>

                    <div style="padding: 15px;">
                        <input type="submit" class="btn btn-success">
                    </div>

                </form>
            </div>
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('admin.script')
        <!-- End custom js for this page -->
</body>

</html>
