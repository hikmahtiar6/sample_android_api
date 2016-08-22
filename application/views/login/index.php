<?php echo form_open('login/check', 'method="post"'); ?>
    <table>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><?php echo form_input('username', ''); ?></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td><?php echo form_password('password', ''); ?></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><?php echo form_submit('', 'Login'); ?></td>
        </tr>
    </table>
<?php echo form_close(); ?>