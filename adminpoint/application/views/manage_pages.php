<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <form method="post" id="manage-page-form">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-3">Manage page content</h4>
                                <div class="row mb-3">
                                    <div class="col-lg-12 form-group">
                                        <select name="pageid" id="pageid" class="form-control">
                                            <option value="">-- Select Page --</option>
                                            <?php if($pageList){
                                                foreach($pageList as $value){
                                                    if(@$_POST['pageid'] == $value['id']){
                                                        $sel = 'selected';
                                                    }else if(@$editItem['fk_pages_id'] == $value['id']){
                                                        $sel = 'selected';   
                                                    }else{
                                                        $sel = '';
                                                    }
                                                    echo '<option value="'.$value['id'].'" '.$sel.'>'.$value['page'].'</option>';
                                                }
                                            } ?>
                                        </select>
                                        <span class="invalid-feedback"><?php echo form_error('pageid'); ?></span>
                                    </div>
                                </div>

                                <textarea class="classic-editor" id="content" name="content"><?php echo set_value('content', @$editItem['content']); ?></textarea>
                                <span class="invalid-feedback"><?php echo form_error('content'); ?></span>
                                
                                <div class="row mt-3">
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
