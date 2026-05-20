<?php include "header.php"; ?>

<div class="container">
    <div class="card col-md-8 mx-auto mt-3">
        <div class="card-header">
            <h3 class="text-center text-secondary">Add User</h3>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name">
                </div>
                <button type="submit" name="submit" class="btn btn-primary w-100">Submit</button>
            </form>
        </div>
    </div>
</div>

?>