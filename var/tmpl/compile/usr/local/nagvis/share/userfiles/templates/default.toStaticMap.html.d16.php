<?php
ob_start(); /* template body */ ?><div id="toStaticMap">
<form name="toStaticMap" id="toStaticMap" action="#" onsubmit="submitFrontendForm('<?php echo $this->scope["formTarget"];?>&amp;show='+escapeUrlValues(oPageProperties.map_name)+getViewParams(), 'toStaticMap');return false" method="post">
<label><?php echo $this->scope["langNewName"];?><br />
    <input type="text" name="target" id="target" /></label>
    <input type="submit" name="submit" value="<?php echo $this->scope["langSave"];?>" />
</form>
</div>
<script type="text/javascript">
try{document.getElementById('newName').focus();}catch(e){}
</script>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>