@extends('admin.layout_admin.layouts')

@section('style')
  <link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin/dist/css/adminlte.min.css')}}">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin/dist/css/adminlte.min.css')}}">
@endsection

@section('title')
    Liste de projet
@endsection

@section('content') 
<!-- Content Wrapper. Contains page content -->
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Projets</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Products</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              {{-- <h3 class="card-title">Liste projet</h3> --}} <a href="{{route('ajout-projet')}}" class="btn btn-primary">Créer un projet</a>
            </div>

            @if (session()->has('success'))
                <div class="alert-success mb-4 p-1">
                    <h5 class="text-center">{{ session()->get('success') }}</h5>
                </div>
            @endif
        
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Num.</th>
                    <th>Picture</th>
                    <th>Nom de l'entreprise</th>
                    <th>Description</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($projets as $projet)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>
                        <img src="/storage/projet_image/{{$projet->image}}" style="height : 50px; width : 50px"
                          class="img-circle elevation-2" alt="User Image">
                      </td>
                      <td>{{$projet->title}}</td>
                      {{-- <td> {{$projet->description}}</td> --}}
                      {{-- <td>{{ str_limit($projet->description, 20) }}</td> --}}
                      <td>{{ Str::limit($projet->description, 35) }}</td>

                      <td>
                          @if ($projet->status != 0)                            
                            <a href="{{url('/desactiver-projet/'.$projet->id)}}" class="btn btn-success">Désactiver</a>
                          @else                            
                            <a href="{{url('/activer-projet/'.$projet->id)}}" class="btn btn-warning">Activer</a>
                          @endif

                          <a href="{{url('/edit-projet/'.$projet->id)}}" class="btn btn-primary"><i class="nav-icon fas fa-edit"></i></a>

                          <a href="{{url('/delete-projet/'.$projet->id)}}" id="delete" class="btn btn-danger"><i class="nav-icon fas fa-trash"></i></a>
                      </td>
                  </tr>
                  @endforeach
                  
                </tbody>
                <tfoot>
                  <tr>
                    <th>Num.</th>
                    <th>Picture</th>
                    <th>Nom de l'entreprise</th>
                    <th>Description</th>
                    <th>Actions</th>
                  </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- /.content-wrapper -->
    
    
@endsection




@section('scripts')
<!-- jquery-validation -->
<script src="{{asset('admin/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('admin/plugins/jquery-validation/additional-methods.min.js')}}"></script>

<script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('admin/dist/js/demo.js')}}"></script>
<script src="{{asset('admin/dist/js/bootbox.min.js')}}"></script>



<script>
  $(document).on("click", "#delete", function (e) {
    e.preventDefault();
    var link = $(this).attr("href");
    bootbox.confirm("Souhaitez-vous supprimer cet element?", function (confirmed) {
      if (confirmed) {
        window.location.href = link;
      };
    });
  });
</script> 


<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>


@endsection