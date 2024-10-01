<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
   <div class="container">
        <div class="row mx-auto mt-3">
            <div class="col-md-8">
                <h4><?=$name;?></h4>
                <a class="btn btn-primary mb-2" role="button" href="<?=site_url('info/add');?>">Add</a>
                <?php flash_alert(); ?>
                <table class="table table-bordered table-stripped">
                    <tr>
                        <th>ID</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Address</th>
                    </tr>
                    <?php foreach($information as $i): ?>
                    <tr>
                        <td><?=$i['id'];?></td>
                        <td><?=$i['cjwa_last_name'];?></td>
                        <td><?=$i['cjwa_first_name'];?></td>
                        <td><?=$i['cjwa_email'];?></td>
                        <td><?=$i['cjwa_gender'];?></td>
                        <td><?=$i['cjwa_address'];?></td>
                        <td>
                            <a href="<?=site_url('info/update/'.$i['id']);?>">Update</a> |
                            <a href="<?=site_url('info/delete/'.$i['id']);?>">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
   </div>
</body>
</html>