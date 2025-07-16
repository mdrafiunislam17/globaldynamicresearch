@extends("admin.layouts.master")
@section("title", "Create seminar")

@section("content")
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Create seminar</h1>
            <a href="{{ route("seminar.index") }}"
               class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-eye fa-sm text-white-50"></i> View seminars
            </a>
        </div>

        <!-- Alerts -->
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span>&times;</span>
                </button>
            </div>
        @endif

        @if (session()->has("success"))
            <div class="alert alert-success alert-dismissible fade show">
                {{ session("success") }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span>&times;</span>
                </button>
            </div>
        @endif

        @if (session()->has("error"))
            <div class="alert alert-danger alert-dismissible fade show">
                {{ session("error") }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span>&times;</span>
                </button>
            </div>
        @endif

        <!-- Form Card -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="{{ route('seminar.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- Title -->
                    <div class="form-group row">
                        <label for="title" class="col-sm-3 col-form-label text-right font-weight-bold">Title *</label>
                        <div class="col-sm-6">
                            <input type="text"
                                   class="form-control"
                                   id="title"
                                   name="title"
                                   value="{{ old('title') }}"
                                   required
                                   autofocus>
                        </div>
                    </div>

                    <!-- Date -->
                    <div class="form-group row">
                        <label for="date" class="col-sm-3 col-form-label text-right font-weight-bold">Date *</label>
                        <div class="col-sm-6">
                            <input type="date"
                                   class="form-control"
                                   id="date"
                                   name="date"
                                   value="{{ old('date') }}"
                                   required>
                        </div>
                    </div>

                    <!-- Start Time -->
                    <div class="form-group row">
                        <label for="start_time" class="col-sm-3 col-form-label text-right font-weight-bold">Start Time *</label>
                        <div class="col-sm-6">
                            <input type="time"
                                   class="form-control"
                                   id="start_time"
                                   name="start_time"
                                   value="{{ old('start_time') }}"
                                   required>
                        </div>
                    </div>

                    <!-- End Time -->
                    <div class="form-group row">
                        <label for="end_time" class="col-sm-3 col-form-label text-right font-weight-bold">End Time *</label>
                        <div class="col-sm-6">
                            <input type="time"
                                   class="form-control"
                                   id="end_time"
                                   name="end_time"
                                   value="{{ old('end_time') }}"
                                   required>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="form-group row">
                        <label for="description" class="col-sm-3 col-form-label text-right font-weight-bold">Description</label>
                        <div class="col-sm-6">
                        <textarea name="description"
                                  id="description"
                                  class="form-control"
                                  rows="5">{{ old('description') }}</textarea>
                        </div>
                    </div>

                    <!-- Image -->
                    <div class="form-group row">
                        <label for="image" class="col-sm-3 col-form-label text-right font-weight-bold">Image *</label>
                        <div class="col-sm-6">
                            <input type="file"
                                   class="form-control-file"
                                   id="image"
                                   name="image"
                                   required>
                        </div>
                    </div>

                    <!-- Status -->
                    <div class="form-group row">
                        <label for="status" class="col-sm-3 col-form-label text-right font-weight-bold">Status</label>
                        <div class="col-sm-6">
                            <select name="status" id="status" class="form-control">
                                <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>
                    </div>

                    <hr>

                    <!-- Submit -->
                    <div class="form-group row">
                        <div class="offset-sm-3 col-sm-6">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save mr-1"></i> Save seminar
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>
@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.8.2/tinymce.min.js"
            referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#description',
            height: 300,
            plugins: 'advlist autolink lists link image charmap print preview anchor',
            toolbar: 'undo redo | formatselect | bold italic backcolor | ' +
                'alignleft aligncenter alignright alignjustify | ' +
                'bullist numlist outdent indent | removeformat | image link',
            menubar: false,
        });
    </script>
@endpush
