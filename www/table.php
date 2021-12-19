<!-- Область основного контента -->
<!-- Таблица -->
<form id="form_table" action="<? echo $_SERVER['REQUEST_URI'] ?>" method="POST" style="padding-left: 0; ">
	<Label>Кол-во столбцов</Label><br>
	<input type="text" name="cols"><br>
	<label>Кол-во строк</label><br>
	<input type="text" name="rows"><br>
	<label>Цвет(RGB)</label><br>
	<div class="color_form" style="width: 200px;">
		<input type="text" name="colorr" style="width: 45px;">
		<input type="text" name="colorg" style="width: 45px;">
		<input type="text" name="colorb" style="width: 43px;">
	</div> <br>
	<input type="submit" name="btn" value="Создать"><br><br>
</form>
<?php
if (isset($_POST['btn'])) {
	drawTable($_POST['cols'], $_POST['rows'], $_POST['colorr'], $_POST['colorg'], $_POST['colorb']);
}
?>
<!-- Таблица -->
<!-- Область основного контента -->