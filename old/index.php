<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <link href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css">
  <link href="css/profile.css" rel="stylesheet" type="text/css">
  
  <!-- datetimepicker css -->
  <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="css/datetimepicker.css" rel="stylesheet" media="screen">
    
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span> 
        </button>
        <a class="navbar-brand" href="#">Sanitapp</a>      
        <a class="brand" href="#">
            <img src="images/logo.jpg" alt="" style="width: 50px;height: 50px">
        </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Page 1</a></li>
        <li><a href="#">Page 2</a></li> 
        <li><a href="#">Page 3</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
  <div class="row profile">
    <div class="col-md-3">
      <div class="profile-sidebar">
	<div class="profile-userpic">
	  <img src="https://en.opensuse.org/images/0/0b/Icon-user.png" class="img-responsive" alt="">
	</div>
	<div class="profile-usertitle">
	  <div class="profile-usertitle-name">
		  Mario Rossi
	  </div>
	  <div class="profile-usertitle-job">
		  Medico curante
	  </div>
	</div>
	<div class="profile-userbuttons">
	  <button type="button" class="btn btn-success btn-sm">Follow</button>
	  <button type="button" class="btn btn-danger btn-sm">Message</button>
	</div>
	<div class="profile-usermenu">
	  <ul class="nav">
		  <li class="active">
			  <a href="#">
			  <i class="glyphicon glyphicon-home"></i>
			  Overview </a>
		  </li>
		  <li>
			  <a href="#">
			  <i class="glyphicon glyphicon-user"></i>
			  Account Settings </a>
		  </li>
		  <li>
			  <a href="#" target="_blank">
			  <i class="glyphicon glyphicon-ok"></i>
			  Tasks </a>
		  </li>
		  <li>
			  <a href="#">
			  <i class="glyphicon glyphicon-flag"></i>
			  Help </a>
		  </li>
	  </ul>
	</div>
      </div>
    </div>
  <div class="col-md-7">
    <div class="profile-content">	  
	    <!-- <div class="row">
		<div class='col-sm-6'>
		    <div class="form-group">
			<div class='input-group date' id='datetimepicker1'>
			    <form action="action_page.php">
			    Data:
			    <input type="date" name="bday">
			    <input type="submit" title="cerca">
			  </form>
			</div>
		    </div>
		</div> -->
      <form action="" class="form-horizontal">
	<fieldset>
	  <legend>Data prenotazione</legend>
	  <div class="control-group">
	    <label class="control-label">Inserisci data</label>
	    <div class="controls input-append date form_datetime" data-date="1979-09-16T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
	      <input size="26" type="text" value="" readonly>
	      <span class="add-on"><i class="icon-remove"></i></span>
	      <span class="add-on"><i class="icon-th"></i></span>
	    </div>
	    <input type="hidden" id="dtp_input1" value="" /><br/>
	  </div>
	</fieldset>
      </form>
      <div class="row">
	<div class="col-md-8">
	  <h2>Prenotazioni</h2>
	  <div class="table-responsive">          
	    <table class="table">
	      <thead>
		<tr>
		  <th>#</th>
		  <th>Nome</th>
		  <th>Cognome</th>
		  <th>Et&agrave;</th>
		  <th>Citt&agrave;</th>
		</tr>
	      </thead>
	      <tbody>
		<tr>
		  <td>1</td>
		  <td>Mario</td>
		  <td>Rossi</td>
		  <td>35</td>
		  <td>Salerno</td>
		</tr>
	      </tbody>
	    </table>
	  </div>
	</div>
      </div>                          
    </div>
  </div>
</div>  
<script type="text/javascript" src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		forceParse: 0,
        showMeridian: 1
    });
	$('.form_date').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
    });
	$('.form_time').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 1,
		minView: 0,
		maxView: 1,
		forceParse: 0
    });
</script>
</body>
</html>
