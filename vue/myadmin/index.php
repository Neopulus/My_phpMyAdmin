<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="my_phpmyadmin">
    <meta name="author" content="etna_dev">

    <title>my_phpmyadmin</title>

    <!-- Bootstrap Core CSS -->
    <link href="vue/myadmin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="vue/myadmin/css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vue/myadmin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="myadmin.php">PHP MySQL Administrator</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="myadmin.php"><i class="fa-fw fa fa-database"></i> Bases de données</a>
                    </li>
                    <li>
                        <a href="request.php"><i class="fa fa-fw fa-pencil"></i> MySQL Request</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Bases de données
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-database"></i> <a href="myadmin.php">Bases de données</a>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <div class="col-lg-6">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Nombre de tables</th>
                                <th>Taille en Mégaoctet(s)</th>
                                <th>Date de création</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach($data as $db)
                            {
                            ?>
                            <tr>
                                <td><a href="<?php echo $db->db_link_table();?>"><?php echo $db->db_name(); ?></a></td>
                                <td><?php echo $db->nb_tables(); ?></td>
                                <td><?php echo $db->size(); ?></td>
                                <td><?php echo $db->creation_date(); ?></td>
                            </tr>
                                <?php
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                    <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#add">Ajouter une base de donnée<i class="fa fa-plus fa-2x"></i></button>
                    <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#rename">Renommer une base de donnée<i class="fa fa-pencil fa-2x"></i></button>
                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete">Supprimer une base de donnée<i class="fa fa-times fa-2x"></i></button>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- Modal -->
        <div id="rename" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Renommer : Base de donnée</h4>
                    </div>
                    <div class="modal-body">
                        <form action="myadmin.php" method="post">
                            <input type="hidden" name="function" value="rename_db" />
                            <label>Nom de la base à renommer :</label>
                            <input type="text" name="name">
                            <br>
                            <label>Nouveau nom :</label>
                            <input type="text" name="newname">
                            <hr>
                            <button type="submit" class="btn btn-info">Renommer !</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        <div id="delete" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Supprimer : Base de donnée</h4>
                    </div>
                    <div class="modal-body">
                        <p><i class="fa fa-exclamation-triangle"></i>Une fois supprimé, la base sera irrécuperable</p>
                        <form action="myadmin.php" method="post">
                            <input type="hidden" name="function" value="delete_db" />
                            <label>Nom de la base à supprimer :</label>
                            <input type="text" name="name">
                            <hr>
                            <button type="submit" class="btn btn-danger">Supprimer !</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        <div id="add" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Ajout : Base de données</h4>
                    </div>
                    <div class="modal-body">
                        <form action="myadmin.php" method="post">
                            <input type="hidden" name="function" value="add_db" />
                            <label>Nom de la nouvelle base :</label>
                            <input type="text" name="name">
                            <hr>
                            <button type="submit" class="btn btn-success">OK !</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="vue/myadmin/js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="vue/myadmin/js/bootstrap.min.js"></script>

</body>

</html>
