<?php /* Smarty version 2.6.26, created on 2013-08-25 03:55:40
         compiled from /home/avazquez/public_html/opendocman//templates/common/filetype_add.tpl */ ?>
    <table>
        <thead>
            <tr>
                <th>
                    <?php echo $this->_tpl_vars['g_lang_label_add']; ?>
&nbsp;<?php echo $this->_tpl_vars['g_lang_label_filetype']; ?>

                </th>

            </tr>
        </thead
        <tbody>
            <tr>
                <td>
                    <form action="filetypes.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="Submit" value="add" />
            ex.: application/pdf<br />
            <input type="text" name="filetype" />
                    </td>
                <td>
                        <div class="buttons"><button class="positive" type="submit" name="submit" value="AddNewSave"><?php echo $this->_tpl_vars['g_lang_button_save']; ?>
</button>
                    </td>
                    <td >
                        <div class="buttons">
                            <button class="negative" type="Submit" name="submit" value="Cancel"><?php echo $this->_tpl_vars['g_lang_button_cancel']; ?>
</button>
                        </div>
                     </td>
        </tr>
    </tbody>
    </table>