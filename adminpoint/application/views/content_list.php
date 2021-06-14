<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Content list</h4>
                            
                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
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
                                            echo '<td>'.$value['content'].'</td>';
                                            echo '<td>'.date('d-m-Y', strtotime($value['created_at'])).'</td>';
                                            echo '<td>'.date('d-m-Y', strtotime($value['updated_at'])).'</td>';
                                            echo '<td>
                                                <a href="'.base_url().'manage-pages/'.md5($value['id']).'" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> Edit</a>

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