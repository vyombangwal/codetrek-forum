<html>
<head>
	<title>forum</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


	</head>
	<body>
		<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">CodeTrek Forum</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
       aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a href="index.html" class="nav-link">Questions</a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
             aria-expanded="false">
              <i class="fa fa-cog"></i>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <div class="dropdown-item disabled">vyom</div>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">1</a>
              <a class="dropdown-item" href="#>">2</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Sign out</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav><br><br><br>
<div class="container">
	<div class="row">
		<div class=" col-xs-1 " style="float:left;">
			<h2 style="font-family:Times; margin-top: 0;margin-left:10px;">Ask Question</h2>
		</div>
        <div class="col-xs-4	 col-xs-offset-5" style="margin-left: 33em;">
    		
            <div id="custom-search-input">
                <div class="input-group col-xs-7 col-xs-offset-4">
                    <input type="text" class="form-control input-md" style="" placeholder="Search your question" />
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" style="height:1.9em;" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
            </div>
        </div>
        <button class="btn btn-primary"  style="height:2.4em;margin-left:2em; background-color:white;color:blue;border: solid blue 1px;" type="button">Ask question</button></div>
	</div>
  <div class="container">
<br>
<div class=" border" style="width: 100%;">
  <div class="card-body" style="margin:2em;">
    <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Title<span style="color: red;">*</span></label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter a short and proper title title for your question">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description<span style="color: red;">*</span></label>
    <textarea class="form-control" id="exampleFormControlTextarea1" style="resize:none;" rows="10" placeholder="Enter a detailed desciption of what problems you'r facing and steps to replicate"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Add Tags</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="tag1,tag2,tag3">
    <small id="emailHelp" class="form-text text-muted">tags will help others to find your question faster</small>
  </div>
   <button type="submit" class="btn btn-primary">Post your question</button>
</form>
    </div>
</div><br><br>
</div>
  <footer> 
  <div class="container-fluid"> 
    <center> 
      <p style="background-color:rgb(250,250,250);color:blue;bottom:0; "><i class="fa fa-code" aria-hidden="true"></i>Developed at Code Trek</p> 
    </center> 
  </div> 
</footer>
	</body>
</html>