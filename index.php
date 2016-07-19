<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>BOOTSTRAP</title>
	

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="vendor/autoload.php">
	<link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<nav class="navbar navbar-default navbar-app navbar-fixed-top ">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#" src="https://pixabay.com/static/uploads/photo/2015/04/10/08/17/lion-715852_960_720.png">LOGO</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
		        <li><a href="#">Link</a></li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="#">Action</a></li>
		            <li><a href="#">Another action</a></li>
		            <li><a href="#">Something else here</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="#">Separated link</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="#">One more separated link</a></li>
		          </ul>
		        </li>
		         <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">DropdownTest <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="#">Action</a></li>
		            <li><a href="#">Another action</a></li>
		            <li><a href="#">Something else here</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="#">Separated link</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="#">One more separated link</a></li>
		          </ul>
		        </li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
	</nav>
	<div class="container-fluid">
	<ol class="breadcrumb">
 	 	<li><a href="#">Home</a></li>
  		<li><a href="#">Library</a></li>
  		<li class="active">Data</li>
	</ol>
<div class="jumbotron page-header">
  <h1>HELLO WORLD<small> Coucou !</small></h1>
  <p>Lorem ipsum dolor. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo culpa, maiores veritatis minima sequi earum. Ad perspiciatis molestias, illum saepe nihil quo nam dignissimos ducimus similique consequatur veniam facilis iure! Reprehenderit ullam perferendis esse deserunt vel ea alias, officia earum, natus, aspernatur porro. Maiores assumenda distinctio, accusantium laudantium voluptate explicabo aliquid molestias commodi sit necessitatibus ipsam perspiciatis ratione! Labore, error fugiat! Quisquam nesciunt veniam adipisci labore iure expedita nihil odit minima consequatur voluptatem non vero dolore omnis nemo quis quasi quas facere, unde dolorum consectetur, culpa tempore eaque. Inventore itaque totam fugiat fuga ut possimus modi quo fugit corrupti rerum esse, quas quisquam odio iste ipsum molestiae distinctio eveniet qui aut nemo, repellat? Dolor odit voluptates asperiores vel deleniti aperiam quibusdam, nostrum aliquam aspernatur inventore. Tempore fuga odio in, tempora eligendi, aut sint quibusdam harum nam velit iste nemo. Officia quidem assumenda ea, necessitatibus! Consequuntur vero, culpa alias pariatur enim! </p>
  <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
</div>
	
	<div class="container-fluid" style="background:#89C4F4">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6 box text-center">
					<img class="img-responsive" data-src="holder.js/200x200?random=yes"/>1
				</div>
				<div class="col-md-3 col-sm-6 box text-center">
					<img class="img-responsive" data-src="holder.js/200x200?random=yes"/>2
				</div>
				<div class="col-md-3 col-sm-6 box text-center">
					<img class="img-responsive" data-src="holder.js/200x200?random=yes"/>3
				</div>
				<div class="col-md-3 col-sm-6 box text-center">
					<img class="img-responsive" data-src="holder.js/200x200?random=yes"/>4
				</div>
			</div>	
		</div>
	</div>
	<div class="container-fluid" style="background:silver">
		<div class="container">
			<div class="row">	
				<div class="col-md-3 col-md-offset-1 col-sm-6 box col-xs-12 text-center">
					<img class="img-responsive" data-src="holder.js/200x200?random=yes"/>5
				</div>
				<div class="col-md-3 col-md-offset-1 col-sm-6 box col-xs-12 text-center">
					<img class="img-responsive" data-src="holder.js/200x200?random=yes"/>6
				</div>
				<div class="col-md-3 col-md-offset-1 col-sm-6 box col-xs-12 text-center">
					<img class="img-responsive" data-src="holder.js/200x200?random=yes"/>7
				</div>	
			</div>
		</div>
	</div>
	<form class="container">
		<h2>FORMULAIRE</h2>
		<div class="form-group">
			<label for="nom">Nom</label>
			<input class="form-control" type="texte" id="nom"/>
		</div>
		
		<div class="has-success">
  		<div class="checkbox">
    		<label>
      			<input type="checkbox" id="checkboxSuccess" value="option1">
      				Se souvenir de moi
    			</label>
  			</div>
		</div>
		<button type="button" class="btn btn-succes">Envoyé</button>
	</form>
	
	
		<table class="table table-striped table-hover table-bordered table-responsive">
			<thead>
				<tr>
					<th>ID</th>
					<th>NOM</th>
					<th>PRENOM</th>
				</tr>
			</thead>
			<tr>
				<td>1150</td>
				<td>Desrame</td>
				<td>Thibaut</td>
			</tr>
			<tr>
				<td>17</td>
				<td>Doe</td>
				<td>John</td>
			</tr>
			<tr>
				<td>87874</td>
				<td>Taz</td>
				<td>Manie</td>
			</tr>
			<tr>
				<td>757</td>
				<td>Aze</td>
				<td>Yuer</td>
			</tr>
			<tr>
				<td>981</td>
				<td>Terieur</td>
				<td>Alain</td>
			</tr>
		</table>
	
	<div class="progress">
  	<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
   		<span class="sr-only">80% Complete (danger)</span>
  	</div>
	</div>
	<!-- FENETRE MODALE !! -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@coucou">Modal</button>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">New message</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="control-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>

<div class="row">
	<div class="col-10-md col-md-offset-1">
		<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="left" title="Tooltip on left">Tooltip on left</button>

		<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Tooltip on top</button>

		<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</button>

		<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="right" title="Tooltip on right">Tooltip on right</button>
	</div>
</div>
	<div class="container">
		
			<h2>Carousel</h2>
			<div class="col-4-md">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		    <div class="item active">
		      <img src="http://img0.mxstatic.com/wallpapers/44e535006cffbc1b6e41f72d5e9df1e4_large.jpeg" alt="ete">
		      <div class="carousel-caption">
		        Eté
		      </div>
		    </div>
		    <div class="item">
		      <img src="http://www.photo-paysage.com/albums/userpics/10001/Jour_d_automne_sous_la_pluie_-02~0.jpg" alt="automne">
		      <div class="carousel-caption">
		        Automne
		      </div>
		    </div>
		   
		  </div>

		  <!-- Controls -->
		  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
		</div>
	</div>
</div>
	<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="http://imsky.github.com/holder/holder.js"></script>
	<script src="script.js"></script>
</body>
</html>