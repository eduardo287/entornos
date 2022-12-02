<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>




 <?php
function mensaje($mensaje, $pagina){
	echo "
	<script>
	$(document).ready(function(){
		$('#myModal').modal('show');
		});
		</script>
		";

		echo "
		<div class='modal' tabindex='-1' id='myModal'data-bs-backdrop='static' data-bs-keyboard='false'>
		<div class='modal-dialog'>
		<div class='modal-content'>

		<div class='modal-body'>
		<center>
		<b> ".$mensaje."</b>
		</center>
		</div>

		<div class='modal-footer'>
		<button type='button' class='btn btn-secondary' data-bs-dismiss='modal' onclick='regresarPaginaAnterior()'>Cerrar</button>
		</div>
		</div>
		</div>
		</div>

		<script>
		function regresarPaginaAnterior(){
			window.open('".$pagina."', '_self');
		}
		</script>
		";
	}
?>