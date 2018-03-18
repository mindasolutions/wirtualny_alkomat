<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Wirtualny Alkomat v 1.0</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://getbootstrap.com/docs/4.0/examples/offcanvas/offcanvas.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</head>
<body>

	<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Otwórz Alkomat</button>

	<!-- Modal -->
	  <div class="modal fade" id="myModal" role="dialog">
	    <div class="modal-dialog modal-lg">
	    
	      <!-- Modal content-->
	      <div class="modal-content">
	        <div class="modal-header">
	          <h4 class="modal-title">Wirtualny Alkomat v 1.0</h4>
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	        </div>
	        <div class="modal-body">
	          
	          <!-- początek kodu alkomatu -->
	          <div id="alko-form">
	          	<form onsubmit="event.preventDefault(); test();" id="formularz" class="form-horizontal form-bordered form-row-stripped">
	          		<div class="row">
	          		<div class="col-md-4 col-xs-12">
          				<div class="d-flex align-items-center p-3 my-3 text-white-50 rounded box-shadow" style="background-color: #e9ad0c;">
      				        <div class="lh-100">
      				          <h6 class="mb-0 text-white lh-100"><i class="lead far fa-user"></i> 1. O Tobie</h6>
      				        </div>
      				    </div>
	          			<div class="form-group row align-middle">
	          				<label class="col-md-3"><span class="align-middle">Płeć</span></label>
	          				<div class="col-md-9">
	          					<select id="sex" class="form-control">
	          						<option value="male">Mężczyzna</option>
	          						<option value="female">Kobieta</option>
	          					</select>					
	          				</div>
	          			</div>
	          			<div class="form-group row">
	          				<label class="align-middle col-md-3">Waga</label>
	          				<div class="col-md-9">
	          					<input type="text" class="form-control" id="weight" value="90" />				
	          				</div>
	          			</div>
	          			<div class="form-group row">
	          				<label class="align-middle col-md-3">Wzrost</label>
	          				<div class="col-md-9">
	          					<input type="text" class="form-control" id="height" value="190" />		
	          				</div>
	          			</div>
	          			
		          	</div>
		          	
	          		<div class="col-md-8">
	          			<div class="d-flex align-items-center p-3 my-3 text-white-50 rounded box-shadow" style="background-color: #e9ad0c;">
      				        <div class="lh-100">
      				          <h6 class="mb-0 text-white lh-100"><i class="lead fas fa-glass-martini"></i> 2. O Alkoholu</h6>
      				        </div>
      				    </div>
		          		<div class="form-group row align-middle">
		          			<div class="col-md-12 row">
		          				<span class="col-md-2">
		          					Wypiłem
		          				</span> 
		          				<span class="col-md-2">
		          					<input type="text" id="alcohol_count_1" class="form-control">
		          				</span>
		          				<span class="col-md-3">
			          				<select id="alcohol_type_1" class="form-control">
			          					<option value="1">ml</option>
			          				</select>
			          			</span>
		          				<span class="col-md-2">
		          					wódki
		          				</span> 
		          				<span class="col-md-2">
			          				<input type="text" id="alcohol_percent_1" class="form-control" value="40">
			          			</span>
		          				<span class="col-md-1">
			          				%
			          			</span>
		          			</div>
		          		</div>
		          		<div class="form-group row">
		          			<div class="col-md-12 row">
		          				<span class="col-md-2">
		          					Wypiłem
		          				</span> 
		          				<span class="col-md-2">
		          					<input type="text" id="alcohol_count_2" class="form-control">
		          				</span>
		          				<span class="col-md-3">
			          				<select id="alcohol_type_2" class="form-control">
			          					<option value="1">ml</option>
			          				</select>
			          			</span>
		          				<span class="col-md-2">
		          					wina
		          				</span> 
		          				<span class="col-md-2">
			          				<input type="text" id="alcohol_percent_2" class="form-control" value="11">
			          			</span>
		          				<span class="col-md-1">
			          				%
			          			</span>
		          			</div>
		          		</div>
		          		<div class="form-group row">
		          			<div class="col-md-12 row">
		          				<span class="col-md-2">
		          					Wypiłem
		          				</span> 
		          				<span class="col-md-2">
		          					<input type="text" id="alcohol_count_3" class="form-control">
		          				</span>
		          				<span class="col-md-3">
			          				<select id="alcohol_type_3" class="form-control">
			          					<option value="1">ml</option>
			          				</select>
			          			</span>
		          				<span class="col-md-2">
		          					piwa
		          				</span> 
		          				<span class="col-md-2">
			          				<input type="text" id="alcohol_percent_3" class="form-control" value="5.6">
			          			</span>
		          				<span class="col-md-1">
			          				%
			          			</span>
		          			</div>
		          		</div>
		          		<div class="form-group row">
		          			<div class="col-md-12 row">
		          				<span class="col-md-2">
		          					Wypiłem
		          				</span> 
		          				<span class="col-md-2">
		          					<input type="text" id="alcohol_count_4" class="form-control">
		          				</span>
		          				<span class="col-md-3">
			          				<select id="alcohol_type_4" class="form-control">
			          					<option value="1">ml</option>
			          				</select>
			          			</span>
		          				<span class="col-md-2">
		          					trunku
		          				</span> 
		          				<span class="col-md-2">
			          				<input type="text" id="alcohol_percent_4" class="form-control" value="20">
			          			</span>
		          				<span class="col-md-1">
			          				%
			          			</span>
		          			</div>
		          		</div>
		          	</div>
		          	<div class="col-md-12">
	          			<div class="d-flex align-items-center p-3 my-3 text-white-50 rounded box-shadow" style="background-color: #e9ad0c;">
      				        <div class="lh-100">
      				          <h6 class="mb-0 text-white lh-100"><i class="lead fas fa-percent"></i> 3. O Piciu</h6>
      				        </div>
      				    </div>
      				    <div class="form-group row">
      				    	<label class="align-middle col-md-4">Picie rozpocząłem o godzinie</label>
      				    	<div class="col-md-8">
      				    		<select id="date_start" class="form-control">
      				    			<?php for($i = 0; $i <= 23; $i++): ?>
      				    				<?php ($i < 10 ) ? $temp_hour = "0".$i : $temp_hour = $i; ?>
      				    				<option value="<?php echo $temp_hour; ?>" <?php if($i == 20) echo "selected"; ?>><?php echo $temp_hour; ?>:00</option>
      				    			<?php endfor; ?>
      				    		</select>
      				    	</div>
      				    </div>

      				    <div class="form-group row">
      				    	<label class="align-middle col-md-4">Od rozpoczęcia do zakończenia picia upłynęło</label>
      				    	<div class="col-md-6">
      				    		<select id="time_end" class="form-control">
      				    			<?php for($i = 0; $i <= 99; $i++): ?>
      				    				<option value="<?php echo $i; ?>" <?php if($i == 1) echo "selected"; ?>><?php echo $i; ?></option>
      				    			<?php endfor; ?>
      				    		</select>
      				    	</div>
      				    	<div class="col-md-2">
      				    		godzin
      				    	</div>
      				    </div>
      				    <div class="form-group row">
      				    	<label class="align-middle col-md-4">Piłem na</label>
      				    	<div class="col-md-6">
      				    		<select id="alcohol_type_4" class="form-control">
  				    				<option value="1">pusty</option>
  				    				<option value="1" selected>w połowie pełny</option>
  				    				<option value="1">pełny</option>
      				    		</select>
      				    	</div>
      				    	<div class="col-md-2">
      				    		żołądek
      				    	</div>
      				    </div>

	              		<div class="form-group row">
	    	          		<input type="button" id="calculate" value="Oblicz" class="form-control bg-success col-md-6 text-white" onclick="test()">
	    	          		<input type="button" id="calculate2" value="Wyczyść" class="form-control bg-info col-md-6 text-white" onclick="this.form.reset()">
	              		</div>
		          	</div>
		          </div>

	          	

	          	</form>
	          </div>
	          <div id="alko-result"  style="display: none;">
	          					<div class="row">
	          			          	<div class="col-md-4">
	          		          			<div class="d-flex align-items-center p-3 my-3 text-white-50 rounded box-shadow" style="background-color: #e9ad0c;">
	          	      				        <div class="lh-100">
	          	      				          <h6 class="mb-0 text-white lh-100"><i class="lead fas fa-percent"></i> Promile</h6>
	          	      				        </div>
	          	      				    </div>
	          	      				    <div class="form-group row">
	          	      				    	<div class="col-md-8">
	          	      				    		<span id="result"></span>&permil;<br />
	          	      				    	</div>
	          	      				    </div>
	          	      				</div>

	          	      				<div class="col-md-4">
	          		          			<div class="d-flex align-items-center p-3 my-3 text-white-50 rounded box-shadow" style="background-color: #e9ad0c;">
	          	      				        <div class="lh-100">
	          	      				          <h6 class="mb-0 text-white lh-100"><i class="lead fas fa-flask"></i> Ilość czystego alkoholu</h6>
	          	      				        </div>
	          	      				    </div>
	          	      				    <div class="form-group row">
	          	      				    	<div class="col-md-8">
	          	      				    		<span id="wypity_alkohol"></span> ml
	          	      				    	</div>
	          	      				    </div>
	          	      				</div>

	          	      				<div class="col-md-4">
	          		          			<div class="d-flex align-items-center p-3 my-3 text-white-50 rounded box-shadow" style="background-color: #e9ad0c;">
	          	      				        <div class="lh-100">
	          	      				          <h6 class="mb-0 text-white lh-100"><i class="lead fab fa-medrt"></i> Dawka śmiertelna</h6>
	          	      				        </div>
	          	      				    </div>
	          	      				    <div class="form-group row">
	          	      				    	<div class="col-md-8">
	          	      				    		<span id="dawka_smiertelna"></span> ml
	          	      				    	</div>
	          	      				    </div>
	          	      				</div>
	          	      			</div>
	          	      			<div class="row">
  				      				<div class="col-md-12">
  					          			<div class="d-flex align-items-center p-3 my-3 text-white-50 rounded box-shadow" style="background-color: #e9ad0c;">
  				      				        <div class="lh-100">
  				      				          <h6 class="mb-0 text-white lh-100"><i class="lead far fa-clock"></i> Wykaz godzinowy spożycia</h6>
  				      				        </div>
  				      				    </div>
  				      				    <div class="form-group row">
  				      				    	<div class="col-md-12">
  				      				    		<div id="rozklad_alko" class="table-responsive"></div>
  				      				    	</div>
  				      				    </div>
  				      				</div>
	          	      			</div>

	          			          
	        

          		<input type="button" id="calculate" value="Powrót" class="form-control bg-success text-white" onclick="back()">

	          </div>
	          <!-- koniec kodu automatu -->
	          <div class="modal-footer">
	          		<small>Działanie Wirtualnego Alkomatu  oparte jest na algorytmie matematycznym. Wskazane wartości stężenia alkoholu we krwi mogą różnić się od rzeczywistych, na przykład ze względu na przyjmowanie leków czy stan psychiczny, których Alkomat Wirtualny nie bierze pod uwagę. Wówczas uzyskany wynik może być zbyt wysoki lub za niski. Autorzy tej strony nie biorą odpowiedzialności za żadne wypadki, zniszczenia ani szkody wynikające z zastosowania Alkomatu . Otrzymany wynik ani jego przybliżone wartości nie mogą być podstawą do ocenienia rzeczywistej zawartości alkoholu we krwi, a co za tym idzie na przykład do uczestniczenia w ruchu drogowym. Każdemu, kto pił alkohol radzimy zrezygnować z kierowania jakimkolwiek pojazdem. Przypominamy, że zgodnie z polskim prawem prowadzenie pojazdu pod wpływem alkoholu jest zabronione i grozi karą pozbawienia wolności oraz utratą prawa jazdy.</small>
	            </div>

	        </div>
	        
	      </div>
	      
	    </div>
	  </div>

	<script type="text/javascript" src="script.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>