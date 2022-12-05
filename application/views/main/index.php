<p>Количество тэгов:</p>
<table>
    <?php foreach ($array as $key => $value) { ?>
    <table class="table-auto">
        <tr>
            <td><?php echo $key; ?> - </td>
            <td><?php echo $value; ?></td>
        </tr>
    </table>

    <?php } ?>
</table>