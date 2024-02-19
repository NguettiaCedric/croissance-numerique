@extends('admin.layout_admin.layouts')

@section('title')
    Modification de projet
@endsection

@section('content') 
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Modification de projet</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Product</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        
        <!-- left column -->
        <div class="col-md-12">
          @if (session()->has('success'))
          <div class="alert-success mb-4 p-3">
              <h5 class="text-center">{{ session()->get('success') }}</h5>
          </div>
        @endif
          <!-- jquery validation -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Ajout de projet</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form id="quickForm" method="POST" action="{{url('/update-projet/'.$projet->id)}}" enctype="multipart/form-data">
              @csrf
              {{-- @method('PUT') --}}
              @method('PUT')
              <div class="card-body">
                <div class="form-group">
                  <label for="title">Nom de l'entreprise</label>
                  <input type="text" name="title" value="{{$projet->title}}" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" id="name"
                    placeholder="Nom de l'entreprise">
                    @error('title')
                      <div class="text-danger text-center">
                          <strong>{{ $message }}</strong>
                      </div>
                     @enderror
                </div>

                <label for="exampleInputFile">Product image</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                  </div>
                </div>

                <div class="form-group pt-2">
                  <label for="description">Description</label>
                    <textarea type="text"name="description" class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }} " id="description"
                    placeholder="Description"  cols="30" rows="10">{{$projet->description}}</textarea>

                    @error('description')
                      <div class="text-danger text-center">
                          <strong>{{ $message }}</strong>
                      </div>
                    @enderror                  
                    {{-- <textarea></textarea> --}}
                </div>
                
                
                
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <!-- <button type="submit" class="btn btn-success">Submit</button> -->
                <input type="submit" class="btn btn-primary" value="Save">
              </div>
            </form>
          </div>
          <!-- /.card -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>


  <!-- /.content -->
</div>

<!-- /.content-wrapper -->
    
    
@endsection



@section('scripts')
<!-- jquery-validation -->
<script src="{{asset('admin/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('admin/plugins/jquery-validation/additional-methods.min.js')}}"></script>


{{-- <script>
  tinymce.init({
  selector: 'textarea',
  height: 300,
  plugins: 'code link',
  toolbar: 'undo redo | formatselect | bold italic | alignleft aligncenter alignright | code | link',
});
</script> --}}


 <!-- Autres balises head... -->
{{--  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
 <script>
     tinymce.init({selector:'textarea'}); // Initialise TinyMCE sur les zones de texte
 </script> --}}



<script>
  $(function () {
    $.validator.setDefaults({
      submitHandler: function () {
        alert("Form successful submitted!");
      }
    });
    $('#quickForm').validate({
      rules: {
        email: {
          required: true,
          email: true,
        },
        password: {
          required: true,
          minlength: 5
        },
        terms: {
          required: true
        },
      },
      messages: {
        email: {
          required: "Please enter a email address",
          email: "Please enter a vaild email address"
        },
        password: {
          required: "Please provide a password",
          minlength: "Your password must be at least 5 characters long"
        },
        terms: "Please accept our terms"
      },
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      }
    });
  });
</script>


@endsection