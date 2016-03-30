function el(tid) {return document.getElementById(tid);}

			function IO(U, V) {
				var X = !window.XMLHttpRequest ? new ActiveXObject('Microsoft.XMLHTTP') : new XMLHttpRequest();
				X.open(V ? 'PUT' : 'GET', U, false );
				X.setRequestHeader('Content-Type', 'text/html')
				X.send(V ? V : '');
				return X.responseText;
			}	
			function changeDiv(which) {
				switch (which) {
					case '1' : el('content').innerHTML = IO('docs/home.html');          break;
					
				    case '2'  : el('content').innerHTML = IO('docs/C++.html');          break;
					case '3'  : el('content').innerHTML = IO('docs/patter.html');       break;
					case '4'  : el('content').innerHTML = IO('docs/computer.html');     break;
					
					case '5'  : el('content').innerHTML = IO('docs/impcv.html');        break;
					case '6'  : el('content').innerHTML = IO('docs/researc.html');      break;
					
					case '7'  : el('content').innerHTML = IO('docs/kaval.html');        break;	
					case '8'  : el('content').innerHTML = IO('docs/verras.html');        break;	
					case '9'  : el('content').innerHTML = IO('docs/phdo.html');             break;
					case '10'  : el('content').innerHTML = IO('docs/post_Under.html');       break;
																	
					case '11' : el('content').innerHTML = IO('docs/publications.html');  break;	
					case '12' : el('content').innerHTML = IO('docs/greekdb.html');       break;					
				    case '13' : el('content').innerHTML = IO('docs/historicdb.html');    break;
					
					case '14' : el('content').innerHTML = IO('docs/thesi.html');        break;
					
					case '15' : el('content').innerHTML = IO('docs/events.html');         break;
				    case '16' : el('content').innerHTML = IO('docs/edoc.html');          break;
					case '17' : el('content').innerHTML = IO('docs/robotics.html');      break;
					
				
					
					
					
														
				}
			}