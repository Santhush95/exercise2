<!-- body -->
<div class="" id= "content">
    <h3>Create Branch</h3>
    <hr>
    <form id="branch_create" method="post" action= <?php echo base_url('branches/store');?>>
        <div class="form-group">
            <label> Bank Name</label>
            <select id="bank_name" class="form-control" name= "bank_id">
                <?php foreach ($banks as $bank):?>
                    <?php if($bank['bank_id'] == $branch->bank_id) { ?>
                        <option class="form-control"  value=<?php echo $bank['bank_id']?> selected><?php echo $bank['bank_name']?></option>
                    <?php } else { ?>
                        <option class="form-control" value=<?php echo $bank['bank_id']?>><?php echo $bank['bank_name']?></option>
                    <?php } ?>
                <?php endforeach;?>
            </select>
        </div>
        <div class="form-group">
            <label> Branch Name</label>
            <input type="text" class="form-control" id="" placeholder="Enter Branch Name" name= "branch_name" >
        </div>
        <div class="form-group">
            <label> Branch Code</label>
            <input type="text" class="form-control" id="" placeholder="Enter Branch Code" name= "branch_code" >
        </div>
        <input type="submit" name="Update Branch" class="btn btn-primary">
    </form>
</div>