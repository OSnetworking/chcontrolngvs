<?php
ob_start(); /* template body */ ?><input type="hidden" /><!-- The template must not start with a script tag. This would be ignored by IE //-->
<script type="text/javascript" src="<?php echo $this->scope["htmlBase"];?>/frontend/nagvis-js/js/MapManageTmpl.js"></script>

<form name="add" id="add" method="POST" action="javascript:submitFrontendForm('<?php echo $this->scope["htmlBase"];?>/server/core/ajax_handler.php?mod=Map&amp;act=doTmplAdd', 'add');" enctype="" onsubmit="return checkTmplAdd();">
    <table name="mytable" class="mytable" id="table_add">
        <tbody>
            <tr><th class="cat" colspan="2"><h2><?php echo $this->scope["langTmplAdd"];?></h2></th></tr>
            <tr class="must"><td class="tdlabel"><?php echo $this->scope["langTmplName"];?></td><td class="tdfield"><input id="name" type="text" name="name" value="" onBlur="" /></td></tr>
            <tr><td></td><td><a href="javascript:formAddOption('add')"><?php echo $this->scope["langTmplAddOption"];?></a></td></tr>
            <tr><td class="tdlabel" colspan="2" align="center"><input class="submit" type="submit" name="submit" id="commit" value="<?php echo $this->scope["langTmplDoAdd"];?>" /></td></tr>
        </tbody>
    </table>
    <input type="hidden" name="map" value="<?php echo $this->scope["map"];?>" />
</form>

<form name="modify" id="modify" method="POST" action="javascript:submitFrontendForm('<?php echo $this->scope["htmlBase"];?>/server/core/ajax_handler.php?mod=Map&amp;act=doTmplModify', 'modify');" enctype="" onsubmit="return checkTmplModify();">
    <table name="mytable" class="mytable" id="table_modify">
        <tbody>
            <tr><th class="cat" colspan="2"><h2><?php echo $this->scope["langTmplModify"];?></h2></th></tr>
            <tr class="must">
                <td class="tdlabel"><?php echo $this->scope["langTmplName"];?></td>
                <td class="tdfield">
                    <select id="name" name="name" onChange="putTmplOpts(this.value)" onBlur="">
                        <option value=""></option>
                        <?php 
$_fh0_data = (isset($this->scope["templates"]) ? $this->scope["templates"] : null);
if ($this->isArray($_fh0_data) === true)
{
	foreach ($_fh0_data as $this->scope['template']=>$this->scope['val'])
	{
/* -- foreach start output */
?>
                        <option value="<?php echo $this->scope["template"];?>"><?php echo $this->scope["template"];?></option>
                        <?php 
/* -- foreach end output */
	}
}?>

                    </select>
                </td>
            </tr>
            <tr><td></td><td><a href="javascript:formAddOption('modify')"><?php echo $this->scope["langTmplAddOption"];?></a></td></tr>
            <tr><td class="tdlabel" colspan="2" align="center"><input class="submit" type="submit" name="submit" id="commit" value="<?php echo $this->scope["langTmplDoModify"];?>" /></td></tr>
        </tbody>
    </table>
    <input type="hidden" name="map" value="<?php echo $this->scope["map"];?>" />
</form>

<form name="delete" id="delete" method="POST" action="javascript:submitFrontendForm('<?php echo $this->scope["htmlBase"];?>/server/core/ajax_handler.php?mod=Map&amp;act=doTmplDelete', 'delete');" enctype="" onsubmit="return checkTmplDelete();">
    <table name="mytable" class="mytable" id="table_delete">
        <tr><th class="cat" colspan="2"><h2><?php echo $this->scope["langTmplDelete"];?></h2></th></tr>
        <tr>
            <td class="tdlabel"><?php echo $this->scope["langTmplChoose"];?></td><td class="tdfield">
                <select id="name" name="name" onChange="" onBlur="">
                    <option value=""></option>
                    <?php 
$_fh1_data = (isset($this->scope["templates"]) ? $this->scope["templates"] : null);
if ($this->isArray($_fh1_data) === true)
{
	foreach ($_fh1_data as $this->scope['template']=>$this->scope['val'])
	{
/* -- foreach start output */
?>
                    <option value="<?php echo $this->scope["template"];?>"><?php echo $this->scope["template"];?></option>
                    <?php 
/* -- foreach end output */
	}
}?>

                </select>
            </td>
        </tr>

        <tr><td class="tdlabel" colspan="2" align="center"><input class="submit" type="submit" name="submit" id="commit" value="<?php echo $this->scope["langTmplDoDelete"];?>" /></td></tr>
    </table>
    <input type="hidden" name="map" value="<?php echo $this->scope["map"];?>" />
</form>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>