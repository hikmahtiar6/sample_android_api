<?php echo form_open('register/check', 'method="post"'); ?>
    <table>
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><?php echo form_input('realname', ''); ?></td>
        </tr>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><?php echo form_input('username', ''); ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><?php echo form_input('email', ''); ?></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td><?php echo form_password('password', ''); ?></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><?php echo form_submit('', 'Register'); ?></td>
        </tr>
    </table>
<?php echo form_close(); ?>