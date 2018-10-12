<!--<button type="submit" class="btn btn-warning"><a href="uploads/calidad/pdf/mantenimiento_maquina_ULV.pdf" onclick="javascript:void window.open('uploads/calidad/pdf/mantenimiento_maquina_ULV.pdf','1386884552501','width=700,height=300,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;">Ver plan</a></button>-->
<?php
include'acciones.php';
echo "<a href='#' alt='Image Tooltip' rel='tooltip' content='<table class=print><tr>";
                    echo "  <td>  EQUIPO</td>\n"; 
                    echo "  <td>OPERACIÓN</td>\n"; 
                    echo "  <td>PERIODICIDAD</td>\n"; 
                    echo " </tr>\n"; 
                    echo " <tr>\n"; 
                    echo "  <td>SECADO</td>\n"; 
                    echo "  <td>Limpiar y secar</td>\n"; 
                    echo "  <td>Cada 15 días</td>\n"; 
                    echo " </tr>\n"; 
                    echo " <tr>\n"; 
                    echo "  <td>PRESIÓN</td>\n"; 
                    echo "  <td>Engrasar pistones de las bombas</td>\n"; 
                    echo "  <td>Semanal o antes de cada uso</td>\n"; 
                    echo " </tr>\n"; 
                    echo " <tr>\n"; 
                    echo "  <td>PRESIÓN</td>\n"; 
                    echo "  <td>Estanqueidad de conducciones; estado de válvulas y componentes</td>\n"; 
                    echo "  <td>Semanal o antes de cada uso</td>\n"; 
                    echo " </tr>\n"; 
                    echo " <tr>\n"; 
                    echo "  <td>TOLVA</td>\n"; 
                    echo "  <td>Estanqueidad de conducciones; estado de válvulas y componentes</td>\n"; 
                    echo "  <td>Semanal o antes de cada uso</td>\n"; 
                    echo " </tr>\n"; 
                    echo " <tr>\n"; 
                    echo "  <td>RED AIRE</td>\n"; 
                    echo "  <td>Comprobar estado</td>\n"; 
                    echo "  <td>Semanal o antes de cada uso</td>\n"; 
                    echo " </tr>\n"; 

                    
                    echo "</table>'>";
                                                
            echo "Ver plan</a>";
?>