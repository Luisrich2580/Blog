<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create A New Content</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="modal.php" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label fw-bold">Content Head</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div class="form-text">Make Sure Your Content Name Is Unique.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label fw-bold">Description textarea</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label fw-bold">Add Image</label>
                        <input type="file" class="form-control">
                    </div>
                    <button type="button" class="btn btn-primary mt-3">Add Content</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php  

    // if(isset($_POST[]))


?>