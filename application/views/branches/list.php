<!-- body -->
<div class="" id= "content">
    <h3>List of Available Branches</h3>
    <div style="display: flex;">
        <a href=<?php echo base_url('') ?> class="btn btn-success">Go Back</a>
        <span></span>
        <a href=<?php echo base_url('branches/create') ?> class="btn btn-success" style="margin-left:auto">Add New</a>
    </div>
    <hr>
    <table class="table text-center">
        <thead>
            <tr>
                <th class="text-center">Bank Name</th>
                <th class="text-center">Bank Code</th>
                <th class="text-center">Branch Name</th>
                <th class="text-center">Branch Code</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($branches as $branch):?>
            <tr>
                <td><?php echo $branch['bank_name']?></td>
                <td><?php echo $branch['bank_code']?></td>
                <td><?php echo $branch['branch_name']?></td>
                <td><?php echo $branch['branch_code']?></td>
                <td>
                    <a href="<?php echo base_url('branches/edit/'.$branch['branch_id']) ?>" class="btn btn-primary">Edit</a>
                    <a href="<?php echo base_url('branches/delete/'.$branch['branch_id']) ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            
            <?php endforeach;?>
           
        </tbody>
    </table>
</div>
