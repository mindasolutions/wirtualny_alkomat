function test(){
	$("#myModal #alko-result").show("slow");
	$("#myModal #alko-form").hide("slow");
	plec = $('#myModal #sex').val();
	waga = $("#myModal #weight").val();
	wzrost = $("#myModal #height").val();
	wzrost = $("#myModal #height").val();
	od_zakonczenia = $("#myModal #time_end").val();
	alcohol_1 = [$("#myModal #alcohol_count_1").val(), $("#myModal #alcohol_type_1").val(), $("#myModal #alcohol_percent_1").val()];
	alcohol_2 = [$("#myModal #alcohol_count_2").val(), $("#myModal #alcohol_type_2").val(), $("#myModal #alcohol_percent_2").val()];
	alcohol_3 = [$("#myModal #alcohol_count_3").val(), $("#myModal #alcohol_type_3").val(), $("#myModal #alcohol_percent_3").val()];
	alcohol_4 = [$("#myModal #alcohol_count_4").val(), $("#myModal #alcohol_type_4").val(), $("#myModal #alcohol_percent_4").val()];
	date_start = $("#myModal #date_start").val();
	time_end = $("#myModal #time_end").val();
	date_all = date_start+":00";
	date_start = 0;
	date_end = 0;
	wypite = alcohol(alcohol_1[0], alcohol_1[2])+alcohol(alcohol_2[0], alcohol_2[2])+alcohol(alcohol_3[0], alcohol_3[2])+alcohol(alcohol_4[0], alcohol_4[2]);
	insert_table = "";

	color_alert = "9b1717";
	color_warning = "9c7011";
	color_watchout = "e8d60d";
	color_good = "77c659";
	color_zero = "37c200";


	$("#myModal #wypity_alkohol").html('').append(wypite);
	$("#myModal #dawka_smiertelna").html('').append(dawka_smiertelna(waga));
	$("#myModal #result").html('').append(licz(plec,waga,wzrost,alcohol_1,alcohol_2,alcohol_3,alcohol_4).toFixed(2));
	promile = wypite;
	$("#myModal #rozklad_alko").html('');
	y = 0;
			promile_wchlanianie = 0; // zerujemy licznik wchlaniania promili
			gramy = wypite/(time_end*60)*30; // ile gram wchlania sie co 30 min
			
			for(var i = 10; i <= 200; i=i+5){
				//$("#myModal #rozklad_alko").append("<p>Po "+i/10+" godzinie od przestania picia stężenie alkoholu we krwi będzie wynosiło "+(promile/weight(plec,waga)).toFixed(2)+" &permil;</p>");
				//$("#myModal #rozklad_alko").append("<tr><td>"+i/10+"</td><td>"+(promile/weight(plec,waga)).toFixed(2)+" &permil;</td><td></td><td></td></p>");

				for(y; y < time_end;){
					promile_wchlanianie += gramy;
					insert_table += "<tr style='background-color:#e4e4e4;'><td>"+date_all+"</td><td>"+(promile_wchlanianie/weight(plec,waga)).toFixed(2)+" &permil;</td><td>"+date_start+"</td><td>-</td></p>";
					date_all = add_half_min(date_all);
					date_start += 0.5;

					//console.log(promile_wchlanianie);
					y = y+0.5;
					//console.log("y="+y);
				}

				promile_check = promile/weight(plec,waga);
				//console.log("Promile check = "+promile_check);
				if(promile_check >= 2.5){
					color = color_alert;
				} else if(promile_check < 2.5 && promile_check >= 0.5){
					color = color_warning;
				} else if(promile_check < 0.5 && promile_check >= 0.2){
					color = color_watchout;
				} else if(promile_check < 0.2){
					color = color_good;
				} else if(promile_check == 0.0){
					color = color_zero;
				}


				insert_table += "<tr><td>"+date_all+"</td><td style='color: #"+color+"'>"+(promile/weight(plec,waga)).toFixed(2)+" &permil;</td><td>"+date_start+"</td><td>"+date_end+"</td></p>";
				date_start += 0.5;
				date_end += 0.5;
				//console.log(promile);
				var promile = promile - ucieczka_alko(promile);
				if(promile <= 0)
					break;
				date_all = add_half_min(date_all);
			}
			$("#myModal #rozklad_alko").append("<table class='table col-md-12'><tr><th>Godzina</th><th>Ilość promili</th><th>Godzin od początku picia</th><th>Godzin od zakończenia picia</th></tr><tbody>"+insert_table+"</tbody></table>");
		}

		function back(){
			$("#myModal #alko-result").hide("slow");
			$("#myModal #alko-form").show("slow");
			$("#myModal #formularz")[0].reset();
		}

		function add_half_min(time){
			date_split = time.split(":");
			if(date_split[1] == "00"){
				date_split[1] = "30"
			}
			else{
				date_split[0] = parseInt(date_split[0])+1;
				if(date_split[0] < 10){
					date_split[0] = "0"+date_split[0];
				}
				date_split[1] = "00";
			}
			if(date_split[0] >= 24){
				date_split[0] = "00"
			}

			time = date_split.join(":");
			return time;
		}

		function licz(plec,waga,wzrost,alcohol_1,alcohol_2,alcohol_3,alcohol_4){
			return (alcohol(alcohol_1[0], alcohol_1[2])+alcohol(alcohol_2[0], alcohol_2[2])+alcohol(alcohol_3[0], alcohol_3[2])+alcohol(alcohol_4[0], alcohol_4[2]))/(weight(plec,waga,wzrost));
		}

		function sex(type){
			switch(type){
				case 'male':
				return 0.7;
				break;

				case 'female':
				return 0.6;
				break;
			}
		}
		
		function dawka_smiertelna(waga){
			return waga*4;
		}

		function weight(s, weight, height){
			temp = sex(s)*weight;
			height = height / 100;
			bmi = (weight/(height*height));

			count_bmi = 0;

			if(bmi > 25){
				count_bmi = ((bmi - 25) * (height*height))*-1;
			}

			if(bmi < 18.5){
				count_bmi = ((18.5 - bmi) * (height*height));
			}

			return temp;
		}

		function sex(type){
			switch(type){
				case 'male':
				return 0.7;
				break;

				case 'female':
				return 0.6;
				break;
			}
		}

		function alcohol(size, percent){
			return ((size * (percent / 100))*0.79);
		}

		function ucieczka_alko(m){
			return ((10*m)/(4.2 + m)/2);
		}