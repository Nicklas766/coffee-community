<div class='wrapper' style="background:#F0F0F0; min-height:900px;">


    <table style="margin:100px auto;">
         <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Email</th>
            <th>Authority</th>
            <th>Edit</th>
        </tr>
        <?php foreach ($users as $user) : ?>
             <tr>
                 <td><img src="<?= $user->img ?>" style="height:100px; width:100%;"></td>
                 <td><?= $user->name ?></td>
                 <td><?= $user->email ?></td>
                 <td><?= $user->authority ?></td>
                 <td><a href='<?= $this->url("admin/user/$user->id") ?>'>Edit </a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
