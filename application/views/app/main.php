<!DOCTYPE html>
<html lang="pt-br">
    <head>
    	<meta charset="utf-8">
    	<title>Main</title>
    	
    	<meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1, user-scalable=no">
    	
    	<script src="<?php echo base_url();?>lib/jquery/jquery-2.1.1.min.js"></script>
    	
    	<style>
    	   @import url(http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800);
    	</style>
    	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    	
    	<script src="<?php echo base_url();?>js/prontoapp.js"></script>
    	<link rel="stylesheet/less" type="text/css" href="<?php echo base_url();?>lib/bootstrap-3.2.0/less/bootstrap.less" />
    	<script src="<?php echo base_url();?>lib/bootstrap-3.2.0/dist/js/bootstrap.min.js"></script>
    	
    	
    	<script src="<?php echo base_url();?>lib/less/less-1.7.5.min.js"></script>
    </head>
    <body class="main">
        
        <div id="appContainer">
            <nav>
            
                <ul>
                    <li class="header">Minha Timeline</li>
                    <li>
                        <a href="#">
                            <i class="fa fa-list-ul"></i>Todos
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-clipboard"></i>Boletins
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-folder-open"></i>Exames
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-file-text"></i>Atestados
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-file-text-o"></i>Receitas
                        </a>
                    </li>
                    
                    <li class="header">Médicos</li>
                    <li>
                        <a href="#">
                            <i class="fa fa-user-md"></i>Todos
                        </a>
                        <a href="#">
                            <i class="fa fa-user-md"></i>Últimos
                        </a>
                        <a href="#">
                            <i class="fa fa-user-md"></i>Com acesso liberado
                        </a>
                    </li>
                </ul>
            </nav>         
            <div id="appMainContent" class="container-fluid">
                <header class="col-md-12">
                   	<div class="navbar navbar-inverse navbar-fixed-top">
						<div class="container-fluid">
							<button type="button" id="btnShowMenu" class="btn"><i class="fa fa-bars"></i></button>
							<!--
							<ul class="nav navbar-nav navbar-right">
								<li>
									<a href="#">
									   <span class="glyphicon glyphicon-bell"></span>
									   <span class="badge pull-right badge-warning">12</span>
									</a>
								</li>
							</ul>
							-->
						</div>
					</div>
                </header>
                
                <div id="userHeader" class="row">
                    
                    <img class="userheader-profilepic img-circle pull-left" src="<?php echo base_url('img/user-140.jpg');?>" />
                    <div class="col-xs-9 col-sm-5 col-md-4">
                        <h3>Marcia Fernandes (AB+)</h3>
                        <p>25 Anos, Feminino</p>
                        <div class="hidden-xxs">
                            <p><span class="glyphicon glyphicon-map-marker"></span>Av. Dom Luis, 500 - Fortaleza - CE</p>
                            <p><span class="glyphicon glyphicon-earphone"></span>85 8765-4320 / 85 9876-5432</p>
                            <p><span class="glyphicon glyphicon-envelope"></span>marciafernandes@email.com.br</p>
                        </div>
                    </div>
                    <div class="col-sm-5 col-md-4 hidden-xs hidden-sm">
                        <p>Altura: 1,75 M - Peso: 73 Kg</p>
                        <p>
                            <h5>Alergias: </h5>
                            Lorem Ipsum is simply dummy text of the printing
                            and typesetting industry...
                        </p>
                        <p>
                            <h5>Doenças crônicas: </h5>
                            Lorem Ipsum is simply dummy text of the printing
                            and typesetting industry...
                        </p>
                    </div>
                    
                    <div class="clearfix"></div>
                    <div class="recent hidden-xxs">
                        <div class="col-sm-6 col-md-6">
                            <h5>Últimos médicos</h5>
                            <img class="img-circle" src="<?php echo base_url('img/med1-140.jpg');?>" />
                            <img class="img-circle" src="<?php echo base_url('img/med2-140.jpg');?>" />
                            <img class="img-circle" src="<?php echo base_url('img/med3-140.jpg');?>" />
                            <button type="button" class="btn btn-primary pull-right">Ver todos</button>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <h5>Com acesso liberado</h5>
                            <img class="img-circle" src="<?php echo base_url('img/med1-140.jpg');?>" />
                            <img class="img-circle" src="<?php echo base_url('img/med2-140.jpg');?>" />
                            <img class="img-circle" src="<?php echo base_url('img/med3-140.jpg');?>" />
                            <button type="button" class="btn btn-primary pull-right">Ver todos</button>
                        </div>
                    </div>
                    
                </div>
                
                
                
                <div id="appContent">
                    <ul id="appMainTab" class="nav nav-tabs">
                        <li class="active">
                            <a href="#todos" role="tab" data-toggle="tab">
                                <i class="fa fa-list-ul visible-xxs"></i>
                                <span class="hidden-xxs">Todos</span>
                            </a>
                        </li>
                        <li class="tab-boletim">
                            <a href="#boletins" role="tab" data-toggle="tab">
                                <i class="fa fa-clipboard visible-xxs"></i>
                                <span class="hidden-xxs">Boletins</span>
                            </a>
                        </li>
                        <li>
                            <a href="#exames" role="tab" data-toggle="tab">
                                <i class="fa fa-folder-open visible-xxs"></i>
                                <span class="hidden-xxs">Exames</span>
                            </a>
                        </li>
                        <li>
                            <a href="#atestados" role="tab" data-toggle="tab">
                                <i class="fa fa-file-text visible-xxs"></i>
                                <span class="hidden-xxs">Atestados</span>
                            </a>
                        </li>
                        <li>
                            <a href="#receitas" role="tab" data-toggle="tab">
                                <i class="fa fa-file-text-o visible-xxs"></i>
                                <span class="hidden-xxs">Receitas</span>
                            </a>
                        </li>
                    </ul>
                    
                    <div class="tab-content">
                        <div class="tab-pane active" id="todos">
                            <div class="timeline">
                                <div class="timeline-item-date">30 Set 2014</div>
                                <div class="timeline-item">
                                    <div class="timeline-item-info boletim-color"><span class="glyphicon glyphicon-cloud"></span></div>
                                    <div class="timeline-item-body panel">
                                        <div class="timeline-item-header">
                                            <img class="img-circle" src="<?php echo base_url('img/med1-50.jpg');?>" />
                                            <h4 class="timeline-item-header-title">Concentração de hemoglobina corpuscular média</h4>
                                            <span class="timeline-item-header-by">Alfredo Gurgel,</span>
                                            <span class="timeline-item-header-time"><span class="glyphicon glyphicon-time"></span> 12:45</span>
                                        </div>
                                        <div class="timeline-item-description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non 
                                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </div>
                                    
                                    </div>
                                </div>
                                
                                <div class="timeline-item">
                                    <div class="timeline-item-info exame-color"><span class="glyphicon glyphicon-cloud"></span></div>
                                    <div class="timeline-item-body panel">
                                        <div class="timeline-item-header">
                                            <img class="img-circle" src="<?php echo base_url('img/med1-50.jpg');?>" />
                                            asdas dasd asdad
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="timeline-item">
                                    <div class="timeline-item-info atestado-color"><span class="glyphicon glyphicon-cloud"></span></div>
                                    <div class="timeline-item-body panel">
                                        <div class="timeline-item-header">
                                            <img class="img-circle" src="<?php echo base_url('img/med1-50.jpg');?>" />
                                            asdas dasd asdad
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                      <div class="tab-pane" id="boletins">...</div>
                      <div class="tab-pane" id="exames">...</div>
                      <div class="tab-pane" id="atestados">...</div>
                      <div class="tab-pane" id="receitas">...</div>
                    </div>
                </div>
                
                
            </div>
        </div>    
    
    
        <div id="appOverlay"></div>
    
    </body>
</html>