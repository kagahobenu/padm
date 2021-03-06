
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Produtos <small> - Página Produtos</small></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Produtos</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">

                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">DataTable with default features</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="tabela-produtos" class="table table-bordered table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>Rendering engine</th>
                                                <th>Browser</th>
                                                <th>Platform(s)</th>
                                                <th>Engine version</th>
                                                <th>CSS grade</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            foreach ($dados as $dado) {
                                                ?>

                                                <tr>
                                                    <td><?php echo $dado['id']; ?></td>
                                                    <td><?php echo $dado['nome']; ?></td>
                                                    <td><?php echo $dado['tipo']; ?></td>
                                                    <td><?php echo $dado['valor']; ?></td>
                                                    
                                                    <td>
                                                        <a href="?pg=produtos-item&id=<?php echo $dado['id']; ?>" class="btn btn-outline-success"><span class="fa fa-eye"></span></a>
                                                        <a href="#" class="btn btn-outline-warning"><span class="fa fa-edit"></span></a>
                                                        <a href="#" class="btn btn-outline-danger"><span class="fa fa-trash"></span></a>
                                                    </td>
                                                </tr>

                                                <?php
                                            }
                                            ?>








                                        </tbody>                                   
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
