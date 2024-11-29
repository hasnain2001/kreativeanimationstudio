@extends('layouts.app')
@section('title')
    Blogs
@endsection
@section('main-content')
<style>
    .alert-custom {
        background-color: #d4edda;
        border-color: #c3e6cb;
        color: #155724;
        font-weight: bold;
        border-radius: 0.25rem;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    }
    .alert-custom .close {
        color: #155724;
    }
</style>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Blog</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('dashboard')}}"> Dashboard</a></li>

          <li class="breadcrumb-item active">Blog</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12 d-flex justify-content-end align-items-end">
                <a href="{{ route('dashboard.blog.create') }}" class="btn btn-primary">Add New</a>
            </div>
        </div>
    </div>
    
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Blogs</h5>
              
              <form id="bulkDeleteForm" action="{{ route('dashboard.blog.bulkDelete') }}" method="POST">
                @csrf
                @method('DELETE')
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">
                            <input type="checkbox" id="select-all-header">
                        </th>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Blog Image</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($blogs->isEmpty())
    <p class="text-center text-muted">No blogs available.</p>
@else
                    @foreach ($blogs as $blog)
                        <tr>
                            <td>
                                <input type="checkbox" name="selected_blogs[]" value="{{ $blog->id }}" class="selectCheckbox">
                            </td>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $blog->title }}</td>
                            <td>
                                @if ($blog->category_image)
                                    <img src="{{ asset($blog->category_image) }}" alt="Category Image" class="img-thumbnail" style="max-width: 80px;">
                                @else
                                    <span class="badge badge-secondary">No Image</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('dashboard.blog.edit', $blog->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{ route('dashboard.blog.delete', $blog->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this blog entry?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    @endif
                </tbody>
                <tfoot class="thead-dark">
                    <tr>
                        <th scope="col">
                            <input type="checkbox" id="select-all-footer">
                        </th>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Blog Image</th>
                        <th scope="col">Action</th>
                    </tr>
                </tfoot>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <script>
    document.addEventListener('DOMContentLoaded', function() {
        const selectAllHeader = document.getElementById('select-all-header');
        const selectAllFooter = document.getElementById('select-all-footer');
        const checkboxes = document.querySelectorAll('.selectCheckbox');

        function toggleCheckboxes(selectAll) {
            checkboxes.forEach(checkbox => {
                checkbox.checked = selectAll.checked;
            });
        }

        selectAllHeader.addEventListener('change', function() {
            toggleCheckboxes(selectAllHeader);
            selectAllFooter.checked = selectAllHeader.checked;
        });

        selectAllFooter.addEventListener('change', function() {
            toggleCheckboxes(selectAllFooter);
            selectAllHeader.checked = selectAllFooter.checked;
        });

        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                if (this.checked) {
                    if (document.querySelectorAll('.selectCheckbox:checked').length === checkboxes.length) {
                        selectAllHeader.checked = true;
                        selectAllFooter.checked = true;
                    }
                } else {
                    selectAllHeader.checked = false;
                    selectAllFooter.checked = false;
                }
            });
        });
    });
</script>


@endsection