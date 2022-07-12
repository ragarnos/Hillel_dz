<?php Core\View::render('layout/header', ['admin' => true]); ?>
<form action="<?= SITE_URL .'/admin/posts/store' ?>" method="POST">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex align-items-center justify-content-center">
                <div class="card w-50 mt-5 container">
                    <h5 class="card-header">Create new post</h5>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Title</label>
                        <input type="text" class="form-control" name='email' id="exampleFormControlInput1" placeholder="Title">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Post Desc</label>
                        <textarea class="form-control" name='description' id="exampleFormControlTextarea1" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </div>
    </div>
</form>
<?php
Core\View::render('layout/footer');
