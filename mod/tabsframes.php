<?php
/**
* Mod administrar auditores
*
* PHP version 5
*
* @category Mod
* @package  Handy-q
* @author   JJuan <javier@textblock.org>
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
* @link     http://www.textblock.org
*/
?>
<!DOCTYPE html">
<html>
<head>
<script src="jscripts/sistemadepestanas.js" type="text/javascript"></script>
<!--<style type="text/css">
table.table {
    border: 0px;
    position: absolute;
    left: 25%;
    top: 10px;
    float: left;
    width: 20%;
    height: 2%;
    display: inline-block;
}

tbody tr td {
    height: 1em;
    vertical-align: top;
    text-align: left;
    padding-left: 10px;
}
</style>-->
</head>
<body>

    <div id="panel">
        <ul id="tabs">
            
            <li id="tab_01"><a href="#" onclick="tab('tab_01','panel_01');">
                <i class="fa fa-edit fa-2x" style="color:#00BCD4;"></i>
                <?php echo AUDITORES; ?></a></li>
            <li id="tab_02"><a href="#" onclick="tab('tab_02','panel_02');">
                <i class="fa fa-edit fa-2x" style="color:Goldenrod;"></i>
                <?php echo TRABAJADORES; ?></a></li>
            <li id="tab_03"><a href="#" onclick="tab('tab_03','panel_03');">
                <i class="fa fa-edit fa-2x" style="color:Orange;"></i>
                <?php echo INSPECTORES; ?></a></li>
            <li id="tab_04"><a href="#" onclick="tab('tab_04','panel_04');">
			<i class="fa fa-file-image-o fa-2x" style="color:#1A237E;"></i>
            <?php echo IMAGENES; ?></a></li>            
            <li id="tab_05"><a href="#" onclick="tab('tab_05','panel_05');">
                <i class="fa fa-cloud-upload fa-2x" style="color:#1A237E;"></i>
                <?php echo UPLOADIMAGE; ?></a></li>            
        </ul>
        <div id="paneles">
            
            <div id="panel_01">

                <!--********************************************AUDITORES**********************************************************-->
                <table class="table">
                    <tr>
                        <td>
							<span onMouseOver="showdiv(event,'<?php echo AUDITORIAS_ANADIR_AUDITOR; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=auditores_admin2&amp;aktion=add" title="<?php echo AUDITORIAS_ANADIR_AUDITOR; ?>">
                                <i class="fa fa-plus fa-2x" style="color:#00BCD4;"></i></a>
							</span>							
								<!--<p
                                    class="ToolText"
                                    onMouseOver="javascript:this.className='ToolTextHover'"
                                    onMouseOut="javascript:this.className='ToolText'">
                                    <a href="?seccion=auditores_admin2&amp;aktion=add">
                                    <i class="fa fa-plus fa-2x" style="color:#00BCD4;"></i>
                                    <span>< ?php echo AUDITORIAS_ANADIR_AUDITOR; ?></span></a>
                                </p>-->
                        </td>                        
                        <td>
							<span onMouseOver="showdiv(event,'<?php echo AUDITORIAS_CAMBIAR_AUDITOR; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=auditores_admin2c&amp;aktion=change" title="<?php echo AUDITORIAS_CAMBIAR_AUDITOR; ?>">
                                <i class="fa fa-pencil fa-2x" style="color:#00BCD4;"></i></a>
							</span>		
                        </td>
                        <td>
							<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_IMPRIMIR_AUDITOR; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=auditores_print&amp;aktion=print" title="<?php echo MENU_ALT_IMPRIMIR_AUDITOR; ?>">
                                <i class="fa fa-print fa-2x" style="color:#00BCD4;"></i></a>
							</span>
                        </td>
                        <td>
							<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_BORRAR_AUDITOR; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=checkbox3_auditores" title="<?php echo MENU_ALT_BORRAR_AUDITOR; ?>">
                                <i class="fa fa-trash fa-2x" style="color:#00BCD4;"></i></a>
							</span>
                        </td>                        
                        
                    </tr>
                </table>

                <br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img
                    src="images/auditores.png" width="200px" alt="<?php echo AUDITORES; ?>" title="<?php echo AUDITORES; ?>" />


                <!--**************************************************************************************************************************-->

            </div>
            <div id="panel_02">


                <!--****************************************TRABAJADORES******************************************************-->
                <table class="table">
                    <tr>
                        <td width="100px">
							<span onMouseOver="showdiv(event,'<?php echo TRABAJADOR_ANADIR_TRABAJADOR; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=trabajadores_admin2&amp;aktion=add" title="<?php echo TRABAJADOR_ANADIR_TRABAJADOR; ?>">
                                <i class="fa fa-plus fa-2x" style="color:Goldenrod;"></i></a>
							</span>
                        </td>                    
                        <td width="100px">
							<span onMouseOver="showdiv(event,'<?php echo TRABAJADOR_CAMBIAR_TRABAJADOR; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=trabajadores_admin2c&amp;aktion=change" title="<?php echo TRABAJADOR_CAMBIAR_TRABAJADOR; ?>">
                                <i class="fa fa-pencil fa-2x" style="color:Goldenrod;"></i></a>
							</span>
                        </td>                    
                        <td width="100px">
							<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_BORRAR_TRABAJADORES; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=checkbox3_trabajadores" title="<?php echo MENU_ALT_BORRAR_TRABAJADORES; ?>">
                                <i class="fa fa-trash-o fa-2x" style="color:Goldenrod;"></i></a>
							</span>
                        </td>
                        <td width="100px">
							<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_IMPRIMIR_TRABAJADOR; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=trabajadores_print&amp;aktion=print" title="<?php echo MENU_ALT_IMPRIMIR_TRABAJADOR; ?>">
                                <i class="fa fa-print fa-2x" style="color:Goldenrod;"></i></a>
							</span>
                        </td>
						<td width="100px">
							<span onMouseOver="showdiv(event,'<?php echo COMPROBAR_CARNETS; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=carnetsalert" title="<?php echo COMPROBAR_CARNETS; ?>">
								<i class="fa fa-newspaper-o fa-2x" style="color:Goldenrod;"></i></a>
							</span>
                        </td>
						
                    </tr>
                </table>
                <!--**************************************************************************************************************************-->

                <br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img
                    src="images/trabajadores.png" width="150px" alt="<?php echo TRABAJADORES; ?>" title="<?php echo TRABAJADORES; ?>" />


            </div>
            <div id="panel_03">

                <!--*******************************************INSPECTORES*************************************************-->

                <table class="table">
                    <tr>
                        <td width="100px">
							<span onMouseOver="showdiv(event,'<?php echo INSPECTORES_ANADIR_INSPECTOR; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=inspectores_admin2&amp;aktion=add" title="<?php echo INSPECTORES_ANADIR_INSPECTOR; ?>">
								<i class="fa fa-plus fa-2x" style="color:Orange;"></i></a>
							</span>
                        </td>                        
                        <td width="100px">						
							<span onMouseOver="showdiv(event,'<?php echo INSPECTORES_CAMBIAR_INSPECTOR; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=inspectores_admin2c&amp;aktion=change" title="<?php echo INSPECTORES_CAMBIAR_INSPECTOR; ?>">
								<i class="fa fa-pencil fa-2x" style="color:Orange;"></i></a>
							</span>
                        </td>                        
                        <td width="100px">
							<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_BORRAR_INSPECTOR; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=checkbox3_inspectores" title="<?php echo MENU_ALT_BORRAR_INSPECTOR; ?>">
								<i class="fa fa-trash-o fa-2x" style="color:Orange;"></i></a>
							</span>
                        </td>
                        <td width="100px">
							<span onMouseOver="showdiv(event,'<?php echo MENU_ALT_IMPRIMIR_INSPECTOR; ?>');"
								onMouseOut="hiddenDiv()" style='display: table;'>
								<a href="?seccion=inspectores_print&amp;aktion=print" title="<?php echo MENU_ALT_IMPRIMIR_INSPECTOR; ?>">
								<i class="fa fa-print fa-2x" style="color:Orange;"></i></a>
							</span>
                        </td>
                    </tr>
                </table>

                <!--**************************************************************************************************************************-->

                <br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img
                    src="images/inspectores.png" width="200px" alt="<?php echo INSPECTORES; ?>" title="<?php echo INSPECTORES; ?>" />

            </div>
            
        <!--**************************************************************************************************************************-->            
            <div id="panel_04">

                <iframe width="1000px" height="800px" frameborder="0"
                    scrolling="yes" marginheight="0" marginwidth="0"
                    src="mod/ajaximage/selectfolder.php">
                    <p>Your browser does not support iframes.</p>
                </iframe>
            </div>
            
        <!--**************************************************************************************************************************-->
            
            <div id="panel_05">

                <iframe width="600px" height="800px" frameborder="0" scrolling="no"
                    marginheight="0" marginwidth="0" src="mod/ajaximage/index.php">
                    <p>Your browser does not support iframes.</p>
                </iframe>


            </div>
            
    </div>
        <script type="text/javascript">
        tab('tab_01','panel_01');
        tab('tab_02','panel_02');
        tab('tab_03','panel_03');
        tab('tab_04','panel_04');
        tab('tab_05','panel_05');
    </script>
    </div>
</body>
</html>