<html>
<!-- Script by hscripts.com -->
<!-- BMI : Body mass index Script Provided By HIOXINDIA -hioxindia.com -->
<form name=bmi>
Weight: <input type=text name=wg size=5 >
<select name=opt1 onChange="unit()" >
<option value="pounds">pounds</option>
<option value="kilograms" selected>kilograms</option>
</select>
Height: <select name=opt2 onChange="conv(1)">
<option value="1">1'</option>
<option value="2">2'</option>
<option value="3">3'</option>
<option value="4">4'</option>
<option value="5">5'</option>
<option value="6">6'</option>
<option name=feet value="7">7'</option>
</select>
<select name=opt3 onChange="conv(2)">
<option value="0">0"</option>
<option value="1">1"</option>
<option value="2">2"</option>
<option value="3">3"</option>
<option value="4">4"</option>
<option value="5">5"</option>
<option value="6">6"</option>
<option value="7">7"</option>
<option value="8">8"</option>
<option value="9">9"</option>
<option value="10">10"</option>
<option value="11">11"</option>
</select>
or cms<input type=text name=ht size=5 onkeyup="conv(3)" class='innerc resform'>
<input type=button name=cc value="Calculate" onClick="calc()">
<table cellspacing=0 cellpadding=3 border=0>
<tr align=center class="abouttabletext"><td>SI Units: <input type=text readonly class=resform name=si>
<tr align=center class="abouttabletext">
<td>US Units: <input type=text readonly class=resform name=us>
<tr align=center class="abouttabletext"><td>UK Units: <input type=text readonly class=resform name=uk>
</table>
<table width=100%>
<tr><td colspan=2 align=center>
<input type="text" name=desc size=30 class=content readonly style="border:0px;">
</td>
</tr>
</table>
</form>
<script type="text/javascript" src="hbmi/bmi.js">
</script>
<!-- Script by hscripts.com -->
</html>