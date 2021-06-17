

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <?php if($this->session->flashdata('responsemsg')){ ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <i class="fa fa-exclamation-triangle me-2"></i>
                            <?php echo $this->session->flashdata('responsemsg')['msg'] ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            
                            </button>
                        </div>
                    <?php } ?>

                    <div class="card">
                        <div class="card-body table-responsive">
                            <h4 class="card-title">प्रकरण सूची</h4>
                            
                            <table id="datatable" class="table table-bordered nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>S.No.</th>
                                        <th>Page Name</th>
                                        <th>Content</th>
                                        <th>Create At</th>
                                        <th>Updated At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    <?php if($result){
                                        $i = 1;
                                        foreach($result as $value){
                                            echo '<tr>';
                                            echo '<td>'.$i++.'</td>';
                                            echo '<td>'.$value['page'].'</td>';
                                            echo '<td>'.substr($value['content'], 0, 100).'</td>';
                                            echo '<td>'.date('d-m-Y h:i:s A', strtotime($value['created_at'])).'</td>';
                                            echo '<td>'.date('d-m-Y h:i:s A', strtotime($value['updated_at'])).'</td>';
                                            echo '<td>
                                                <a href="'.base_url().'manage-pages?contentid='.md5($value['id']).'" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> Edit</a>

                                                <button class="btn btn-danger btn-sm delete" data-id="'.$value['id'].'" data-url="'.$this->uri->segment(1).'"><i class="fa fa-trash-o"></i> Delete</button>
                                                </td>';
                                            echo '</tr>';
                                        }
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>