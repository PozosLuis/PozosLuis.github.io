<?php include('Cabecera.php')?>
<h3>Menú de sabores</h3>
<form action="">
    <input type="checkbox" name="sabor1" id="sabor1">
    <label for="sabor1">Vainilla.............................$300.00</label><br>
    <input type="checkbox" name="sabor2" id="sabor2">
    <label for="sabor2">Chocolate.........................$300.00</label><br>
    <input type="checkbox" name="sabor3" id="sabor3">
    <label for="sabor3">Mocha..............................$300.00</label><br>
    <input type="checkbox" name="sabor4" id="sabor4">
    <label for="sabor4">Zanahoria.........................$300.00</label><br>
    <input type="checkbox" name="sabor5" id="sabor5">
    <label for="sabor5">Plátano.............................$300.00</label><br>
    <input type="checkbox" name="sabor6" id="sabor6">
    <label for="sabor6">Manzana canela...............$300.00</label>
<h3>Menú de adornos</h3>
    <input type="checkbox" name="adorno1" id="adorno1">
    <label for="adorno1">Chispas de chocolate........$50.00</label><br>
    <input type="checkbox" name="adorno2" id="adorno2">
    <label for="adorno2">Fondant.............................$50.00</label><br>
    <input type="checkbox" name="adorno3" id="adorno3">
    <label for="adorno3">Nuez..................................$50.00</label><br>
    <input type="checkbox" name="adorno4" id="adorno4">
    <label for="adorno4">Fresas................................$50.00</label><br>
    <input type="checkbox" name="adorno5" id="adorno5">
    <label for="adorno5">Platano..............................$50.00</label><br>
    <input type="checkbox" name="adorno6" id="adorno6">
    <label for="adorno6">Merengue..........................$50.00</label><br>
    <input type="checkbox" name="adorno7" id="adorno7">
    <label for="adorno7">Cerezas..............................$50.00</label><br>
    <input type="checkbox" name="adorno8" id="adorno8">
    <label for="adorno8">Durazno.............................$50.00</label><br>
    <input type="checkbox" name="adorno9" id="adorno9">
    <label for="adorno9">Plátano...............................$50.00</label><br>
    <input type="checkbox" name="adorno10" id="adorno10">
    <label for="adorno10">Merengue...........................$50.00</label><br>
    <input type="checkbox" name="adorno11" id="adorno11">
    <label for="adorno11">Grageas de colores.............$50.00</label><br>
    <input type="checkbox" name="adorno12" id="adorno12">
    <label for="adorno12">Grageas de chocolate.........$50.00</label><br>
    <h4>Descripción del pastel</h4>
    <textarea name="descripcion" id="descripcion" cols="50" rows="8"></textarea><br><br>
    <input type="button" value="Realizar pedido">
</form>

<form action=""><input type="button" value="Atras" onclick = "history.back()"></form>
<?php include('Pie.php')?>