<div class="modal fade" id="createDestinationModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="createDestinationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDestinationModalLabel">Create New Destination</h5>
                <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close"><i
                        class="fas fa-x"></i></button>
            </div>
            <form class="needs-validation" novalidate action="/destinations" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="thumbnail_img" class="col-form-label">Thumbnail</label>
                        <input class="form-control" type="file" id="thumbnail_img" name="thumbnail_img" required>
                        <div class="invalid-feedback">
                            Thumbnail image is required
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="hero_img" class="col-form-label">Hero</label>
                        <input class="form-control" type="file" id="hero_img" name="hero_img" required>
                        <div class="invalid-feedback">
                            Hero image is required
                        </div>
                    </div>
                    {{-- <div class="mb-3">
                        <label for="images" class="col-form-label">Hero Images</label>
                        <input class="form-control" type="file" id="images" name="images[]" multiple required>
                        <div class="invalid-feedback">
                            Hero images is required
                        </div>
                    </div> --}}
                    <div class="mb-3">
                        <label for="name" class="form-label">Destination Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                        <div class="invalid-feedback">
                            Destination name is required
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-6">
                            <label for="category_id" class="col-form-label">Category</label>
                            <select class="form-control form-select" id="category_id" name="category_id"
                                aria-label="Default select example">
                                <optgroup label="Select Category">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </optgroup>
                            </select>
                        </div>
                        <div class="mb-3 col-6">
                            <label for="location" class="col-form-label">Location</label>
                            <input type="text" class="form-control" id="location" name="location" required>
                            <div class="invalid-feedback">
                                Location is required
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="mb-3 col-6">
                            <label for="price" class="col-form-label">Price</label>
                            <input type="text" class="form-control" id="price" name="price" required>
                            <div class="invalid-feedback">
                                Price is required
                            </div>
                        </div>

                        <div class="mb-3 col-6">
                            <label for="time" class="col-form-label">Time</label>
                            <input type="text" class="form-control" id="time" name="time" required>
                            <div class="invalid-feedback">
                                Time is required
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="col-form-label">Description</label>
                        <textarea class="form-control" rows="6" name="description" id="description" required></textarea>
                        <div class="invalid-feedback">
                            Description is required
                        </div>
                    </div>
                    <div class="mb-3">
                        {{-- <input checked class="form-check-input" type="checkbox" id="status" name="status"> --}}
                        <label for="status">
                            Status
                        </label>
                        <label class="switch">
                            <input type="checkbox" checked="true" id="status" name="status">
                            <span class="slider"></span>
                            {{-- <p class="off">No</p>
                            <p class="on">Yes</p> --}}
                        </label>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>
