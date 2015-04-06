<?php use mvc\routing\routingClass as routing ?>

<?php mvc\view\viewClass::includePartial('partials/menu.html') ?>

<body>
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('http://localhost/SohoFramework/web/img/about-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>walberto renteria</h1>
                        <hr class="small">
                        <span class="subheading">This is what I do.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
<!--    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe nostrum ullam eveniet pariatur voluptates odit, fuga atque ea nobis sit soluta odio, adipisci quas excepturi maxime quae totam ducimus consectetur?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius praesentium recusandae illo eaque architecto error, repellendus iusto reprehenderit, doloribus, minus sunt. Numquam at quae voluptatum in officia voluptas voluptatibus, minus!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum molestiae debitis nobis, quod sapiente qui voluptatum, placeat magni repudiandae accusantium fugit quas labore non rerum possimus, corrupti enim modi! Et.</p>
            </div>
        </div>
    </div>-->

    <!--admin sidebar-->
    
    <div class="col-sm-2 col-lg-2">
        <div class="sidebar-nav">
            <div class="nav-canvas">
                <div class="nav-sm nav nav-stacked">
                </div>
                <ul class="nav nav-pills nav-stacked main-menu">
                    <li class="nav-header">Main</li>
                    <li><a class="ajax-link" href="index.html"><i class="glyphicon glyphicon-home"></i><span> Dashboard</span></a>
                    </li>
                    <li><a class="ajax-link" href="ui.html"><i class="glyphicon glyphicon-eye-open"></i><span> UI Features</span></a>
                    </li>
                    <li><a class="ajax-link" href="form.html"><i class="glyphicon glyphicon-edit"></i><span> Forms</span></a></li>
                    <li><a class="ajax-link" href="chart.html"><i class="glyphicon glyphicon-list-alt"></i><span> Charts</span></a>
                    </li>
                    <li><a class="ajax-link" href="typography.html"><i class="glyphicon glyphicon-font"></i><span> Typography</span></a>
                    </li>
                    <li><a class="ajax-link" href="gallery.html"><i class="glyphicon glyphicon-picture"></i><span> Gallery</span></a>
                    </li>
                    <li class="nav-header hidden-md">Sample Section</li>
                    <li class="active"><a class="ajax-link" href="table.html"><i class="glyphicon glyphicon-align-justify"></i><span> Tables</span></a></li>
                    <li class="accordion">
                        <a href="#"><i class="glyphicon glyphicon-plus"></i><span> Accordion Menu</span></a>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Child Menu 1</a></li>
                            <li><a href="#">Child Menu 2</a></li>
                        </ul>
                    </li>
                    <li><a class="ajax-link" href="calendar.html"><i class="glyphicon glyphicon-calendar"></i><span> Calendar</span></a>
                    </li>
                    <li><a class="ajax-link" href="grid.html"><i class="glyphicon glyphicon-th"></i><span> Grid</span></a></li>
                    <li><a href="tour.html"><i class="glyphicon glyphicon-globe"></i><span> Tour</span></a></li>
                    <li><a class="ajax-link" href="icon.html"><i class="glyphicon glyphicon-star"></i><span> Icons</span></a></li>
                    <li><a href="error.html"><i class="glyphicon glyphicon-ban-circle"></i><span> Error Page</span></a>
                    </li>
                    <li><a href="login.html"><i class="glyphicon glyphicon-lock"></i><span> Login Page</span></a>
                    </li>
                </ul>
                <label id="for-is-ajax" for="is-ajax"><input id="is-ajax" type="checkbox"> Ajax on menu</label>
            </div>
        </div>
    </div>
    
    <!--admin sidebar-->
    
    
    <!--admin table-->
    
    <div class="row">
        <div class="box col-md-12" style="width: 80%;">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-list"></i> lista de tablas </h2>
                    <div class="box-icon">
                        <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-plus"></i></a>
                        <a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-trash"></i></a>
                        <!--<a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>-->
                    </div>
                </div>
                <div class="box-content">
<!--                    <div class="alert alert-info">For help with such table please check <a href="http://datatables.net/" target="_blank">http://datatables.net/</a></div>-->
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid"><div class="row"><div class="col-md-6"><div id="DataTables_Table_0_length" class="dataTables_length"><label><select size="1" name="DataTables_Table_0_length" aria-controls="DataTables_Table_0"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> numero de tablas </label>
                    </div></div><div class="col-md-6"><div class="dataTables_filter" id="DataTables_Table_0_filter"><label>Search: <input type="text" aria-controls="DataTables_Table_0"></label></div></div></div>
<!--                        <table class="table table-striped table-bordered bootstrap-datatable datatable responsive dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" style="width: 215px;">Username</th>
                                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date registered: activate to sort column ascending" style="width: 180px;">Creado</th>
                                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending" style="width: 97px;">Acciones</th>
                                
                                </tr>
                            </thead>

                            <tbody role="alert" aria-live="polite" aria-relevant="all">
                                <?php // foreach ($objUsuarios as $usuario): ?>
                                <tr class="odd">
                                    <td class=" sorting_1"><?php // echo $usuario->$usu ?></td>
                                    <td class="center "><?php // echo $usuario->$creado ?></td>
                                    <td class="center ">
                                        <a class="btn btn-info" href="#">
                                            <i class="glyphicon glyphicon-edit icon-white"></i>
                                            Edit
                                        </a>
                                        <a class="btn btn-danger" href="#">
                                            <i class="glyphicon glyphicon-trash icon-white"></i>
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                                <?php // endforeach; ?>
                            </tbody>
                        </table>-->
                        <ul class="list-group">
                            <li class="list-group-item"> <a href="<?php echo routing::getInstance()->getUrlWeb('default', 'editUsuario') ?>">Usuario</a> </li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Morbi leo risus</li>
                            <li class="list-group-item">Porta ac consectetur ac</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                          </ul>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="dataTables_info" id="DataTables_Table_0_info">Showing 1 to 10 of 32 entries
                                </div>                                    
                            </div>
                            <div class="col-md-12 center-block">
                                <div class="dataTables_paginate paging_bootstrap pagination">
                                    <ul class="pagination">
                                        <li class="prev disabled">
                                            <a href="#">← Previous</a>
                                        </li>
                                        <li class="active">
                                            <a href="#">1</a>
                                        </li>
                                        <li>
                                            <a href="#">2</a>
                                        </li>
                                        <li><a href="#">3</a>
                                        </li><li>
                                            <a href="#">4</a>
                                        </li>
                                        <li class="next">
                                            <a href="#">Next → </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    
    <!--admin table-->

    <hr>
    <?php mvc\view\viewClass::includePartial('footer.html') ?>
</body>

</html>
