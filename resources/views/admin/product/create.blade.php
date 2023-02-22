@extends('admin.layout.layout')

@section('contents')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Products</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ Route('admin.homedb') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ Route('admin.product.index') }}">Users</a></li>
          <li class="breadcrumb-item active">Create new Product</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Product</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
          <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
          <i class="fas fa-times"></i>
        </button>
      </div>
    </div>
    <div class="card-body p-0">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Create new Product</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <form action="{{ Route('admin.product.store') }}" method="post" class="card-body" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" id="name" name="name" class="form-control">
            </div>
            <div class="form-group">
              <label for="desc">Description</label>
              <textarea id="desc" name="description" class="form-control"></textarea>
            </div>
            <div class="form-group">
              <label for="price">Price</label>
              <input type="number" id="price" name="price" class="form-control">
            </div>
            <div class="form-group">
              <label for="stock">Stock</label>
              <input type="number" id="stock" name="stock" class="form-control">
            </div>
            <div class="form-group">
              <label for="role">SalePrice % :</label>
              <select id="sale" name="sale" class="form-control custom-select" required>
                 <option value="0"selected>0%</option>
                <option value="5">5%</option>
                <option value="10" >10%</option>
                <option value="15">15%</option>
                <option value="20">20%</option>
                <option value="25">25%</option>
                <option value="50">50%</option>
                <option value="75">75%</option>
                <option value="99">99%</option>

              </select>
            </div><div class="form-group">
              <label for="status">Status :</label>
              <select id="status" name="status" class="form-control custom-select" required>
                 <option value="1"selected>Stocking</option>
                <option value="2">Out Of Stock</option>
              
              </select>
            </div>
            <div class="form-group">
              <label for="image">Image</label>
              <input type="file" id="image" name="photo" class="form-control">
            </div>
            <input type="submit" value="Create" class="btn btn-success">
          </form>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->

</section>
@endsection