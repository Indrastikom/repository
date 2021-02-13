<a href="<?php echo base_url();?>driver/tambah" class="btn btn-primary">Tambah</a>   
<div class="card mb-4 mt-2">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        List Driver
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Jenis Kelamin</th>
                        <th>No SIM</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach ($list_data as $row) { ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?php echo $row['name'];?></td>
                        <td>
                            <?php
                                $jk = $row['jk'];
                                if ($jk==0) {
                                    echo "Laki-laki";
                                }else{
                                    echo "Perempuan";
                                }
                            ?>    
                        </td>
                        <td><?= $row['nomor_sim'];?></td>
                        <td class="text-center">
                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                <div class="btn-group" role="group">
                                    <a href="#" id="btnGroupDrop1" data-toggle="dropdown"><i class="fa fa-cogs"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        <a class="dropdown-item" href="<?=base_url('vehicle/edit/'.$row['id']);?>">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                        <a class="dropdown-item" href="#" onclick="modal_hapus('<?=$row["id"];?>');"><i class="fas fa-trash-alt"></i> Hapus</a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <?php } ?>                       
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="modalHapus" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Anda Yakin Ingin Menghapus Data???
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a type="button" class="btn btn-danger" id="btn-hapus">Hapus</a>
            </div>
        </div>
    </div>
</div>

<script>
    setTimeout(function() {
        $('#alert_flash').addClass('collapse');
    }, 2000);

    function modal_hapus(id){
        $('#btn-hapus').attr('href','<?=base_url();?>driver/doHapus/'+id);
        $('#modalHapus').modal('show');
    }
</script>