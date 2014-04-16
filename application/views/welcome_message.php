<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Template</title>
        <link href="<?php echo CSS; ?>bootstrap.css" rel="stylesheet">
        <link href="<?php echo CSS; ?>table.boot.css" rel="stylesheet">
</head>
<body>

<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="#">Brand</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="#">Link</a>
						</li>
						<li>
							<a href="#">Link</a>
						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">Action</a>
								</li>
								<li>
									<a href="#">Another action</a>
								</li>
								<li>
									<a href="#">Something else here</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">Separated link</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">One more separated link</a>
								</li>
							</ul>
						</li>
					</ul>
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control" />
						</div> <button type="submit" class="btn btn-default">Submit</button>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="#">Link</a>
						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">Action</a>
								</li>
								<li>
									<a href="#">Another action</a>
								</li>
								<li>
									<a href="#">Something else here</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">Separated link</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
				
			</nav>
			<div class="row clearfix">
				<div class="col-md-6 column">
					<form role="form">
						<div class="form-group">
							 <label for="exampleInputEmail1">Email address</label><input type="email" class="form-control" id="exampleInputEmail1" />
						</div>
						<div class="form-group">
							 <label for="exampleInputPassword1">Password</label><input type="password" class="form-control" id="exampleInputPassword1" />
						</div>
						<div class="form-group">
							 <label for="exampleInputFile">File input</label><input type="file" id="exampleInputFile" />
							<p class="help-block">
								Example block-level help text here.
							</p>
						</div>
						<div class="checkbox">
							 <label><input type="checkbox" /> Check me out</label>
						</div> <button type="submit" class="btn btn-default">Submit</button>
					</form>
				</div>
				<div class="col-md-6 column">
					<form role="form">
						<div class="form-group">
							 <label for="exampleInputEmail1">Email address</label><input type="email" class="form-control" id="exampleInputEmail1" />
						</div>
						<div class="form-group">
							 <label for="exampleInputPassword1">Password</label><input type="password" class="form-control" id="exampleInputPassword1" />
						</div>
						<div class="form-group">
							 <label for="exampleInputFile">File input</label><input type="file" id="exampleInputFile" />
							<p class="help-block">
								Example block-level help text here.
							</p>
						</div>
						<div class="checkbox">
							 <label><input type="checkbox" /> Check me out</label>
						</div> <button type="submit" class="btn btn-default">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
    
    
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="span12">
                    <div class="span12">
                        <div class="widget-box">
                            <div class="widget-title">
                                <h5><span class="glyphicon glyphicon-th-large"></span> Prodtos</h5>
                            </div>
                            <div class="widget-content nopadding">
                                <table class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Produto</th>
                                            <th>Fornecedor</th>
                                            <th>Tamanhos</th>
                                            <th>Cores</th>
                                            <th>Pedidos</th>
                                            <th>Confirmado</th>
                                            <th>Pendente</th>
                                        </tr>
                                    </thead>
                                    <tbody id="content-return">

                                        <tr>
                                            <td>27568</td>
                                            <td>Relógio mascúlino Estilo Casio EF 539</td>
                                            <td>Poucas Horas -  Relogio estilo Casio EF 539</td>
                                            <td></td>
                                            <td></td>              
                                            <td>1</td>
                                            <td></td>
                                            <td>1</td>
                                        </tr></tbody>
                                </table>
                            </div>
                        </div>
                    </div><!-- SPAW4 -->
                </div><!-- ROW -->
            </div><!-- ROW-FLUID -->
        </div><!-- CONTAINER FLUID -->
    </div>
    
    
<script type='text/javascript' src="<?php echo JS; ?>jquery.js"></script>
<script type='text/javascript' src="<?php echo JS; ?>bootstrap.js"></script>
</body>
</html>