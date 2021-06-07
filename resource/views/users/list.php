<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Danh sach nguoi dung</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <?php if (isset($_SESSION['userLogin']['role']) && $_SESSION['userLogin']['role'] == 1) : ?>

                        <th></th>
                    <?php endif; ?>


                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <?php if (isset($_SESSION['userLogin']['role']) && $_SESSION['userLogin']['role'] == 1) : ?>
                        <th></th>
                    <?php endif; ?>
                </tr>
                </tfoot>
                <tbody>
                <?php foreach ($users as $key => $user): ?>
                    <tr>
                        <th scope="row"><?php echo $key + 1 ?></th>
                        <td><?php echo $user->name ?></td>
                        <td><?php echo $user->email ?></td>
                        <td><?php echo $user->address ?></td>
                        <?php if (isset($_SESSION['userLogin']['role']) && $_SESSION['userLogin']['role'] == 1) : ?>

                            <td>
                                <a onclick="return confirm('Are you sure?')"
                                   href="index.php?page=users&action=delete&id=<?php echo $user->id ?>"
                                   class="btn btn-danger">Delete</a>
                            </td>
                        <?php endif; ?>

                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>