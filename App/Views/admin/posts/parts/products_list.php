<table class="table">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Created at</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($posts as $post): ?>
        <tr>
            <th scope="row"><?= $post->id ?></th>
            <td><?= $post->title ?></td>
            <td><?= $post->created_at ?></td>
            <td>
                <a href="<?= SITE_URL . '/' ."admin/posts/{$post->id}/edit" ?>" class="btn btn-info">Edit</a>
                <form action="<?= SITE_URL . '/' ."admin/posts/{$post->id}/destroy" ?>" method="post">
                    <button class="btn btn-danger">Remove</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
