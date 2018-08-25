<?php
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email_from = $_POST['email']; 
    $telephone = $_POST['telephone']; 
    $comment = $_POST['comment']; 
?>
<html>
    <head>
        <title>Contact Page</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
		<script>
			$(document).ready(function(){
				var first_name = "<?php echo $first_name ?>";
				var last_name = "<?php echo $last_name; ?>";
				var email = "<?php echo $email_from; ?> ";
				var phone = "<?php echo $telephone; ?>";
				var comment = "<?php echo $comment; ?>";
				$("#button_done").click(function(){
					$.post("send_form_email.php",{email: email, first_name: first_name, last_name: last_name, telephone: phone, comment: comment},function(data){
						$(".content").html(data);
					})
				})
			})
		</script>
    </head>
  	<body>
		<div class="content">
			<div>
				<p><span>問い合わせの情報</span></p>
			</div>
			<div>
				<table width="400" border="1" class ="confirm">
					<tbody>
					<tr>
						<th scope="row">First name</th>
						<td><?php echo $first_name; ?></td>
					</tr>
					<tr>
						<th scope="row">Last name</th>
						<td><?php echo $last_name; ?></td>
					</tr>
					<tr>
						<th scope="row">Email Address</th>
						<td><?php echo $email_from; ?></td>
					</tr>
					<tr>
						<th scope="row">Phone number</th>
						<td><?php echo $telephone; ?></td>
					</tr>
					<tr>
						<th scope="row">Comment</th>
						<td><?php echo $comment; ?></td>
					</tr>
					</tbody>
				</table>
			</div>
			<div>
				<input type="button" id="button_back" value="修正する" onclick="history.back()" >
				<input type="button" id="button_done" value="問い合わせ完了" name="done">
			</div>
		</div>
  	</body>
</html>