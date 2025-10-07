<h2><?php echo CONTACT_FORM; ?></h2>
<p><?php echo CONTACT_CONTENT; ?></p>

<form method="post">
    <table>
        <tr>
            <td><?php echo USERNAME; ?>:</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td><?php echo BIRTHDAY; ?>:</td>
            <td><input type="date" name="birthday"></td>
        </tr>
        <tr>
            <td><?php echo ADDRESS; ?>:</td>
            <td><input type="text" name="address"></td>
        </tr>
        <tr>
            <td><?php echo MAIL; ?>:</td>
            <td><input type="email" name="mail"></td>
        </tr>
        <tr>
            <td><?php echo PHONE; ?>:</td>
            <td><input type="text" name="phone"></td>
        </tr>
        <tr>
            <td><?php echo COMMENT; ?>:</td>
            <td><textarea name="comment" rows="5" cols="30"></textarea></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="reset" value="<?php echo RESET; ?>">
                <input type="submit" value="<?php echo SUBMIT; ?>">
            </td>
        </tr>
    </table>
</form>
