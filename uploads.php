
<?php

include_once 'header.php';

?>

<div class="container-fluid" style="background-color: #bbb;">
<h3 style="margin-top: 100px; margin-bottom: 100px; background-color: #bbb;">multipart/form-data enable's us to pass on ou files into upload.php</h3>

<form action="upload.php" method="POST" enctype="multipart/form-data">
	<input type="file" name="file">
	<button type="submit" name="submit">Upload</button>
</form>

</div> 



<?php

include_once 'footer.php';

?>