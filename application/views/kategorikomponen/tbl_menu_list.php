<div class="content-wrapper">
    <section class="content">


        <div class="row">
            <div class="col-xs-12">
                <div class="caption">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <div class="box box-warning box-solid">

                    <div class="box-header">
                        <h3 class="box-title">KATEGORI KOMPONEN</h3>
                    </div>

                    <div class="box-body">
                        <div style="padding-bottom: 10px;"'>
                            <?php echo anchor(site_url('kategorikomponen/create'), '<i class="fa fa-wpforms" aria-hidden="true"></i> Tambah Data', 'class="btn btn-danger btn-sm"'); ?>
                            <?php echo anchor(site_url('kategorikomponen/excel'), '<i class="fa fa-file-excel-o" aria-hidden="true"></i> Export Ms Excel', 'class="btn btn-success btn-sm"'); ?>
                            <?php echo anchor(site_url('kategorikomponen/word'), '<i class="fa fa-file-word-o" aria-hidden="true"></i> Export Ms Word', 'class="btn btn-primary btn-sm"'); ?>
                            <?php echo anchor(site_url('kategorikomponen/pdf'), '<i class="btn btn-danger btn-sm "> Export To PDF</i>',array('target'=>'_blank')); ?>
                            </div>
                        <table class="table table-bordered table-striped" id="mytable">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>Jenis Komponen</th>
                                    <th>Nama Kategori</th>
                                    <th>Keterangan</th>
                                    <th width="100px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $start = 0;
                                foreach ($kategorikomponen_data as $kategorikomponen)
                                {
                                    ?>
                                    <tr>
                                <td><?php echo ++$start ?></td>
                                <td><?php echo $kategorikomponen->jenis_komponen ?></td>
                                <td ><?php echo $kategorikomponen->nama_kategori ?></td>
                                <td><?php  echo $kategorikomponen->keterangan ?></td>

                                <td style="text-align:center" width="140px">
                                <?php 
                                /*echo anchor(site_url('kategorikomponen/read/'.$kategorikomponen->jenis_komponen),'<i class="fa fa-eye"></i>',array('title'=>'detail','class'=>'btn btn-primary btn-sm')); 
                                echo '  '; */
                                echo anchor(site_url('kategorikomponen/update/'.$kategorikomponen->jenis_komponen),'<i class="fa fa-pencil-square-o"></i>',array('title'=>'edit','class'=>'btn btn-primary btn-sm')); 
                                echo '  '; 
                                echo anchor(site_url('kategorikomponen/delete/'.$kategorikomponen->jenis_komponen),'<i class="fa fa-trash-o"></i>','title="delete" class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
                                ?>
                                </td>
                                </tr>
                                    <?php
                                }
                                ?>
                            </tbody>

                        </table>

                        <script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
                        <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
                        <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
                        <script type="text/javascript">
                            $(document).ready(function () {
                                $("#mytable").dataTable();
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
