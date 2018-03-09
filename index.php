<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Wirtualny Alkomat v 1.0</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://getbootstrap.com/docs/4.0/examples/offcanvas/offcanvas.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
</head>
<body>

	<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

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
	          	<form onsubmit="event.preventDefault(); test();" id="formularz">
	          		<div class="row">
	          		<div class="col-md-4 col-xs-12">
          				<div class="d-flex align-items-center p-3 my-3 text-white-50 rounded box-shadow" style="background-color: #e9ad0c;">
      				        <img class="mr-3" src="https://getbootstrap.com/assets/brand/bootstrap-outline.svg" alt="" width="48" height="48">
      				        <div class="lh-100">
      				          <h6 class="mb-0 text-white lh-100">1. O Tobie</h6>
      				        </div>
      				    </div>
	          			<div class="form-group row">
	          				<label class="control-label col-md-12">Płeć</label>
	          				<div class="col-md-12">
	          					<select id="sex" class="form-control">
	          						<option value="male">Mężczyzna</option>
	          						<option value="female">Kobieta</option>
	          					</select>					
	          				</div>
	          			</div>
	          			<div class="form-group row">
	          				<label class="control-label col-md-12">Waga</label>
	          				<div class="col-md-12">
	          					<input type="text" class="form-control" id="weight" value="90" />				
	          				</div>
	          			</div>
	          			<div class="form-group row">
	          				<label class="control-label col-md-12">Wzrost</label>
	          				<div class="col-md-12">
	          					<input type="text" class="form-control" id="height" value="190" />		
	          				</div>
	          			</div>
	          			<div class="form-group row">
	          				<label class="control-label col-md-12">Picie rozpocząłem o godzinie</label>
	          				<div class="col-md-12">
	          					<select id="alcohol_type_4" class="form-control">
	          						<?php for($i = 0; $i <= 23; $i++): ?>
	          							<?php ($i < 10 ) ? $temp_hour = "0".$i : $temp_hour = $i; ?>
	          							<option value="<?php echo $temp_hour; ?>" <?php if($i == 20) echo "selected"; ?>><?php echo $temp_hour; ?>:00</option>
	          						<?php endfor; ?>
	          					</select>
	          				</div>
	          			</div>

	          			<div class="form-group row">
	          				<label class="control-label col-md-12">Od rozpoczęcia do zakończenia picia upłynęło</label>
	          				<div class="col-md-12">
	          					<select id="time_end" class="form-control">
	          						<?php for($i = 0; $i <= 99; $i++): ?>
	          							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
	          						<?php endfor; ?>
	          					</select>
	          					godzin
	          				</div>
	          			</div>
		          	</div>
		          	
	          		<div class="col-md-8">
	          			<div class="d-flex align-items-center p-3 my-3 text-white-50 rounded box-shadow" style="background-color: #e9ad0c;">
      				        <img class="mr-3" src="https://getbootstrap.com/assets/brand/bootstrap-outline.svg" alt="" width="48" height="48">
      				        <div class="lh-100">
      				          <h6 class="mb-0 text-white lh-100">2. O Alkoholu</h6>
      				        </div>
      				    </div>
		          		<div class="form-group row">
		          			<label class="control-label col-md-12">Wypiłem</label>
		          			<div class="col-md-12 row">
		          				<span class="col-md-3">
		          					<input type="text" id="alcohol_count_1" class="form-control" value="500">
		          				</span>
		          				<span class="col-md-3">
			          				<select id="alcohol_type_1" class="form-control">
			          					<option value="1">ml</option>
			          				</select>
			          			</span>
		          				<span class="col-md-2">
		          					wódki
		          				</span> 
		          				<span class="col-md-3">
			          				<input type="text" id="alcohol_percent_1" class="form-control" value="40">
			          			</span>
		          				<span class="col-md-1">
			          				% alk.
			          			</span>
		          			</div>
		          		</div>
		          		<div class="form-group row">
		          			<label class="control-label col-md-12">Wypiłem</label>
		          			<div class="col-md-12 row">
		          				<span class="col-md-3">
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
		          				<span class="col-md-3">
			          				<input type="text" id="alcohol_percent_2" class="form-control" value="11">
			          			</span>
		          				<span class="col-md-1">
			          				% alk.
			          			</span>
		          			</div>
		          		</div>
		          		<div class="form-group row">
		          			<label class="control-label col-md-12">Wypiłem</label>
		          			<div class="col-md-12 row">
		          				<span class="col-md-3">
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
		          				<span class="col-md-3">
			          				<input type="text" id="alcohol_percent_3" class="form-control" value="5.6">
			          			</span>
		          				<span class="col-md-1">
			          				% alk.
			          			</span>
		          			</div>
		          		</div>
		          		<div class="form-group row">
		          			<label class="control-label col-md-12">Wypiłem</label>
		          			<div class="col-md-12 row">
		          				<span class="col-md-3">
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
		          				<span class="col-md-3">
			          				<input type="text" id="alcohol_percent_4" class="form-control" value="20">
			          			</span>
		          				<span class="col-md-1">
			          				% alk.
			          			</span>
		          			</div>
		          		</div>
		          		<div class="form-group row">
			          		<input type="button" id="calculate" value="Działaj" class="form-control bg-success" onclick="test()">
			          		<input type="button" id="calculate2" value="Wyczyść" class="form-control bg-info" onclick="this.form.reset()">
		          		</div>
		          	</div>
		          </div>

	          	

	          	</form>
	          </div>
	          <div id="alko-result"  style="display: none;">
	          	Promile: <br />
	          	<span id="result"></span>&permil;<br />
	          	<hr>
	          	Pijąc przez 1 godzinę, wypiłeś <span id="wypity_alkohol"></span>&permil; ml czystego alkoholu!<br/>
	          	<hr>
	          	Teoretycznie dawka śmiertelna dla Ciebie to <span id="dawka_smiertelna"></span> ml czystego etanolu (alkoholu 100%) wypite "na raz", czyli na przykład:

	          	asd <div id="rozklad_alko"></div>

          		<input type="button" id="calculate" value="Działaj" class="form-control bg-success" onclick="back()">
	          	<button onclick="back()" class="bg-info">Od nowa</button>

	          </div>
	          <!-- koniec kodu automatu -->


	        </div>
	        <div class="modal-footer">
	          <button type="button" class="btn btn-default" data-dismiss="modal">Zamknij</button>
	        </div>
	      </div>
	      
	    </div>
	  </div>

	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>