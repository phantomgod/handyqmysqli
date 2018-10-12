function ClickCheckAll(vol)   
{   
  
var i=1;   
for(i=1;i<=document.frmMain.hdnCount.value;i++)   
{   
if(vol.checked == true)   
{   
eval("document.frmMain.chkDel"+i+".checked=true");   
}   
else  
{   
eval("document.frmMain.chkDel"+i+".checked=false");   
}   
}   
}   
  
function onDelete()   
{   
//if(confirm('<?php echo QUIERE_BORRAR; ?>')==true)
if(confirm('¡Delete?!')==true)
{   
return true;   
}   
else  
{   
return false;   
}   
}